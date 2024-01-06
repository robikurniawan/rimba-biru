<?php

namespace App\Http\Controllers;

use App\Models\CategoryInfo;
use Illuminate\Http\Request;
use DataTables;

class CategoryInfoController extends Controller
{

    public function index(Request $request)
    {
        return view('app.category_info.index');
    }

    public function json()
    {
        $data = CategoryInfo::orderBy('id', 'DESC')->get();

        return Datatables::of($data)
            ->addIndexColumn()
            

            ->addColumn('action', function ($row) {
                $editUrl = route('category_info.edit', $row->id);
                $detail = route('category_info.detail', $row->id);
                return '
                    <a href="' . $detail . '" class="btn btn-sm btn-success waves-effect waves-light"> <i class="ri-search-line"></i> </a> 
                    <a href="' . $editUrl . '" class="btn btn-sm btn-warning waves-effect waves-light"> <i class="ri-edit-2-line"></i> </a> 
                    <a href="#" data-id="' . $row->id . '" class="delete btn btn-sm btn-danger waves-effect waves-light" > <i class="ri-delete-bin-5-line"></i> </a>
                    
                    ';
            })

            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {
        return view('app.category_info.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required'
        ]);

        $data = array(
            'name' => $request->name
        );

        CategoryInfo::create($data);
        return redirect()->route('category_info.index')->with('success', ' Created successfully.');
    }


    public function detail(Request $request, $id)
    {
        $data['category_info'] = CategoryInfo::where('id', $id)->first();
        return view('app.category_info.detail', $data);
    }

    public function edit(Request $request, $id)
    {
        $data['category_info'] = CategoryInfo::where('id', $id)->first();
        return view('app.category_info.edit', $data);
    }


    public function update(Request $request, CategoryInfo $id)
    {
        request()->validate([
            'name'  => 'required'
        ]);

        $data = array(
            'name' => $request->name
        );

        CategoryInfo::where('id', $request->id)->update($data);

        return redirect()->route('category_info.index')->with('success', 'Updated successfully.');
    }


    public function destroy($id)
    {
        $data = CategoryInfo::where('id', $id)->delete();
        return response()->json(array('status' => "true", 'action' => 'delete', 'message' => " deleted successfully", $data));
    }
}
