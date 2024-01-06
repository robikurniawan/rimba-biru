<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use DataTables;

class TeamController extends Controller
{

    public function index(Request $request)
    {
        return view('app.team.index');
    }

    public function json()
    {
        $data = Team::orderBy('id', 'DESC')->get();

        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('avatar', function ($row) {

                if($row->ava == "") {
                    $ava = "default.png";
                }else{
                    $ava = $row->ava;
                }
                return "<center><img width='70px'  style='border-radius:50%' src=".asset('uploads/team/'.$ava.''). "></center>";

            })

            ->addColumn('action', function ($row) {
                $editUrl = route('team.edit', $row->id);
                $detail = route('team.detail', $row->id);
                return '
                    <a href="'.$detail.'" class="btn btn-sm btn-success waves-effect waves-light"> <i class="ri-search-line"></i> </a> 
                    <a href="'.$editUrl.'" class="btn btn-sm btn-warning waves-effect waves-light"> <i class="ri-edit-2-line"></i> </a> 
                    <a href="#" data-id="'.$row->id.'" class="delete btn btn-sm btn-danger waves-effect waves-light" > <i class="ri-delete-bin-5-line"></i> </a>
                    
                    ';
            })

            ->rawColumns(['action', 'avatar'])
            ->make(true);
    }

    public function create()
    {
        return view('app.team.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'position'  => 'required',
            'ava'  => 'mimes:jpg,png,jpeg',
        ]);

        $postFileName  = 'ava';
        $destination = 'uploads/team';
        $photo = date('dmYHis') . "-" . $postFileName . "." . $request->file($postFileName)->extension();
        $request->file('ava')->move($destination, $photo);

        $data = array(
            'name' => $request->name,
            'position' => $request->position,
            'ava' => $photo,
        );

        Team::create($data);
        return redirect()->route('team.index')->with('success', ' Created successfully.');
    }


    public function detail(Request $request, $id)
    {
        $data['team'] = Team::where('id', $id)->first();
        return view('app.team.detail', $data);
    }

    public function edit(Request $request, $id)
    {
        $data['team'] = Team::where('id', $id)->first();
        return view('app.team.edit', $data);
    }


    public function update(Request $request, Team $id)
    {
        request()->validate([
            'name'  => 'required',
            'position'  => 'required',
            'ava'  => 'mimes:jpg,png,jpeg'
        ]);

        if ($request->hasFile('ava')) {

            $postFileName  = 'ava';
            $destination = 'uploads/team';
            $photo = date('dmYHis') . "-" . $postFileName . "." . $request->file($postFileName)->extension();
            $request->file('ava')->move($destination, $photo);

            $data = array(
                'name' => $request->name,
                'position' => $request->position,
                'ava' => $photo,
            );
        } else {
            $data = array(
                'name' => $request->name,
                'position' => $request->position,
            );
        }
        Team::where('id', $request->id)->update($data);

        return redirect()->route('team.index')->with('success', 'Updated successfully.');
    }


    public function destroy($id)
    {
        $data = Team::where('id', $id)->delete();
        return response()->json(array('status' => "true", 'action' => 'delete', 'message' => " deleted successfully", $data));
    }
}
