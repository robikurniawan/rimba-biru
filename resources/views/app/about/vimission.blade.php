@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h2 class="mb-sm-0"> Visi & Misi  </h2>
            <div class="page-title-right">
                 <a href="{{ route('about.vimission_edit') }}" class="btn btn-warning text-dark">Edit Visi Misi </a>
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
                <h4>Visi</h4>
                {!! $get->vission !!}
                <hr>
                <h4>Misi</h4>
                {!! $get->mission !!}
                <hr>

            </div>
        </div>
    </div>
</div>

@endsection