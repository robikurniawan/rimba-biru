@extends('layouts.guest')
@section('content')

<section class="page-title-area pos-rel" style="background: linear-gradient( rgb(13 60 0), rgb(13 60 0 / 75%)  ), url({{ asset('uploads/bg/bg-bakaumu.jpeg') }}) no-repeat; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div class="page-title text-center" style="padding-top:250px;">
                    <h2>{{ $category->name }}</h2>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="landco-future pb-95 pt-90">
    <div class="container">
        <div class="row">
         @foreach ($news as $item)
            <div class="col-md-4 col-12">
                <div class="teams text-center pos-rel mb-30" style="border-radius:30px; z-index:10;">
                    <a href="{{ route('public.newsDetail',[enc($item->id),Str::slug($item->title)] ) }}">
                        <div class="teams__imgs pos-rel mb-30">
                            <img src="{{ asset('uploads/news/'.$item->image.'') }}" style="height:500px; object-fit:cover;" class=" img-fluid" alt="">
                        </div>
                    </a>
                    <div class="teams__contents pos-abl" style="bottom:5px;">
                        <div class="team__name teams__names text-left" style="padding:5px;">
                            <h4 style="color:#fff; line-height: 1.5; ">
                                <a href="{{ route('public.newsDetail',[enc($item->id),Str::slug($item->title)] ) }}">
                                    {{ Str::ucfirst(Str::lower($item->title)) }}
                                </a>
                            </h4>
                            <div class="blog__content--meta mb-10 text-white">
                               <i class="far fa-calendar-alt"></i> {{ tgl_indo($item->created_at) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        {{ $news->links() }}
    </div>
</section>


@endsection
