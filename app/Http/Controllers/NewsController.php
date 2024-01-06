<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\CategoryNews;
use Illuminate\Http\Request;
use DataTables;

class NewsController extends Controller
{

    public function index($id)
    {
        $data['category'] = CategoryNews::find($id);
        return view('app.news.index', $data);
    }

    public function json($categoryId)
    {
        $data = News::join('category_news', 'news.category_news_id', '=', 'category_news.id')
            ->where('news.category_news_id', $categoryId)
            ->select('news.*', 'category_news.name')
            ->orderBy('news.id', 'DESC')
            ->get();

        return Datatables::of($data)
            ->addIndexColumn()

            ->addColumn('imageX', function ($row) {

                if ($row->icon == "") {
                    $icon = "default.png";
                } else {
                    $icon = $row->image;
                }
                return "<center><img width='70px'  style='border-radius:50%' src=" . asset('uploads/news/' . $icon . '') . "></center>";
            })

            ->addColumn('tgl', function ($row) {
                return tgl_indo($row->created_at);
            })

            ->addColumn('action', function ($row) {
                $editUrl = route('news.edit', $row->id);
                $detail = route('news.detail', $row->id);
                return '
                    <a href="' . $detail . '" class="btn btn-sm btn-success waves-effect waves-light"> <i class="ri-search-line"></i> </a> 
                    <a href="' . $editUrl . '" class="btn btn-sm btn-warning waves-effect waves-light"> <i class="ri-edit-2-line"></i> </a> 
                    <a href="#" data-id="' . $row->id . '" class="delete btn btn-sm btn-danger waves-effect waves-light" > <i class="ri-delete-bin-5-line"></i> </a>
                    
                    ';
            })

            ->rawColumns(['action', 'imageX','tgl'])
            ->make(true);
    }

    public function create()
    {
        $data['categories'] = CategoryNews::all();
        return view('app.news.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_news_id'  => 'required',
            'title'  => 'required',
            'desc'  => 'required',
            'image'  => 'mimes:jpg,png,jpeg,pdf',
        ]);

        $postFileName  = 'image';
        $destination = 'uploads/news';

        if ($request->hasFile('image')) {
            $photo = date('dmYHis') . "-" . $postFileName . "." . $request->file($postFileName)->extension();
            $request->file('image')->move($destination, $photo);
        } else {
            $photo = "";
        }


        $data = array(
            'category_news_id' => $request->category_news_id,
            'title' => $request->title,
            'desc' => $request->desc,
            'image' => $photo,
            'user_id' => auth()->user()->id
        );

        $save = News::create($data)->id;
        return redirect()->route('news.detail', $save)->with('success', ' Created successfully.');
    }


    public function detail(Request $request, $id)
    {
        $data['news'] = News::join('category_news', 'news.category_news_id', '=', 'category_news.id')
            ->where('news.id', $id)
            ->select('news.*', 'category_news.name')
            ->first();

        return view('app.news.detail', $data);
    }

    public function edit(Request $request, $id)
    {
        $data['categories'] = CategoryNews::all();
        $data['news'] = News::join('category_news', 'news.category_news_id', '=', 'category_news.id')
            ->where('news.id', $id)
            ->select('news.*', 'category_news.name')
            ->first();
        return view('app.news.edit', $data);
    }


    public function update(Request $request, News $id)
    {

        $request->validate([
            'category_news_id'  => 'required',
            'title'  => 'required',
            'image'  => 'mimes:jpg,png,jpeg,pdf',
        ]);

        if ($request->hasFile('image')) {
            $postFileName  = 'image';
            $destination = 'uploads/news';
            $photo = date('dmYHis') . "-" . $postFileName . "." . $request->file($postFileName)->extension();
            $request->file('image')->move($destination, $photo);

            $data = array(
                'category_news_id' => $request->category_news_id,
                'title' => $request->title,
                'desc' => $request->desc,
                'image' => $photo,
                'user_id' => auth()->user()->id
            );
        } else {

            $data = array(
                'category_news_id' => $request->category_news_id,
                'title' => $request->title,
                'desc' => $request->desc,
                'user_id' => auth()->user()->id
            );
        }

        News::where('id', $request->id)->update($data);
        return redirect()->route('news.detail', $request->id)->with('success', 'Updated successfully.');
    }


    public function destroy($id)
    {
        $data = News::where('id', $id)->delete();
        return response()->json(array('status' => "true", 'action' => 'delete', 'message' => " deleted successfully", $data));
    }
}
