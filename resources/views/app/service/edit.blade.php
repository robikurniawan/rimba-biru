@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h2 class="mb-sm-0"><i class="ri-add-fill me-1 align-bottom"></i>  Edit Layanan</h2>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">Layanan</li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('service.update') }}" method="POST" enctype="multipart/form-data"  data-parsley-validate>
                    @csrf
                    <input type="hidden" name="id" value="{{ $service->id }}">
                    <div class="mb-3">
                        <label for="" >Nama</label>
                        <input type="text" name="name" class="form-control" value="{{ $service->name }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="desc" class="form-control">{{ $service->desc }} </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Icon</label>
                        <input type="file" name="icon" class="form-control">
                        <img src="{{ asset('uploads/service/'.$service->icon.'') }}" class="rounded mt-1" width="80px" alt="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Background</label>
                        <input type="file" name="bg" class="form-control">
                        <img src="{{ asset('uploads/service/'.$service->bg.'') }}" class="rounded mt-1" width="80px" alt="">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-warning" type="submit"> <i class=" ri-save-line"></i> Update</button>
                    </div>
                    
                </form>    
            </div>
        </div>
    </div>
</div>

@endsection