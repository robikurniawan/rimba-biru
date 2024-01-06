<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use DataTables;

class ServiceController extends Controller
{

    public function index(Request $request)
    {
        return view('app.service.index');
    }

    public function json()
    {
        $data = Service::orderBy('id', 'DESC')->get();

        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('icontar', function ($row) {

                if ($row->icon == "") {
                    $icon = "default.png";
                } else {
                    $icon = $row->icon;
                }
                return "<center><img width='70px'  style='border-radius:50%' src=" . asset('uploads/service/' . $icon . '') . "></center>";
            })

            ->addColumn('action', function ($row) {
                $editUrl = route('service.edit', $row->id);
                $detail = route('service.detail', $row->id);
                return '
                    <a href="' . $detail . '" class="btn btn-sm btn-success waves-effect waves-light"> <i class="ri-search-line"></i> </a> 
                    <a href="' . $editUrl . '" class="btn btn-sm btn-warning waves-effect waves-light"> <i class="ri-edit-2-line"></i> </a> 
                    <a href="#" data-id="' . $row->id . '" class="delete btn btn-sm btn-danger waves-effect waves-light" > <i class="ri-delete-bin-5-line"></i> </a>
                    
                    ';
            })

            ->rawColumns(['action', 'icontar'])
            ->make(true);
    }

    public function create()
    {
        return view('app.service.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'desc'  => 'required',
            'icon'  => 'mimes:jpg,png,jpeg',
        ]);

        $postFileName  = 'icon';
        $destination = 'uploads/service';
        $photo = date('dmYHis') . "-" . $postFileName . "." . $request->file($postFileName)->extension();
        $request->file('icon')->move($destination, $photo);

        $postFileName2  = 'icon';
        $photo2 = date('dmYHis') . "-" . $postFileName2 . "." . $request->file($postFileName2)->extension();
        $request->file('bg')->move($destination, $photo2);

        $data = array(
            'name' => $request->name,
            'desc' => $request->desc,
            'icon' => $photo,
            'bg' => $photo2,
        );

        Service::create($data);
        return redirect()->route('service.index')->with('success', ' Created successfully.');
    }


    public function detail(Request $request, $id)
    {
        $data['service'] = Service::where('id', $id)->first();
        return view('app.service.detail', $data);
    }

    public function edit(Request $request, $id)
    {
        $data['service'] = Service::where('id', $id)->first();
        return view('app.service.edit', $data);
    }


    public function update(Request $request, Service $id)
    {
        request()->validate([
            'name'  => 'required',
            'desc'  => 'required',
            'icon'  => 'mimes:jpg,png,jpeg',
            'bg'  => 'mimes:jpg,png,jpeg'
        ]);


        $getOld = Service::find($request->id);

        if ($request->hasFile('icon')) {

            $postFileName  = 'icon';
            $destination = 'uploads/service';
            $photo = date('dmYHis') . "-" . $postFileName . "." . $request->file($postFileName)->extension();
            $request->file('icon')->move($destination, $photo);

           
        } else {
            $photo = $getOld->icon;
        }

        if ($request->hasFile('bg')) {

            $postFileName2  = 'bg';
            $destination2 = 'uploads/service';
            $photo2 = date('dmYHis') . "-" . $postFileName2 . "." . $request->file($postFileName2)->extension();
            $request->file('bg')->move($destination2, $photo2);

           
        } else {
            $photo2 = $getOld->bg;
        }

        $data = array(
            'name' => $request->name,
            'desc' => $request->desc,
            'icon' => $photo,
            'bg' => $photo2,
        );

        
        Service::where('id', $request->id)->update($data);

        return redirect()->route('service.index')->with('success', 'Updated successfully.');
    }


    public function destroy($id)
    {
        $data = Service::where('id', $id)->delete();
        return response()->json(array('status' => "true", 'action' => 'delete', 'message' => " deleted successfully", $data));
    }
}
