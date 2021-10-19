@extends('layouts.client-layout')
@section('title')
Cinerama - Trang chủ
@endsection
@section('content')


@if(count($remarkables) !=0 )

<section id="exampleSlider-remark">
    <div class="MS-content-remark">
        @foreach($remarkables as $remarkable)
        <div class="item-remark">

            <div class="slides-container-fluid slide__height text-center position-relative">
                <img class="slide__img head__full" src="{{$remarkable->banner}}" alt="">
            </div>
            <!-- Slides End -->

            <!-- Animation Start -->
            <div class="animate-container position-absolute animation__center text-center ">
                @if($remarkable->film_id != null)
                <?php
                $splitPos = strPos($remarkable->film->global_name, ":");
                if (is_numeric($splitPos)) {
                    $content = substr($remarkable->film->global_name, 0, ($splitPos));
                    $subcontent = substr($remarkable->film->global_name, ($splitPos + 1));
                } else
                    $content = $remarkable->film->global_name;
                // $subcontent = "";
                ?>
                <h4 class="animation__font-tittle animate__animated animate__zoomIn animate__slower	3s animate__infinite ">{{$content}}</h4>
                <h6 class="animation__font-under animate__animated animate__zoomIn animate__slower	3s animate__infinite ">{{$subcontent}}</h6>
                @endif
                <a href="{{$remarkable->categories}}/detail/{{$remarkable->film_id != null ? $remarkable->film_id : ($remarkable->combo_id != null ? $remarkable->combo_id : $remarkable->discount_id )}}" class="button animation__height animate__animated animate__zoomIn animate__slower3s">
                    Chi tiết

                    <div class="button__horizontal"></div>
                    <!-- <div class="button__vertical"></div> -->
                </a>

                <!-- Animation End -->
            </div>

        </div>
        @endforeach
    </div>
    <div class="MS-controls-remark">
        <button class="MS-left-remark"><i class="fal fa-chevron-left fa-5x" aria-hidden="true"></i></button>
        <button class="MS-right-remark"><i class="fal fa-chevron-right fa-5x" aria-hidden="true"></i></button>
    </div>
</section>

<section class="public-film">
    @else
    <section class="public-film" style="padding-top: 100px;">
        @endif


        <!-- Tittle Now Playing Start-->
        <div class="content-now-playing container text-center content-play__bottom">
            <h2 class="content-play__font content-play" :after>PHIM ĐANG CHIẾU</h2>
        </div>
        <!-- Tittle Now Playing End-->

        <!-- Image Now Playing Start -->


        <div class="container content-play__bottom text-center img__height head__border text-center">
            @if(count($publisheds) != 0)
            <!-- <div> -->
            <section id="exampleSlider" class="head_full timeline ">
                <div class="MS-content">
                    @foreach ($publisheds as $published)
                    <div class="tl-item item">
                        <div class="tl-bg carousel-item active" style="background-image: url({{$published->poster}})"></div>
                        <!-- <div class="tl-year">
                    <p class="f2 heading--sanSerif"></p>
                </div> -->
                        <div class="tl-content">
                            <h1>{{$published->global_name}}</h1>
                            <div class="col-8 offset-2"> <a href="film/detail/{{$published->id}}" class="btn btn-outline btn-sm animated-button sandy-three detail-button">Chi tiết</a></div>
                        </div>
                    </div>

                    @endforeach
                </div>
                <div class="MS-controls">
                    <button class="MS-left"><i class="fa fa-chevron-left fa-3x" aria-hidden="true"></i></button>
                    <button class="MS-right"><i class="fa fa-chevron-right fa-3x" aria-hidden="true"></i></button>
                </div>
            </section>
            <!-- </div> -->
            @endif
        </div>
    </section>
    <!-- Image Now Playing End -->

    <!-- Tittle Coming Soon Start -->
    <div class="content-now-playing container text-center content-play__bottom">
        <h2 class="content-play__font content-play" :after>PHIM SẮP CHIẾU</h2>
    </div>
    <!-- Tittle Coming Soon End -->

    <!-- Image Coming Soon Start -->

    <div class="content-play__bottom text-center img__height head__border text-center">
        @if(count($unpublisheds) != 0)
        <section id="exampleSlider2" class="head_full timeline" style="height: 100%;">
            <div class="MS-content2">
                @foreach ($unpublisheds as $unpublished)
                <div class="tl-item item2">
                    <div class="tl-bg carousel-item active" style="background-image: url({{$unpublished->poster}})"></div>
                    <div class="tl-year">
                        <p class="f2 heading--sanSerif"></p>
                    </div>
                    <div class="tl-content">
                        <h1>{{$unpublished->global_name}}</h1>
                        <p></p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="MS-controls2">
                <button class="MS-left2 unpub"><i class="fa fa-chevron-left fa-3x" aria-hidden="true"></i></button>
                <button class="MS-right2 unpub"><i class="fa fa-chevron-right fa-3x" aria-hidden="true"></i></button>
            </div>
        </section>
        @endif
    </div>
    @section('client-script')
    <script src="{{asset('/storage/js/jquery.min.js')}}"></script>
    <script src="{{asset('/storage/js/multislider.min.js')}}"></script>
    <script>
        $(window).ready(function() {
            $.ajax({
                url: '/get-remark',
                type: 'get',
                dataType: 'json',
                success: function(remarkData) {
                    remarks = remarkData['data']
                    if (remarks.length == 1) {
                        $('#exampleSlider-remark').multislider_remark({
                            interval: false,
                            duration: 2000,
                        })
                        $('.MS-controls-remark').attr("hidden", true);
                    } else {
                        $('#exampleSlider-remark').multislider_remark({
                            interval: 3500,
                            duration: 2000,
                        })
                    }
                }
            })
        })



        $('#exampleSlider').multislider({
            interval: false,
            // slideAll:true
        })
        $('#exampleSlider2').multislider2({
            interval: false,
            // slideAll:true
        })
    </script>
    @endsection
    <!-- Image Coming Soon End -->
    @endsection