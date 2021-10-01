@extends('layouts.client-layout')

@section('content')
<ng-container *ngFor="let remarkable of remarkables">
    <div class="slides-container-fluid slide__height text-center position-relative">
        <img class="slide__img head__full" src="" alt="">
    </div>
    <!-- Slides End -->

    <!-- Animation Start -->
    <div class="animate-container position-absolute animation__center text-center ">
        <!-- <h4 class="animation__font-tittle animate__animated animate__zoomIn animate__slower	3s animate__infinite "></h4> -->
        <h6 class="animation__font-under animate__animated animate__zoomIn animate__slower	3s animate__infinite "></h6>
        <button [routerLink]="['/details-film', remarkable.film_id]" class="button animation__height animate__animated animate__zoomIn animate__slower3s">
        Chi tiết Phim
        <div class="button__horizontal"></div>
        <div class="button__vertical"></div>
    </button>
        <!-- Animation End -->
    </div>
</ng-container>

<!-- Tittle Now Playing Start-->
<div class="content-now-playing container text-center content-play__bottom">
    <h2 class="content-play__font content-play" :after>PHIM ĐANG CHIẾU</h2>
</div>
<!-- Tittle Now Playing End-->

<!-- Image Now Playing Start -->

<div class="container content-play__bottom text-center img__height head__border text-center">
    <section id="timeline" class="head_full">
        @foreach ($publisheds as $published)
        <div class="tl-item" >
            <div class="tl-bg carousel-item active" style="background-image: url({{$published->poster}})"></div>
            <!-- <div class="tl-year">
                    <p class="f2 heading--sanSerif"></p>
                </div> -->
            <div class="tl-content">
                <h1>{{$published->global_name}}</h1>
                <div class="col-8 offset-2"> <a  class="btn btn-sm animated-button sandy-three">Chi tiết</a></div>
            </div>
        </div>
        @endforeach
    </section>
</div>
<!-- Image Now Playing End -->

<!-- Tittle Coming Soon Start -->
<div class="content-now-playing container text-center content-play__bottom">
    <h2 class="content-play__font content-play" :after>PHIM SẮP CHIẾU</h2>
</div>
<!-- Tittle Coming Soon End -->

<!-- Image Coming Soon Start -->

<div class="content-play__bottom text-center img__height head__border text-center">
    <section id="timeline" class="head_full">
        @foreach ($unpublisheds as $unpublished)
        <div class="tl-item">
            <div class="tl-bg carousel-item active" style="background-image: url()"></div>
            <div class="tl-year">
                <p class="f2 heading--sanSerif"></p>
            </div>
            <div class="tl-content">
                <h1>{{$unpublished->global_name}}</h1>
                <p></p>
            </div>
        </div>
        @endforeach
    </section>
</div>
<!-- Image Coming Soon End -->
@endsection