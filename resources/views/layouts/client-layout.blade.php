<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<link rel="stylesheet" href="{{asset('/storage/styles/client-layout.css')}}">

@yield('client-style')
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.js"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.css">
<link rel="stylesheet" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;400;700&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Open+Sans&display=swap">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<body>
    <div class="body__bg">
        <!-- Header Navbar Start -->
        <div class="header container-fluid text-center slide__index head__border position-absolute">
            <div class="row">
                <div class="col-md-2 head__display">
                    <img class="head__logo head__margin" src="{{asset('/storage/images/Logo-light.png')}}" alt="logo">
                </div>
                <div class="col-md-8 head__display">
                    <nav class="navbar navbar-expand-lg head__margin">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <a href="/" class="nav-link active head__space head__font" aria-current="page">TRANG CH???</a>
                                    <a href="{{route('client.films')}}" class="nav-link head__space head__font ">DANH S??CH PHIM</a>
                                    <a class="order-ticket nav-link head__space head__font" data-mdb-toggle="modal" data-mdb-target="#orderModal">?????T V??</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-md-2 head__display">
                    @if (auth()->user() != null)
                    @if(auth()->user()->role_id == null)
                    <div class="dropdown nav-link head__font  head__margin">
                        <a class="btn  login-button dropdown-toggle" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
                            Nguy??n
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="auth/logout">????ng xu???t</a></li>
                        </ul>
                    </div>
                    @else
                    <!-- <a class="dropdown-item" href=""> ????ng xu????t</a> -->
                    <a href="auth/logout" class="btn nav-link head__font  head__margin login-button">????NG XU???T</a>

                    @endif
                    @else
                    <a href="/auth/login" class="btn nav-link head__font  head__margin login-button">????NG NH???P</a>
                    @endif

                    <!-- <ng-container *ngIf="check_auth == true; else existUser">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">

                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item">Profile</a></li>
                                <li><a class="dropdown-item" href="">????NG SU???T</a></li>
                            </ul>
                        </div>
                    </ng-container>
                    <ng-template #existUser>
                        
                    </ng-template> -->
                </div>
            </div>
        </div>
        <!-- Header Navbar End -->
        @yield('content')
        <!--===================== Modal Order Ticket Start================================= -->
        <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModal" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="container ticket-order__width">
                        <div class="row">
                            <div class="col-md-8">
                                <div id="carouselExampleControlsOrder" class="carousel slide" data-mdb-interval="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <h5 class="modal-title ticket-order__font">?????T V??</h5>

                                            <div class="order-ticket">
                                                <h3 class="ticket-order__font-nav">R???p phim</h3>
                                                <select class="ticket-order__border cinema-select">
                                                </select>
                                            </div>

                                            <div class="order-ticket">
                                                <h3 class="ticket-order__font-nav">PHIM</h3>
                                                <select class="ticket-order__border film-select">
                                                    <option>Vui l??ng ch???n phim</option>
                                                </select>
                                            </div>



                                            <div class="order-ticket">
                                                <h3 class="ticket-order__font-nav">B???P N?????C</h3>
                                                <select class="ticket-order__border combo-select">

                                                </select>
                                            </div>
                                            <!-- <div class="date">
                                                <h3 class="ticket-order__font-nav">NG??Y</h3>
                                                <input type="date" class="ticket-order__border" >
                                            </div> -->

                                            <h3 class="ticket-order__font-nav">NG??Y</h3>
                                            <select class="ticket-order__border date-select">
                                                <option>Vui l??ng ch???n ng??y</option>

                                            </select>

                                            <h3 class="ticket-order__font-nav">GI??? CHI???U</h3>
                                            <div class="time time-choose">
                                                <!-- <button  class="btn btn-outline-dark btn-rounded  btn-sm ticket-order__space ticket-order__screen-bottom" data-mdb-ripple-color="dark"></button> -->
                                            </div>

                                            <h3 class="ticket-order__font-nav">PH??NG CHI???U</h3>
                                            <div class="time room-choose">
                                                <!-- <button *ngFor="let room of rooms" (click)="loadScreeningId(room.room_id)" class="btn btn-outline btn-rounded btn-sm ticket-order__space" data-mdb-ripple-color="dark" data-mdb-slide="next" data-mdb-target="#carouselExampleControlsOrder"></button> -->
                                            </div>

                                            <button type="button" class="btn btn-outline-warning btn-rounded btn-sm ticket-order__space-top " data-mdb-slide="next" data-mdb-target="#carouselExampleControlsOrder" data-mdb-ripple-color="dark">NEXT</button>

                                        </div>
                                        <!-- Modal Seat Start -->
                                        <div class="carousel-item container">
                                            <div class="row">
                                                <h5 class="modal-title ticket-order__font">GH??? NG???I</h5>
                                                <img src="{{asset('/storage/images/ScreenForSeating_450.png')}}" alt="">
                                                <div *ngFor="let seat of seats">
                                                    <div class="col-md-1 ticket-order__seat-top ticket-order__font-row">

                                                    </div>
                                                    <ng-cointainer *ngFor="let seat_number of seat['number'];index as i">
                                                        <ng-container *ngIf="i == 3 || i == 9; else noneMargin">

                                                            <ng-container *ngIf="seat_number.screening_id != null && seat_number.screening_id == screening_id ; else seatDisable">
                                                                <button class="me-4 btn btn-outline btn-rounded btn-sm seat-disable"></button>

                                                            </ng-container>
                                                            <ng-template #seatDisable>
                                                                <button (click)="seatSelect($event,seat_number.id)" id="seatSelected" value="" type="button" class="me-4 btn btn-outline btn-rounded btn-sm "></button>
                                                            </ng-template>

                                                        </ng-container>
                                                        <ng-template #noneMargin>

                                                            <ng-container *ngIf="seat_number.screening_id != null && seat_number.screening_id == screening_id ; else seatDisable">
                                                                <button class=" btn btn-outline btn-rounded btn-sm seat-disable"></button>

                                                            </ng-container>
                                                            <ng-template #seatDisable>
                                                                <button (click)="seatSelect($event,seat_number.id)" id="seatSelected" value="" type="button" class="btn btn-outline btn-rounded btn-sm "></button>
                                                            </ng-template>

                                                        </ng-template>

                                                    </ng-cointainer>
                                                    <!-- <div class="col-md-3">
    
                                                        <div class="seat-chart ticket-order__seat-top">
                                                            <div class="a1">
                                                                <input type="checkbox" class="btn-check" id="a1"
                                                                    autocomplete="off" />
                                                                <label class="btn btn-warning ticket-order__border-seat"
                                                                    for="a1">1</label>
                                                            </div>
                                                            <div class="a2">
                                                                <input type="checkbox" class="btn-check" id="a2"
                                                                    autocomplete="off" />
                                                                <label class="btn btn-warning ticket-order__border-seat"
                                                                    for="a2">2</label>
                                                            </div>
                                                            <div class="a3">
                                                                <input type="checkbox" class="btn-check" id="a3"
                                                                    autocomplete="off" />
                                                                <label class="btn btn-warning ticket-order__border-seat"
                                                                    for="a3">3</label>
                                                            </div>
                                                            <div class="a4">
                                                                <input type="checkbox" class="btn-check" id="a4"
                                                                    autocomplete="off" />
                                                                <label class="btn btn-warning ticket-order__border-seat"
                                                                    for="a4">4</label>
                                                            </div>
                                                        </div>
                                                    </div> -->

                                                </div>

                                                <div class="col-md-1">
                                                    <button (click)=clearSeat() type="button" class="btn btn-outline-warning btn-rounded btn-sm ticket-order__space-top" data-mdb-slide="prev" data-mdb-target="#carouselExampleControlsOrder" data-mdb-ripple-color="dark">Previous</button>
                                                </div>
                                            </div>
                                            <!-- Modal Seat End -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Your Information Start -->
                            <div class="col-md-4 ">
                                <h5 class="modal-title ticket-order__font ">TH??NG TIN ?????T V??</h5>
                                <h3 class="ticket-order__font-nav ">PHIM</h3>
                                <h5 class="ticket-order__inf ticket-film"></h5>
                                <h3 class="ticket-order__font-nav ">NG??Y CHI???U</h3>
                                <h5 class="ticket-order__inf ticket-date"></h5>
                                <h3 class="ticket-order__font-nav ">GI??? CHI???U</h3>
                                <h5 class="ticket-order__inf ticket-time"></h5>
                                <h3 class="ticket-order__font-nav ">S??? GH???</h3>
                                <h5 class="ticket-order__inf ticket-seat">
                                </h5>
                                <h3 class="ticket-order__font-nav ">B???P N?????C ??I K??M</h3>
                                <h5 class="ticket-order__inf ticket-combo"></h5>
                                <h3 class="ticket-order__font-nav ">GI??</h3>
                                <h5 class="ticket-order__inf ticket-price"> Vnd</h5>
                                <h3 class="ticket-order__font-nav ticket-count">S??? L?????NG V??: </h3>
                                <h3 class="ticket-order__font-nav ticket-total">T???NG TI???N: Vnd</h3>
                                <button class="btn btn-outline-warning" (click)="clearSeat()">Clear</button>
                                <form [formGroup]="orderTicketForm" (ngSubmit)="save()">
                                    <input class="ticket-order__inf name" formControlName="film_id" hidden>
                                    <input class="ticket-order__inf name" formControlName="screening_id" hidden>
                                    <input class="ticket-order__inf name" formControlName="seats" hidden>
                                    <input class="ticket-order__inf name" formControlName="combo_id" hidden>
                                    <input class="ticket-order__inf name" formControlName="discount_id" hidden>
                                    <input class="ticket-order__inf name" formControlName="user_id" hidden>
                                    <input class="ticket-order__inf name" formControlName="status" hidden>
                                    <input class="ticket-order__inf name" formControlName="total_price" hidden>
                                    <div class="seatReceipt">
                                        <button type="submit" class="btn btn-outline-primary">?????t v??</button>
                                    </div>
                                </form>

                            </div>
                            <!-- Your Information End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================Modal Order Ticket End============================== -->

        <!-- Footer Start -->
        <footer class="footer container footer__height head__border footer__bottom">
            <div class="row ">
                <div class="cln-3 cln-lg-6">
                    <h2 class="footer__tittle">MENU</h2>
                    <p class="footer__font">Home</p>
                    <p class="footer__font">Showtimes</p>
                    <p class="footer__font">Order Ticket</p>
                    <i class="fab fa-youtube footer__social footer__space"></i>
                    <i class="fab fa-facebook footer__social footer__space"></i>
                    <i class="fab fa-twitter footer__social"></i>
                </div>
                <div class="cln-3 cln-lg-6">
                    <h2 class="footer__tittle">ADDRESS</h2>
                    <p class="footer__font">28 Nguyen Tri Phuong Street,</p>
                    <p class="footer__font">Phu Nhuan, Hue City</p>
                    <p class="footer__font">Email: cinerama@gmail.com</p>
                    <p class="footer__font"><i class="fas fa-phone-alt footer__social footer__space"></i>+0125.124789
                    </p>
                </div>
                <div class="cln-6">
                    <h2 class="footer__tittle">CONTACT</h2>
                    <div class="form-outline mb-4 footer__border">
                        <input type="text" id="form4Example1" class="form-control" />
                        <label class="form-label text-white-50" for="form4Example1">Name *</label>
                    </div>
                    <div class="form-outline mb-4 footer__border">
                        <input type="text" id="form4Example1" class="form-control" />
                        <label class="form-label text-white-50" for="form4Example1">Email *</label>
                    </div>
                    <div class="form-outline mb-4 footer__border">
                        <textarea class="form-control"></textarea>
                        <label class="form-label text-white-50" for="form6Example7">Message * </label>
                    </div>
                    <button type="button" class="btn btn-outline-warning btn-rounded">SEND TO US</button>
                </div>
            </div>
        </footer>
        <div class="logo container head__height-menu text-center">
            <div class="row">
                <div class="col-md-4">
                    <div class="col-md-4">
                        <p class="footer__font">
                            @ Do Not Copyright</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img class="footer__logo head__margin" src="{{asset('/storage/images/Logo-light.png')}}" alt="logo">
                </div>
                <div class="col-md-4">
                    <p class="footer__font">
                        @License by: 'Nhac cong di xem phim'</p>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="{{asset('/storage/js/client-js.js')}}"></script>
        @yield('client-script')
</body>

</html>