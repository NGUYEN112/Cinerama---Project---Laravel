@extends('layouts.client-layout')

@section('content')
<!-- List Film Content Start -->
<div class="head__height">
</div>
<div class="list-film">
    <header class="text-center head__top">
        <h2 class="tittle__font">DANH SÁCH PHIM</h2>
    </header>

    <!-- List Film Content End -->

    <!-- Article Details Start -->
    <div class="article container article__height article__padding" *ngFor="let film of films">
        <div class="row article__full article__margin">
            <div class="col-md-3 article__col-height article__padding ">
                <img class="article__full article__filter" src="" alt="">
            </div>
            <div class="col-md-9 article__col-height article__padding position-relative article__display">
                <img class="article__full article__filter-content" src="" alt="">
                <div class="content article__center article__content-size article__index position-absolute article__auto">
                    <h2 class="article__font"></h2>
                    <h4 class="article__font-category article__space"></h4>
                    <p class="article__font-content article__space"></p>
                    <button type="button" class="btn btn-outline-warning btn-rounded article__space" [routerLink]="['/details-film', film.id]" routerLinkActive="router-link-active" data-mdb-ripple-color="dark">
                        CHI TIẾT PHIM
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Article Details End -->
    <!-- Footer Start -->
    @endsection