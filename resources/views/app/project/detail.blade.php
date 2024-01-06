@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h2 class="mb-sm-0"><i class="ri-add-fill me-1 align-bottom"></i>  Detail Project </h2>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">Project</li>
                    <li class="breadcrumb-item active">Detail</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    <strong>Success</strong> , &nbsp {{ $message }}
                </div>
                @endif

                <div class="row">
                    <div class="col-md-5">
                        <img src="{{ asset('uploads/project/'.$project->cover.'') }}" class="rounded" width="100%"  alt="">
                    </div>
                    <div class="col-md-7">
                        <table class="table">
                            <tr>
                                <th width="30%">Nama Project</th>
                                <td>{{ $project->title }}</td>
                            </tr>
                            <tr>
                                <th>Lokasi</th>
                                <td>{{ $project->location }}</td>
                            </tr>
                            <tr>
                                <th>Mitra</th>
                                <td>{{ $project->name }}</td>
                            </tr>
                            <tr>
                                <th>Kerja Sama</th>
                                <td>{{ $project->start_year }} - {{ $project->end_year }}</td>
                            </tr>
                            <tr>
                                <th>Deskripsi</th>
                                <td>{!! $project->desc !!}</td>
                            </tr>

                            <tr>
                                <th>Status</th>
                                <td> <span class="badge bg-success">{{ $project->status }}</span> </td>
                            </tr>
                            
                        </table>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</div>

@endsection