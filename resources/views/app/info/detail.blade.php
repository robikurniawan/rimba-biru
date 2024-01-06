@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h2 class="mb-sm-0"><i class="ri-add-fill me-1 align-bottom"></i>  Detail </h2>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">Informasi</li>
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

                <h5>{{ $info->title }}</h5>  
                <b>{{ tgl_indo($info->created_at) }}</b>
                
                <p>
                    <a href="{{ asset('uploads/info/'.$info->attach.'') }}" target="_blank" class="mt-2 mb-2 btn btn-sm btn-success">Lihat Lampiran</a> 
                    <br>

                    {!! $info->desc !!}</p> 
            </div>
        </div>
    </div>
</div>

@endsection