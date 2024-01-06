@extends('layouts.guest')
@section('content')
<style>
    p{
        font-size: 19px !important;
    }
</style>
<section class="page-title-area pos-rel"
    style="background: linear-gradient( rgb(13 60 0), rgb(13 60 0 / 75%)  ), url({{ asset('uploads/news/'.$news->image.'') }} ) no-repeat; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-title text-center" style="padding-top:250px;">
                    <h2 style="font-size: 70px;">{{ $news->title }}</h2>
                    <p class="text-white"> <i class="far fa-calendar-alt"></i> {{ tgl_indo($news->created_at) }} </p>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="pb-95 pt-90">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <center>
                    <img src="{{ asset('uploads/news/'.$news->image.'') }}" style="border-radius: 15px; width:100%;" alt="">
                </center>
                <div class="mt-5" style="text-align: justify;">
                {!! $news->desc !!}
                </div>
            </div>

        </div>
    </div>
</section>


@endsection
