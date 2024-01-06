<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use DataTables;

class FaqController extends Controller
{

    public function index(Request $request)
    {
        return view('app.faq.index');
    }

    public function json()
    {
        $data = Faq::orderBy('id', 'DESC')->get();

        return Datatables::of($data)
            ->addIndexColumn()


            ->addColumn('action', function ($row) {
                $editUrl = route('faq.edit', $row->id);
                return '
                    <a href="' . $editUrl . '" class="btn btn-sm btn-warning waves-effect waves-light"> <i class="ri-edit-2-line"></i> </a> 
                    <a href="#" data-id="' . $row->id . '" class="delete btn btn-sm btn-danger waves-effect waves-light" > <i class="ri-delete-bin-5-line"></i> </a>
                    
                    ';
            })

            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {
        return view('app.faq.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'questions'  => 'required',
            'response'  => 'required',
        ]);

        $data = array(
            'questions' => $request->questions,
            'response' => $request->response,
        );

        Faq::create($data);
        return redirect()->route('faq.index')->with('success', ' Created successfully.');
    }


    public function detail(Request $request, $id)
    {
        $data['faq'] = Faq::where('id', $id)->first();
        return view('app.faq.detail', $data);
    }

    public function edit(Request $request, $id)
    {
        $data['faq'] = Faq::where('id', $id)->first();
        return view('app.faq.edit', $data);
    }


    public function update(Request $request, Faq $id)
    {
        $request->validate([
            'questions'  => 'required',
            'response'  => 'required',
        ]);

        $data = array(
            'questions' => $request->questions,
            'response' => $request->response,
        );

        Faq::where('id', $request->id)->update($data);

        return redirect()->route('faq.index')->with('success', 'Updated successfully.');
    }


    public function destroy($id)
    {
        $data = Faq::where('id', $id)->delete();
        return response()->json(array('status' => "true", 'action' => 'delete', 'message' => " deleted successfully", $data));
    }
}
