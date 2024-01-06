<?php

namespace App\Http\Controllers;

use App\Models\Partnert;
use Illuminate\Http\Request;
use DataTables;

class PartnertController extends Controller
{

    public function index(Request $request)
    {
        return view('app.partnert.index');
    }

    public function json()
    {
        $data = Partnert::orderBy('id', 'DESC')->get();

        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('icontar', function ($row) {

                if ($row->logo == "") {
                    $logo = "default.png";
                } else {
                    $logo = $row->logo;
                }
                return "<center><img width='70px'  style='border-radius:50%' src=" . asset('uploads/partnert/' . $logo . '') . "></center>";
            })

            ->addColumn('action', function ($row) {
                $editUrl = route('partnert.edit', $row->id);
                $detail = route('partnert.detail', $row->id);
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
        return view('app.partnert.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'logo'  => 'mimes:jpg,png,jpeg',
        ]);

        $postFileName  = 'logo';
        $destination = 'uploads/partnert';
        $photo = date('dmYHis') . "-" . $postFileName . "." . $request->file($postFileName)->extension();
        $request->file('logo')->move($destination, $photo);

        $data = array(
            'name' => $request->name,
            'logo' => $photo,
        );

        Partnert::create($data);
        return redirect()->route('partnert.index')->with('success', ' Created successfully.');
    }


    public function detail(Request $request, $id)
    {
        $data['partnert'] = Partnert::where('id', $id)->first();
        return view('app.partnert.detail', $data);
    }

    public function edit(Request $request, $id)
    {
        $data['partnert'] = Partnert::where('id', $id)->first();
        return view('app.partnert.edit', $data);
    }


    public function update(Request $request, Partnert $id)
    {
        request()->validate([
            'name'  => 'required',
            'logo'  => 'mimes:jpg,png,jpeg'
        ]);

        if ($request->hasFile('logo')) {

            $postFileName  = 'logo';
            $destination = 'uploads/partnert';
            $photo = date('dmYHis') . "-" . $postFileName . "." . $request->file($postFileName)->extension();
            $request->file('logo')->move($destination, $photo);

            $data = array(
                'name' => $request->name,
                'logo' => $photo,
            );
        } else {
            $data = array(
                'name' => $request->name
            );
        }
        Partnert::where('id', $request->id)->update($data);

        return redirect()->route('partnert.index')->with('success', 'Updated successfully.');
    }


    public function destroy($id)
    {
        $data = Partnert::where('id', $id)->delete();
        return response()->json(array('status' => "true", 'action' => 'delete', 'message' => " deleted successfully", $data));
    }
}
