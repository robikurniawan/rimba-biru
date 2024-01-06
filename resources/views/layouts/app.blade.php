<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-topbar="light"
    data-sidebar="dark" data-sidebar-size="lg">

<head>
    <meta charset="utf-8" />
    <title>Rimba Biru | Administrator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Panel Administrator" name="description" />
    <meta content="Rimba Biru" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-v.png') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('back/assets/js/layout.js') }}"></script>
    <link href="{{ asset('back/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('back/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('back/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('back/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/css/parsley.css') }}">
    <script src="{{ asset('/js/jquery.min.js') }}"></script>

    <script src="{{ asset('back/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <style>
        .dataTables_length {
            width: 50%;
            float: left;
            margin-top: 20px;
            margin-left: 20px;
        }

        .dataTables_paginate .paging_simple_numbers {
            margin-top: 20px;
            margin-right: 20px;
        }

        .page-title-box{
            padding:25px 1.5rem !important;
        }

    </style>

</head>

<body>

    <div id="layout-wrapper">
        @include('app.partials.header')

        @include('app.partials.navbar')


        <div class="vertical-overlay"></div>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start content -->
                    @yield('content')
                    <!-- end content -->
                </div>
            </div>
        </div>

    </div>



    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>


    {{-- @include('app.partials.customizer') --}}

    <!-- JAVASCRIPT -->
    <script src="{{ asset('back/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('back/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('back/assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('back/assets/js/plugins.js') }}"></script>
    <script src="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js"></script>

    <script src="{{ asset('/js/parsley.js') }}"></script>
    <script src="{{ asset('/js/select2.min.js') }}"></script>





    <!-- App js -->
    <script src="{{ asset('back/assets/js/app.js') }}"></script>
</body>


</html>
