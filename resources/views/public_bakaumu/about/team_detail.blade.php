@extends('layouts.guest')
@section('content')

<section class="page-title-area pos-rel" style="background: linear-gradient( rgb(13 60 0), rgb(13 60 0 / 75%)  ), url({{ asset('uploads/bg/bg-bakaumu.jpeg') }}) no-repeat;
    background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3">
                <div class="page-title text-center" style="padding-top:250px;">
                    <h2>Our Team</h2>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="landco-future pb-95 pt-90">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="about__img__box pos-rel mb-30 pl-40">
                    <img class="img-fluid landco-img" src="{{  asset('uploads/team/'.$team->ava.' ') }}" width="100%" style="border-radius: 30px;" alt="">
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-12">
                <div class="section-title pl-45 mb-30">
                    <h2 class="">{{ $team->name }}</h2>
                    <span class="left-line mb-15 pl-20">{{ $team->position }} </span>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem ex, suscipit vel consequatur tempore, praesentium necessitatibus officiis minus voluptas ea commodi tenetur? Repellat autem perferendis numquam. Quaerat assumenda fuga doloribus?
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>


@endsection
