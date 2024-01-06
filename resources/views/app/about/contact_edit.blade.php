@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h2 class="mb-sm-0"><i class="ri-add-fill me-1 align-bottom"></i> Edit Kontak</h2>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">Tentang Kami</li>
                    <li class="breadcrumb-item">Kontak</li>
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
                <form action="{{ route('about.profil_update') }}" method="POST" enctype="multipart/form-data"
                    data-parsley-validate>
                    @csrf
                    <input type="hidden" name="from" value="contact">
                    <input type="hidden" name="direct" value="{{ route('about.contact') }}">
                    <div class="mb-3">
                        <label for="">Alamat</label>
                        <textarea name="address" class="form-control">{{ $get->address }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $get->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="">No Telepon</label>
                        <input type="number" class="form-control" name="phone" value="{{ $get->phone}}">
                    </div>
                    <div class="mb-3">
                        <label for="">No Handphone</label>
                        <input type="number" class="form-control" name="mobile" value="{{ $get->mobile }}">
                    </div>
                    <div class="mb-3">
                        <label for="">Fax</label>
                        <input type="number" class="form-control" name="fax" value="{{ $get->fax }}">
                    </div>
                    <div class="mb-3">
                        <label for="">Facebook</label>
                        <input type="text" class="form-control" name="facebook" value="{{ $get->facebook }}">
                    </div>
                    <div class="mb-3">
                        <label for="">Instagram</label>
                        <input type="text" class="form-control" name="instagram" value="{{ $get->instagram }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="">Youtube</label>
                        <input type="text" class="form-control" name="youtube" value="{{ $get->youtube }}">
                    </div>

                    <div class="mb-3">
                        <label for="">Linkedin</label>
                        <input type="text" class="form-control" name="linkedin" value="{{ $get->linkedin }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="">Twitter</label>
                        <input type="text" class="form-control" name="twitter" value="{{ $get->twitter }}">
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
