@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h2 class="mb-sm-0"><i class="ri-add-fill me-1 align-bottom"></i>  Edit Mitra</h2>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">Mitra</li>
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
                <form action="{{ route('partnert.update') }}" method="POST" enctype="multipart/form-data"  data-parsley-validate>
                    @csrf
                    <input type="hidden" name="id" value="{{ $partnert->id }}">
                    <div class="mb-3">
                        <label for="" >Nama</label>
                        <input type="text" name="name" class="form-control" value="{{ $partnert->name }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Logo</label>
                        <input type="file" name="ava" class="form-control">
                        <img src="{{ asset('uploads/partnert/'.$partnert->logo.'') }}" class="rounded mt-1" width="80px" alt="">
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