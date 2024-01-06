@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h2 class="mb-sm-0"> Kontak  </h2>
            <div class="page-title-right">
                 <a href="{{ route('about.contact_edit') }}" class="btn btn-warning text-dark">Edit Kontak </a>
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

                <table class="table table-borderless table-hover">
                    <tr>
                        <th width="20%">Alamat</th>
                        <td>{{ $get->address }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $get->email }}</td>
                    </tr>
                    <tr>
                        <th>Telepon</th>
                        <td>{{ $get->phone }}</td>
                    </tr>
                    <tr>
                        <th>Handphone</th>
                        <td>{{ $get->mobile }}</td>
                    </tr>
                    <tr>
                        <th>Fax</th>
                        <td>{{ $get->fax }}</td>
                    </tr>
                    <tr>
                        <th>Facebook</th>
                        <td>{{ $get->facebook }}</td>
                    </tr>
                    <tr>
                        <th>Instagram</th>
                        <td>{{ $get->instagram }}</td>
                    </tr>
                    
                    <tr>
                        <th>Youtube</th>
                        <td>{{ $get->youtube }}</td>
                    </tr>
                    
                    <tr>
                        <th>Linkedin</th>
                        <td>{{ $get->linkedin }}</td>
                    </tr>
                    <tr>
                        <th>Twitter</th>
                        <td>{{ $get->twitter }}</td>
                    </tr>

                    
                    
                    
                    
                    
                </table>

            </div>
        </div>
    </div>
</div>

@endsection