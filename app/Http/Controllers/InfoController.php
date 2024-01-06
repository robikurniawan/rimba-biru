<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\CategoryInfo;
use Illuminate\Http\Request;
use DataTables;

class InfoController extends Controller
{

    public function index($id)
    {
        $data['category'] = CategoryInfo::find($id);
        return view('app.info.index',$data);
    }

    public function json($categoryId)
    {
        $data = Info::join('category_infos','infos.category_info_id','=','category_infos.id')
        ->where('infos.category_info_id', $categoryId)
        ->select('infos.*', 'category_infos.name')
        ->orderBy('infos.id', 'DESC')
        ->get();

        return Datatables::of($data)
            ->addIndexColumn()

            ->addColumn('attachment', function ($row) {

                if ($row->attach != "") {
                    $attach = '<a href="'.asset('uploads/info/'.$row->attach.'').'" class="btn btn-sm btn-primary">Lampiran</a>';
                } else {
                    $attach = '<a href="#" class="btn btn-sm btn-secondary">-</a>';
                }

                return $attach;
            })

            ->addColumn('action', function ($row) {
                $editUrl = route('info.edit', $row->id);
                $detail = route('info.detail', $row->id);
                return '
                    <a href="' . $detail . '" class="btn btn-sm btn-success waves-effect waves-light"> <i class="ri-search-line"></i> </a> 
                    <a href="' . $editUrl . '" class="btn btn-sm btn-warning waves-effect waves-light"> <i class="ri-edit-2-line"></i> </a> 
                    <a href="#" data-id="' . $row->id . '" class="delete btn btn-sm btn-danger waves-effect waves-light" > <i class="ri-delete-bin-5-line"></i> </a>
                    
                    ';
            })

            ->rawColumns(['action', 'attachment'])
            ->make(true);
    }

    public function create()
    {
        $data['categories'] = CategoryInfo::all();
        return view('app.info.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_info_id'  => 'required',
            'title'  => 'required',
            'attach'  => 'mimes:jpg,png,jpeg,pdf',
        ]);

        $postFileName  = 'attach';
        $destination = 'uploads/info';

        if ($request->hasFile('attach')) {
            $photo = date('dmYHis') . "-" . $postFileName . "." . $request->file($postFileName)->extension();
            $request->file('attach')->move($destination, $photo);
        }else{
            $photo = "";
        }
      

        $data = array(
            'category_info_id' => $request->category_info_id,
            'title' => $request->title,
            'desc' => $request->desc,
            'attach' => $photo,
            'user_id' => auth()->user()->id
        );

        $save = Info::create($data)->id;
        return redirect()->route('info.detail',$save)->with('success', ' Created successfully.');
    }


    public function detail(Request $request, $id)
    {
        $data['info'] = Info::join('category_infos', 'infos.category_info_id', '=', 'category_infos.id')
        ->where('infos.id', $id)
        ->select('infos.*', 'category_infos.name')
        ->first();

        return view('app.info.detail', $data);
    }

    public function edit(Request $request, $id)
    {
        $data['categories'] = CategoryInfo::all();
        $data['info'] = Info::join('category_infos', 'infos.category_info_id', '=', 'category_infos.id')
            ->where('infos.id', $id)
            ->select('infos.*', 'category_infos.name')
            ->first();
        return view('app.info.edit', $data);
    }


    public function update(Request $request, Info $id)
    {

        $request->validate([
            'category_info_id'  => 'required',
            'title'  => 'required',
            'attach'  => 'mimes:jpg,png,jpeg,pdf',
        ]);

        if ($request->hasFile('attach')) {
            $postFileName  = 'attach';
            $destination = 'uploads/info';
            $photo = date('dmYHis') . "-" . $postFileName . "." . $request->file($postFileName)->extension();
            $request->file('attach')->move($destination, $photo);

            $data = array(
                'category_info_id' => $request->category_info_id,
                'title' => $request->title,
                'desc' => $request->desc,
                'attach' => $photo,
                'user_id' => auth()->user()->id
            );

        }else{

            $data = array(
                    'category_info_id' => $request->category_info_id,
                    'title' => $request->title,
                    'desc' => $request->desc,
                    'user_id' => auth()->user()->id
                );

        }
        
        Info::where('id', $request->id)->update($data);
        return redirect()->route('info.detail',$request->id)->with('success', 'Updated successfully.');
    }


    public function destroy($id)
    {
        $data = Info::where('id', $id)->delete();
        return response()->json(array('status' => "true", 'action' => 'delete', 'message' => " deleted successfully", $data));
    }
}
