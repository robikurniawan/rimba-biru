<?php

namespace App\Http\Controllers;

use App\Models\CategoryNews;
use Illuminate\Http\Request;
use DataTables;

class CategoryNewsController extends Controller
{

    public function index(Request $request)
    {
        return view('app.category_news.index');
    }

    public function json()
    {
        $data = CategoryNews::orderBy('id', 'DESC')->get();

        return Datatables::of($data)
            ->addIndexColumn()


            ->addColumn('action', function ($row) {
                $editUrl = route('category_news.edit', $row->id);
                $detail = route('category_news.detail', $row->id);
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
        return view('app.category_news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required'
        ]);

        $data = array(
            'name' => $request->name
        );

        CategoryNews::create($data);
        return redirect()->route('category_news.index')->with('success', ' Created successfully.');
    }


    public function detail(Request $request, $id)
    {
        $data['category_news'] = CategoryNews::where('id', $id)->first();
        return view('app.category_news.detail', $data);
    }

    public function edit(Request $request, $id)
    {
        $data['category_news'] = CategoryNews::where('id', $id)->first();
        return view('app.category_news.edit', $data);
    }


    public function update(Request $request, CategoryNews $id)
    {
        request()->validate([
            'name'  => 'required'
        ]);

        $data = array(
            'name' => $request->name
        );

        CategoryNews::where('id', $request->id)->update($data);

        return redirect()->route('category_news.index')->with('success', 'Updated successfully.');
    }


    public function destroy($id)
    {
        $data = CategoryNews::where('id', $id)->delete();
        return response()->json(array('status' => "true", 'action' => 'delete', 'message' => " deleted successfully", $data));
    }
}
