@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h2 class="mb-sm-0"> Profil </h2>
            <div class="page-title-right">
                 <a href="{{ route('about.profil_edit') }}" class="btn btn-warning text-dark">Edit {{ $page }} </a>
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
                
                {!! $get->profile !!}
            </div>
        </div>
    </div>
</div>

@endsection