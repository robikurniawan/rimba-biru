@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h2 class="mb-sm-0"><i class="ri-add-fill me-1 align-bottom"></i>  Detail Layanan</h2>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tentang</a></li>
                    <li class="breadcrumb-item">Layanan</li>
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
                <img src="{{ asset('uploads/service/'.$service->icon.'') }}" class="rounded mb-2" width="100px" alt="">
                <h5>{{ $service->name }}</h5>  
                <b>{{ $service->desc }}</b> 
            </div>
        </div>
    </div>
</div>

@endsection