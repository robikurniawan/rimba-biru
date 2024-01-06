@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h2 class="mb-sm-0"><i class="ri-add-fill me-1 align-bottom"></i> Detail </h2>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">Berita</li>
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

                <div class="row mt-3">
                    <div class="col-md-5">
                        <img src="{{ asset('uploads/news/'.$news->image.'') }}" width="100%" class="rounded mb-4" alt="">
                    </div>
                    <div class="col-md-6">
                        <h4>{{ $news->title }}</h4>
                        <b>{{ tgl_indo($news->created_at) }}</b> <b><span class="badge bg-primary">{{ $news->name }}</span></b>


                        <p> {!! $news->desc !!}</p>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

@endsection
