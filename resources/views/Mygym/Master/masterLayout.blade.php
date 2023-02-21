<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('Gym/assets/images/favicon.svg') }}" type="image/x-icon" />
    <title>@yield('title')</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="{{ asset('Gym/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Gym/assets/css/lineicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('Gym/assets/css/materialdesignicons.min.css') }}" />
  
    <link rel="stylesheet" href="{{ asset('Gym/assets/css/main.css') }}" />
</head>

<body>

    <!-- ======== sidebar-nav start =========== -->
    <aside class="sidebar-nav-wrapper">
        <div class="navbar-logo">
            <a href="{{ route('mygym.dashboard') }}">
                <img height="56px" width="224px" src="{{ asset('Frontend/images/Final-removebg-preview 1 (4).png') }}"
                    alt="logo" />
            </a>
        </div>
        <nav class="sidebar-nav">
            <ul>
                <li class="nav-item">
                    <a href="{{ route('mygym.dashboard') }}">
                        <span class="icon"><i class="lni lni-grid-alt"></i></span>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item nav-item-has-children">
                    <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_2"
                        aria-controls="ddmenu_2" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon">
                            <i class="lni lni-flags"></i>
                        </span>
                        <span class="text">EVENT</span>
                    </a>
                    <ul id="ddmenu_2" class="collapse dropdown-nav">
                        <li>
                            <a href="{{ route('my-gym-events.index') }}"> Events </a>
                        </li>
                        <li>
                            <a href="{{ route('my-gym-events.create') }}"> Create event </a>
                        </li>
                    </ul>
                </li>

    </aside>
    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
        <!-- ========== header start ========== -->
        <header class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-6">
                        <div class="header-left d-flex align-items-center">
                            <div class="menu-toggle-btn mr-20">
                                <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                                    <i class="lni lni-chevron-left me-2"></i> Menu
                                </button>
                            </div>
                            <div class="header-search d-none d-md-flex">
                                <form action="#">
                                    <input type="text" placeholder="Search..." />
                                    <button><i class="lni lni-search-alt"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-6">
                        <div class="header-right">
                            <!-- notification start -->
                            <div class="notification-box ml-15 d-none d-md-flex">
                                <button class="dropdown-toggle" type="button" id="notification"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="lni lni-alarm"></i>
                                    <span>2</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notification">
                                    <li>
                                        <a href="#0">
                                            <div class="image">
                                                <img src="assets/images/lead/lead-6.png" alt="" />
                                            </div>
                                            <div class="content">
                                                <h6>
                                                    John Doe
                                                    <span class="text-regular">
                                                        comment on a product.
                                                    </span>
                                                </h6>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consect etur adipiscing
                                                    elit Vivamus tortor.
                                                </p>
                                                <span>10 mins ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <div class="image">
                                                <img src="assets/images/lead/lead-1.png" alt="" />
                                            </div>
                                            <div class="content">
                                                <h6>
                                                    Jonathon
                                                    <span class="text-regular">
                                                        like on a product.
                                                    </span>
                                                </h6>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consect etur adipiscing
                                                    elit Vivamus tortor.
                                                </p>
                                                <span>10 mins ago</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- notification end -->
                            <!-- message start -->
                            <div class="header-message-box ml-15 d-none d-md-flex">
                                <button class="dropdown-toggle" type="button" id="message" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="lni lni-envelope"></i>
                                    <span>3</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="message">
                                    <li>
                                        <a href="#0">
                                            <div class="image">
                                                <img src="assets/images/lead/lead-5.png" alt="" />
                                            </div>
                                            <div class="content">
                                                <h6>Jacob Jones</h6>
                                                <p>Hey!I can across your profile and ...</p>
                                                <span>10 mins ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <div class="image">
                                                <img src="assets/images/lead/lead-3.png" alt="" />
                                            </div>
                                            <div class="content">
                                                <h6>John Doe</h6>
                                                <p>Would you mind please checking out</p>
                                                <span>12 mins ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <div class="image">
                                                <img src="assets/images/lead/lead-2.png" alt="" />
                                            </div>
                                            <div class="content">
                                                <h6>Anee Lee</h6>
                                                <p>Hey! are you available for freelance?</p>
                                                <span>1h ago</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- message end -->
                            <!-- filter start -->
                            <div class="filter-box ml-15 d-none d-md-flex">
                                <button class="" type="button" id="filter">
                                    <i class="lni lni-funnel"></i>
                                </button>
                            </div>
                            <!-- filter end -->
                            <!-- profile start -->
                            <div class="profile-box ml-15">
                                <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="profile-info">
                                        <div class="info">
                                            <h6>John Doe</h6>
                                            <div class="image">
                                                <img src="assets/images/profile/profile-image.png" alt="" />
                                                <span class="status"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <i class="lni lni-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                                    <li>
                                        <a href="#0">
                                            <i class="lni lni-user"></i> View Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <i class="lni lni-alarm"></i> Notifications
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0"> <i class="lni lni-inbox"></i> Messages </a>
                                    </li>
                                    <li>
                                        <a href="#0"> <i class="lni lni-cog"></i> Settings </a>
                                    </li>
                                    <li>
                                        <a href="#0"> <i class="lni lni-exit"></i> Sign Out </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- profile end -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ========== header end ========== -->

        <!-- ========== section start ========== -->
        <section class="section">
            <div class="container-fluid">
                <!-- ========== title-wrapper start ========== -->
                <div class="title-wrapper pt-30">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="title mb-30">
                                <h2>My gym maneger</h2>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-md-6">
                            <div class="breadcrumb-wrapper mb-30">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#0">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Fitbouncer
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- ========== title-wrapper end ========== -->
                @yield('content')
                <!-- End Row -->
            </div>
            <!-- end container -->
        </section>
        <!-- ========== section end ========== -->

        <!-- ========== footer start =========== -->
        <footer class="footer mt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 order-last order-md-first">
                        <div class="copyright text-center text-md-start">
                            <p class="text-sm">
                                Designed and Developed by
                                <a href="#" rel="nofollow" target="_blank">
                                    FITBOUNCER
                                </a>
                            </p>
                        </div>
                    </div>
                    <!-- end col-->
                    <div class="col-md-6">
                        <div
                            class="
                terms
                d-flex
                justify-content-center justify-content-md-end
              ">
                            <a href="#0" class="text-sm">Term & Conditions</a>
                            <a href="#0" class="text-sm ml-15">Privacy & Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>
   
   
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <script src="{{ asset('Gym/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Gym/assets/js/main.js') }}"></script>
    @yield('addMoreSubEvent')
</body>

</html>
