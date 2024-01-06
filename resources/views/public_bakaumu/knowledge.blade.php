@extends('layouts.guest')
@section('content')
<style>
    .card .card-body{
        padding:1.25rem !important;
    }

    p{
        font-size: 18px;
    }
</style>
<section class="page-title-area pos-rel" style="background: linear-gradient( rgb(13 60 0), rgb(13 60 0 / 75%)  ), url({{ asset('uploads/bg/bg-bakaumu.jpeg') }}) no-repeat; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div class="page-title text-center" style="padding-top:250px;">
                    <h2>{{ $category->name }}.</h2>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="pb-95 pt-90">
    <div class="container">
        <div class="row">
            @foreach ($info as $item)
            <div class="col-12 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="pt-1" style="line-height: 1.4;">
                            <a href="#" data-toggle="modal" data-target="#m_{{ $item->id }}">
                            {{ $item->title }}
                            </a>
                        </h4>
                    </div>

                    <div id="m_{{ $item->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                        <div class="modal-dialog modal-lg" style="max-width:1200px !important;" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="border-bottom: 1px solid #e9ecef00;">
                                    <button class="close" style="padding:2rem;" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                            <div class="section-title pl-45 mb-30">
                                                <span class="left-line mb-15 pl-20">{{ $category->name }}. </span>
                                                <h2 class="mb-35" style="font-size: 40px"> {{ $item->title }}</h2>
                                                <p class="mb-30" style="text-align: justify;">
                                                    {!! $item->desc !!}
                                                </p>
                                                <a href="{{ asset('uploads/info/'.$item->attach.'') }}" target="_blank" class="mt-2 btn btn-lg btn-warning"> Download  </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
             @endforeach
        </div>
    </div>
</section>


@endsection
