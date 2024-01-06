@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h2 class="mb-sm-0">Kategori Berita</h2>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                    <li class="breadcrumb-item active">Kategori Berita</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="card">


            <div class="card-body">

                <div class=" align-items-center ">
                    <div class="row">
                        <div class="col-md-4">
                            <form class="navbar-search form-inline mb-3" id="navbar-search-main">
                                <div class="search-box">
                                    <input type="text" class="form-control" id="mySearchText"
                                        placeholder="Searching.." autocomplete="off">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-5">

                        </div>
                        <div class="col-md-3">
                            <div class="flex-shrink-0">
                                <a href="{{ route('category_news.create') }}" class="btn btn-primary w-100"> <i class="ri-add-fill me-1 align-bottom"></i> Tambah
                                    Kategori
                                </a>
                            </div>
                        </div>
                    </div>
                </div>



                @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    <strong>Success</strong> , &nbsp {{ $message }}
                </div>
                @endif
                <div id="flash-message" class="m-3" style="display: none;"></div>

                <div class="table-responsive">
                    <table class="table table-hover table-nowrap" id="category_news" width="100%">
                        <thead class="table-light">
                            <tr>
                                <th scope="col" width="2%">No.</th>
                                <th scope="col" class="text-center">Name</th>
                                <th scope="col" width="10%">#</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    let table;
    $('.load_page').hide();

    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.fn.dataTable.ext.errMode = () => swal('Oops !!',
            'Maaf, Terjadi kesalahan dalam proses memuat data, Pastikan jaringan Anda stabil.  ', 'warning');

        table = $('#category_news').DataTable({
            sDom: 'Rfrtlip',
            aaSorting: [],
            ordering: false,
            responsive: true,
            news:false,
            language: {
                "emptyTable":     "Belum Ada Data !",
                "lengthMenu":     "Menampilkan _MENU_ Baris Data",
                "loadingRecords": "Memuat Data...",
                "processing":     "Memuat Data...",
                "zeroRecords":    "Data Tidak Ditemukan !!",
               },

    
            initComplete: function () {
                $("#category_news_filter").hide();
            },

            processing: true,
            serverSide: true,
            ajax: "{{ route('category_news.json') }}",
            columns: [{
                    data: 'DT_RowIndex'
                },
                {
                    data: 'name'
                },
                {
                    data: 'action',
                },
            ]
        });

        $('#mySearchText').on('keyup ', function () {
            table.search($('#mySearchText').val()).draw();
        });
    });

    $('body').on('click', '.delete', function () {

        const id = $(this).data("id");

        swal({
            title: "Perhatian !",
            text: "Anda yakin ingin menghapus data ? ",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, Hapus Sekarang !',
            closeOnConfirm: false,
            closeOnCancel: true,
            showLoaderOnConfirm: true,

        }, function (isConfirm) {
            if (!isConfirm) return;

            $.ajax({
                type: "GET",
                url: "{{ url('category_news/delete') }}" + '/' + id,
                success: function (data) {
                    table.draw();
                    swal(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    );
                },
                error: function (data) {
                    console.log('Error:', data);
                },
            });
        });
    });

</script>

</script>
@endsection
