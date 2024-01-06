@extends('layouts.app')
@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h2 class="mb-sm-0"><i class="ri-add-fill me-1 align-bottom"></i> Edit Visi Misi</h2>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">Tentang Kami</li>
                    <li class="breadcrumb-item">Visi Misi </li>
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
                    <input type="hidden" name="from" value="vimission">
                    <input type="hidden" name="direct" value="{{ route('about.vimission') }}">
                    <div class="mb-3">
                        <label for="">Visi</label>
                        <textarea name="vission" class="form-control" id="editor" id="" cols="30" rows="10">{{ $get->vission }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Misi</label>
                        <textarea name="mission" class="form-control" id="editor2" id="" cols="30" rows="10">{{ $get->mission }}</textarea>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-warning" type="submit"> <i class=" ri-save-line"></i> Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });


    ClassicEditor
        .create(document.querySelector('#editor2'))
        .catch(error => {
            console.error(error);
        });

</script>

@endsection
