@extends('layouts.app')
@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h2 class="mb-sm-0"><i class="ri-add-fill me-1 align-bottom"></i>  Tambah Project</h2>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">Project</li>
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
                <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data"  data-parsley-validate>
                    @csrf

                   
                    <div class="mb-3">
                        <label for="" >Nama Project</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="" >Lokasi</label>
                        <input type="text" name="location" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label for="" >Mulai Tahun</label>
                                <input type="number" name="start_year" class="form-control">
                            </div>
                            <div class="col-6">
                                <label for="" >Mulai Tahun</label>
                                <input type="number" name="end_year" class="form-control">
                            </div>
                        </div>
                    </div>

                     <div class="mb-3">
                        <label for="" >Mitra</label>
                        <select name="partnert_id" class="form-control" id="" required>
                            <option value="">Pilih</option>
                            @foreach ($partnert as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Deskripsi Project</label>
                        <textarea name="desc" class="form-control" id="editor"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Upload Cover (jpg/png)</label>
                        <input type="file" name="cover" class="form-control">
                    </div>

                     <div class="mb-3">
                        <label for="" >Status</label>
                        <select name="status" class="form-control" id="" required>
                            <option value="">Pilih</option>
                            <option value="planning">Planning</option>
                            <option value="onprogress">On Progress</option>
                            <option value="done">Done</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit"> <i class=" ri-save-line"></i> Simpan</button>
                    </div>
                    
                </form>    
            </div>
        </div>
    </div>
</div>

<script>
     ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );

</script>
@endsection