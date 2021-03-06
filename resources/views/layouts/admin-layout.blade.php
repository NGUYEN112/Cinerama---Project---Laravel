<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="{{asset('/storage/admin/admin_assets/vendor/bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome CSS-->
  <!-- orion icons-->
  <link rel="stylesheet" href="{{asset('/storage/admin/admin_assets/css/orionicons.css')}}">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="{{asset('/storage/admin/admin_assets/css/style.default.css')}}" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="{{asset('/storage/admin/admin_assets/css/custom.css')}}">
  <link rel="stylesheet" href="{{asset('/storage/admin/admin_assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('/storage/styles/manager-style.css')}}">
  <link rel="stylesheet" href="{{asset('/storage/styles/remarkable.css')}}">



<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.js"></script> -->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow">
            <div class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead" style="cursor: pointer;"><i class="fas fa-align-left"></i></div><a href="" class="navbar-brand font-weight-bold text-uppercase text-base">ADMIN Dashboard</a>
            <ul class="ml-auto d-flex align-items-center list-unstyled mb-0">
                <li class="nav-item">
                    <form id="searchForm" class="ml-auto d-none d-lg-block">
                        <div class="form-group position-relative mb-0">
                            <button type="submit" style="top: -3px; left: 0;" class="position-absolute bg-white border-0 p-0"><i class="o-search-magnify-1 text-gray text-lg"></i></button>
                            <input type="search" placeholder="Search ..." class="form-control form-control-sm border-0 no-shadow pl-4">
                        </div>
                    </form>
                </li>
                <li class="nav-item dropdown ml-auto">
                    <a id="userInfo" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><img src="" alt="" style="max-width: 2.5rem;" class="img-fluid rounded-circle shadow"></a>
                    <div aria-labelledby="userInfo" class="dropdown-menu"><a href="#" class="dropdown-item"><strong class="d-block text-uppercase headings-font-family"></strong></a>
                        <div class=" dropdown-divider">
                        </div><a href="" class="dropdown-item">Trang ch???</a>
                        <div class="dropdown-divider"></div><a href="" class="dropdown-item">Logout</a>
                    </div>
                </li>


            </ul>
        </nav>
    </header>
    <div class="d-flex align-items-stretch">
        <div id="sidebar" class="sidebar py-3">
            <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">
                QUA??N LY??</div>
            <ul class="sidebar-menu list-unstyled">
                <li class="sidebar-list-item"><a href="/admin" href="javascript:;" class="sidebar-link text-dark"><i class="o-home-1 me-3 text-gray"></i><span>Home</span></a>
                </li>
                <li class="sidebar-list-item">
                    <ul class="sidebar-menu list-unstyled">
                        <li class="sidebar-list-item"><a href="/admin/cinemas" class="sidebar-link text-dark"><i class="o-survey-1 me-3 text-gray"></i><span>Qu???n L?? R???p</span></a></li>
                    </ul>
                </li>

                <li class="sidebar-list-item">
                    <ul class="sidebar-menu list-unstyled">
                        <li class="sidebar-list-item"><a href="/admin/remarkables" class="sidebar-link text-dark"><i class="fad fa-fire-alt me-3 text-gray"></i><span>Ch????ng tr??nh hot</span></a></li>
                    </ul>
                </li>
                <li class="sidebar-list-item">
                    <ul class="sidebar-menu list-unstyled">

                        <li class="sidebar-list-item"><a  href="/admin/films" class="sidebar-link text-dark"><i class="fas fa-film me-3 text-gray"></i><span>Qu???n L??
                                    Phim</span></a></li>
                        <li class="sidebar-list-item"><a href="/admin/screenings" class="sidebar-link text-dark"><i class="fas fa-calendar-week me-3 text-gray"></i><span>Qu???n
                                    L?? L???ch
                                    Chi???u</span></a></li>
                        <li class="sidebar-list-item"><a (click)="goToMember()" href="javascript:;" class="sidebar-link text-dark"><i class="fas fa-user-friends me-3 text-gray"></i><span>Qu???n
                                    L??
                                    Ng??????i du??ng</span></a></li>
                        <li class="sidebar-list-item"><a (click)="goToStaff()" href="javascript:;" class="sidebar-link text-dark"><i class="fas fa-user-friends me-3 text-gray"></i><span>Qu???n
                                    L??
                                    Nh??n vi??n</span></a></li>
                        <!-- <li class="sidebar-list-item"><a (click)="goToAds()" href="javascript:;" class="sidebar-link text-dark"><i class="fad fa-ad me-3 text-gray"></i><span>Qu???ng
                                c??o</span></a></li> -->

                        <li class="sidebar-list-item"><a href="/admin/rooms" class="sidebar-link text-dark"><i class="fab fa-windows me-3 text-gray"></i><span>Qu???n L??
                                    Ph??ng chi???u</span></a></li>
                        <li class="sidebar-list-item"><a routerLink="./revenues" href="javascript:;" class="sidebar-link text-dark"><i class="fas fa-film me-3 text-gray"></i><span>Doanh thu</span></a></li>
                    </ul>
                </li>
                <li class="sidebar-list-item"><a (click)="goToTicket()" href="javascript:;" class="sidebar-link text-dark"><i class="fas fa-ticket-alt me-3 text-gray"></i><span>Qu???n L??
                            V??</span></a></li>
                <li class="sidebar-list-item"><a  href="/admin/combos" class="sidebar-link text-dark"><i class="fad fa-popcorn me-3 text-gray"></i><span>Qu???n l?? S???n ph???m</span></a></li>
                <li class="sidebar-list-item"><a  href="/admin/discounts" class="sidebar-link text-dark"><i class="fad fa-popcorn me-3 text-gray"></i><span>Qu???n l?? ??u ????i</span></a></li>

                <!-- <li class="sidebar-list-item"><a (click)="goToSeat()" href="javascript:;" class="sidebar-link text-dark"><i
                        class="fas fa-couch me-3 text-gray"></i><span>Qu???n L?? Gh???</span></a></li> -->
            </ul>
        </div>
        <div class="page-holder w-100 d-flex flex-wrap">
            <div class="container-fluid px-xl-5">
                <section class="py-5">
                    <div class="row">
                        <div class="col-lg-12 mb-5">
                            <div class="card">
                                @yield('admin-content')
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>
    <footer class="footer bg-white shadow align-self-end py-3 px-xl-5 w-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 text-center text-md-left text-primary">
                    <p class="mb-2 mb-md-0">Cinerama Cinema &copy; 2021</p>
                </div>
                <div class="col-md-6 text-center text-md-right text-gray-400">
                    <p class="mb-0">Design by
                        <Strong>Gainer</Strong>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>