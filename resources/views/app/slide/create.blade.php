@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h2 class="mb-sm-0"><i class="ri-add-fill me-1 align-bottom"></i>  Tambah Slide</h2>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">Slide</li>
                    <li class="breadcrumb-item active">Tambah</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('slide.store') }}" method="POST" enctype="multipart/form-data"  data-parsley-validate>
                    @csrf
                    <div class="mb-3">
                        <label for="" >Nama</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Slide</label>
                        <input type="file" name="images" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit"> <i class=" ri-save-line"></i> Simpan</button>
                    </div>
                    
                </form>    
            </div>
        </div>
    </div>
</div>

@endsection