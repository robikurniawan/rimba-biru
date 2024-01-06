@extends('layouts.app')
@section('content')
    <script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h2 class="mb-sm-0"><i class="ri-add-fill me-1 align-bottom"></i>  Tambah Berita</h2>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">Berita</li>
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
                <form action="{{ route('news.update') }}" method="POST" enctype="multipart/form-data"  data-parsley-validate>
                    @csrf   
                    <input type="hidden" name="id" value="{{ $news->id }}">
                    <div class="mb-3">
                        <label for="" >Kategori</label>
                        <select name="category_news_id" class="form-control" id="" required>
                            <option value="">Pilih</option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}" {{ ($item->id == $news->category_news_id) ? "selected":"" }} >{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" >Judul Berita</label>
                        <input type="text" name="title" class="form-control" value="{{ $news->title }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="desc" class="form-control" id="editor">{{ $news->desc }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Gambar</label>
                        <input type="file" name="image" class="form-control" >
                        <a href="{{ asset('uploads/news/'.$news->image.'') }}" target="_blank" class="mt-2 mb-2 btn btn-sm btn-success">Lihat Gambar</a>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit"> <i class=" ri-save-line"></i> Update</button>
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