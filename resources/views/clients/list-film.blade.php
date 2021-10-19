@extends('layouts.client-layout')
@section('title')
Cinerama - Phim
@endsection
@section('client-style')
<link rel="stylesheet" href="{{asset('/storage/styles/client-film.css')}}">
@endsection
@section('content')
<!-- List Film Content Start -->
<!-- <div class="head__height">
</div> -->
<!-- <div class="list-film"> -->
    <header class="text-center head__top">
        <h2 class="tittle__font">DANH SÁCH PHIM</h2>
    </header>

    <!-- List Film Content End -->

    <!-- Article Details Start -->
   
    

    <section class="film">
        @foreach($publisheds as $published)

        <!-- <div class="article container article__height article__padding">
        <div class="row article__full article__margin">
            <div class="col-md-3 article__col-height article__padding ">
                <img class="article__full article__filter" src="{{$published->poster}}" alt="">
            </div>
            <div class="col-md-9 article__col-height article__padding position-relative article__display">
                <img class="article__full article__filter-content" src="{{$published->banner}}" alt="">
                <div class="content article__center article__content-size article__index position-absolute article__auto">
                    <h2 class="article__font">{{$published->global_name}}</h2>
                    <h4 class="article__font-category article__space">{{$published->release_date}}</h4>
                    <p class="article__font-content article__space"></p>
                    <button type="button" class="btn btn-outline-warning btn-rounded article__space" href="film/detail/{{$published->film_id}}" routerLinkActive="router-link-active" data-mdb-ripple-color="dark">
                        CHI TIẾT PHIM
                    </button>
                </div>
            </div>
        </div>
    </div> -->


        <div class="film__inner">
            <div class="film__poster">
                <img class="article__filter" src="{{$published->poster}}" alt="">
            </div>
            <div class="film__information">
                <img class="article__filter-content" src="{{$published->banner}}" alt="">
                <div class="film__information-content">
                    <h2 class="film__information-title article__font">{{$published->global_name}}</h2>
                    <h4 class="film__information-subtitle article__font-category">Thể loại: {{$published->categories}}</h4>
                    <h4 class="film__information-subtitle article__font-category">Sản xuất: {{$published->producer}}</h4>
                    <h4 class="film__information-subtitle article__font-category">Thời lượng: {{$published->duration}} phút</h4>
                    <h4 class="film__information-subtitle article__font-category">Ngày phát hành: {{date('d/m/Y', strtotime($published->release_date))}}</h4>
                    <a class="btn btn-outline-warning btn-rounded article__space" href="film/detail/{{$published->id}}">Chi tiết phim</a>
                </div>
            </div>
        </div>
        <div class="line-break">

        </div>
        @endforeach
    </section>
    

    <!-- Article Details End -->
    <!-- Footer Start -->
    @endsection