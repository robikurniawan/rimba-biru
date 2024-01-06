<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Partnert;
use Illuminate\Http\Request;
use DataTables;

class ProjectController extends Controller
{

    public function index()
    {
        return view('app.project.index');
    }

    public function json()
    {
        $data = Project::join('partnerts', 'projects.partnert_id', '=', 'partnerts.id')
            ->select('projects.*', 'partnerts.name')
            ->orderBy('projects.id', 'DESC')
            ->get();

        return Datatables::of($data)
            ->addIndexColumn()

            ->addColumn('status_badge', function ($row) {

                if ($row->status == "done") {
                    $title = 'Selesai';
                    $color = 'success';
                } elseif($row->status == "onprogress") {
                    $title = 'On Progress';
                    $color = 'warning';
                } else {
                    $title = 'Planning';
                    $color = 'primary';
                }

                return '<span class="badge rounded-pill bg-'.$color.'">'.$title.'</span>';
            })

            ->addColumn('year', function ($row) {
                return $row->start_year."-".$row->end_year;
            })


            ->addColumn('action', function ($row) {
                $editUrl = route('project.edit', $row->id);
                $detail = route('project.detail', $row->id);
                return '
                    <a href="' . $detail . '" class="btn btn-sm btn-success waves-effect waves-light"> <i class="ri-search-line"></i> </a> 
                    <a href="' . $editUrl . '" class="btn btn-sm btn-warning waves-effect waves-light"> <i class="ri-edit-2-line"></i> </a> 
                    <a href="#" data-id="' . $row->id . '" class="delete btn btn-sm btn-danger waves-effect waves-light" > <i class="ri-delete-bin-5-line"></i> </a>
                    
                    ';
            })

            ->rawColumns(['action', 'status_badge','year'])
            ->make(true);
    }

    public function create()
    {
        $data['partnert'] = Partnert::all();
        return view('app.project.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'partnert_id'  => 'required',
            'title'  => 'required',
            'cover'  => 'mimes:jpg,png,jpeg,pdf',
        ]);

        $postFileName  = 'cover';
        $destination = 'uploads/project';

        if ($request->hasFile('cover')) {
            $photo = date('dmYHis') . "-" . $postFileName . "." . $request->file($postFileName)->extension();
            $request->file('cover')->move($destination, $photo);
        } else {
            $photo = "";
        }


        $data = [
            'partnert_id' => $request->partnert_id,
            'title' => $request->title,
            'start_year' => $request->start_year,
            'end_year' => $request->end_year,
            'desc' => $request->desc,
            'location' => $request->location,
            'cover' => $photo,
            'status' => $request->status,
            'user_id' => auth()->user()->id
        ];

        $save = Project::create($data)->id;
        return redirect()->route('project.detail', $save)->with('success', ' Created successfully.');
    }


    public function detail(Request $request, $id)
    {
        $data['project'] = Project::join('partnerts', 'projects.partnert_id', '=', 'partnerts.id')
            ->where('projects.id', $id)
            ->select('projects.*', 'partnerts.name')
            ->first();

        return view('app.project.detail', $data);
    }

    public function edit(Request $request, $id)
    {
        $data['partnert'] = Partnert::all();
        $data['project'] = Project::join('partnerts', 'projects.partnert_id', '=', 'partnerts.id')
            ->where('projects.id', $id)
            ->select('projects.*', 'partnerts.name')
            ->first();
        return view('app.project.edit', $data);
    }


    public function update(Request $request, Project $id)
    {

        $request->validate([
            'partnert_id'  => 'required',
            'title'  => 'required',
            'cover'  => 'mimes:jpg,png,jpeg,pdf',
        ]);

        if ($request->hasFile('cover')) {
            $postFileName  = 'cover';
            $destination = 'uploads/project';
            $photo = date('dmYHis') . "-" . $postFileName . "." . $request->file($postFileName)->extension();
            $request->file('cover')->move($destination, $photo);

            $data = [
                'partnert_id' => $request->partnert_id,
                'title' => $request->title,
                'start_year' => $request->start_year,
                'end_year' => $request->end_year,
                'desc' => $request->desc,
                'location' => $request->location,
                'cover' => $photo,
                'status' => $request->status,
                'user_id' => auth()->user()->id
            ];

        } else {

            $data = [
                'partnert_id' => $request->partnert_id,
                'title' => $request->title,
                'start_year' => $request->start_year,
                'end_year' => $request->end_year,
                'desc' => $request->desc,
                'location' => $request->location,
                'status' => $request->status,
                'user_id' => auth()->user()->id
            ];
        }

        Project::where('id', $request->id)->update($data);
        return redirect()->route('project.detail', $request->id)->with('success', 'Updated successfully.');
    }


    public function destroy($id)
    {
        $data = Project::where('id', $id)->delete();
        return response()->json(array('status' => "true", 'action' => 'delete', 'message' => " deleted successfully", $data));
    }
}
