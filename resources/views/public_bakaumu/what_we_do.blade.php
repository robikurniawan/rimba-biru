@extends('layouts.guest')
@section('content')

<section class="page-title-area pos-rel" style="background: linear-gradient( rgb(13 60 0), rgb(13 60 0 / 75%)  ), url({{ asset('uploads/bg/bg-bakaumu.jpeg') }}) no-repeat; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div class="page-title text-center" style="padding-top:250px;">
                    <h2>What We Do</h2>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="landco-future pb-95 pt-90">
    <div class="container">
        @foreach ($services as $item)
        <div class="card mb-10">
            <div class="card-body">
                <div class="about__img__box pos-rel mb-30 mt-5 pl-40">
                    <img class="img-fluid landco-img" src="{{  asset('uploads/service/'.$item->icon.' ') }}" width="15%"
                        alt="">
                </div>
                <div class="section-title mt-3 pl-45 mb-30">
                    <h2 class="">{{ $item->name }}</h2>
                    {!! $item->desc !!}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>


@endsection
