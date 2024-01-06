<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use DataTables;

class SlideController extends Controller
{

    public function index(Request $request)
    {
        return view('app.slide.index');
    }

    public function json()
    {
        $data = Slide::orderBy('id', 'DESC')->get();

        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('_images', function ($row) {

                if($row->images == "") {
                    $images = "default.png";
                }else{
                    $images = $row->images;
                }
                return "<center><img width='70px'  style='border-radius:50%' src=".asset('uploads/slide/'.$images.''). "></center>";

            })

            ->addColumn('action', function ($row) {
                $editUrl = route('slide.edit', $row->id);
                $detail = route('slide.detail', $row->id);
                return '
                    <a href="'.$detail.'" class="btn btn-sm btn-success waves-effect waves-light"> <i class="ri-search-line"></i> </a> 
                    <a href="'.$editUrl.'" class="btn btn-sm btn-warning waves-effect waves-light"> <i class="ri-edit-2-line"></i> </a> 
                    <a href="#" data-id="'.$row->id.'" class="delete btn btn-sm btn-danger waves-effect waves-light" > <i class="ri-delete-bin-5-line"></i> </a>
                    
                    ';
            })

            ->rawColumns(['action', '_images'])
            ->make(true);
    }

    public function create()
    {
        return view('app.slide.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'images'  => 'required|mimes:jpg,png,jpeg,mp4',
        ]);

        $postFileName  = 'images';
        $destination = 'uploads/slide';
        $photo = date('dmYHis') . "-" . $postFileName . "." . $request->file($postFileName)->extension();
        $request->file('images')->move($destination, $photo);

        $data = array(
            'name' => $request->name,
            'images' => $photo,
        );

        Slide::create($data);
        return redirect()->route('slide.index')->with('success', ' Created successfully.');
    }


    public function detail(Request $request, $id)
    {
        $data['slide'] = Slide::where('id', $id)->first();
        return view('app.slide.detail', $data);
    }

    public function edit(Request $request, $id)
    {
        $data['slide'] = Slide::where('id', $id)->first();
        return view('app.slide.edit', $data);
    }


    public function update(Request $request, Slide $id)
    {
        request()->validate([
            'name'  => 'required',
            'images'  => 'mimes:jpg,png,jpeg'
        ]);

        if ($request->hasFile('images')) {

            $postFileName  = 'images';
            $destination = 'uploads/slide';
            $photo = date('dmYHis') . "-" . $postFileName . "." . $request->file($postFileName)->extension();
            $request->file('images')->move($destination, $photo);

            $data = array(
                'name' => $request->name,
                'images' => $photo,
            );
        } else {
            $data = array(
                'name' => $request->name
            );
        }
        Slide::where('id', $request->id)->update($data);

        return redirect()->route('slide.index')->with('success', 'Updated successfully.');
    }


    public function destroy($id)
    {
        $data = Slide::where('id', $id)->delete();
        return response()->json(array('status' => "true", 'action' => 'delete', 'message' => " deleted successfully", $data));
    }
}
