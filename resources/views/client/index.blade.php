<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>FoodPark || Restaurant Template</title>
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.exzoom.css') }}">
    <!-- fw toastr -->
    <link rel="stylesheet" href="{{ asset('frontend/css/toastr.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <!-- <link rel="stylesheet" href="css/rtl.css"> -->
</head>

<body>

    <!--=============================
        TOPBAR START
    ==============================-->
    <section class="fp__topbar">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-8">
                    <ul class="fp__topbar_info d-flex flex-wrap">
                        <li><a href="mailto:example@gmail.com"><i class="fas fa-envelope"></i> Unifood@gmail.com</a>
                        </li>
                        <li><a href="callto:123456789"><i class="fas fa-phone-alt"></i> +96487452145214</a></li>
                    </ul>
                </div>
                <div class="col-xl-6 col-md-4 d-none d-md-block">
                    <ul class="topbar_icon d-flex flex-wrap">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a> </li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a> </li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a> </li>
                        <li><a href="#"><i class="fab fa-behance"></i></a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        TOPBAR END
    ==============================-->


    <!--=============================
        MENU START
    ==============================-->
    <nav class="navbar navbar-expand-lg main_menu">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{ asset('frontend/images/logo.png') }}" alt="FoodPark" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="far fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('product') }}">menu</a>
                    </li>

                </ul>
                <ul class="menu_icon d-flex flex-wrap">

                    <li>
                        <a class="cart_icon"><i class="fas fa-shopping-basket"></i> <span>5</span></a>
                    </li>
                    <li>
                        <a href="dashboard.html"><i class="fas fa-user"></i></a>
                    </li>
                    <li>
                        <a class="common_btn" href="#" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">reservation</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--=============================
        MENU END
    ==============================-->


    <!--=============================
        BANNER START
    ==============================-->
    <section class="fp__banner" style="background: url({{ asset('frontend/images/banner_bg.jpg') }});">
        <div class="fp__banner_overlay">
            <div class="row banner_slider">
                <div class="col-12">
                    <div class="fp__banner_slider">
                        <div class=" container">
                            <div class="row">
                                <div class="col-xl-5 col-md-5 col-lg-5">
                                    <div class="fp__banner_img wow fadeInLeft" data-wow-duration="1s">
                                        <div class="img">
                                            <img src="{{ asset('frontend/images/slider_img_1.png') }}" alt="food item"
                                                class="img-fluid w-100">
                                            <span> 35% off </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-md-7 col-lg-6">
                                    <div class="fp__banner_text wow fadeInRight" data-wow-duration="1s">
                                        <h1>Different spice for a Different taste</h1>
                                        <h3>Fast Food & Restaurants</h3>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum fugit minima
                                            et debitis ut distinctio optio qui voluptate natus.</p>
                                        <ul class="d-flex flex-wrap">
                                            <li><a class="common_btn" href="#">shop now</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="fp__banner_slider">
                        <div class=" container">
                            <div class="row">
                                <div class="col-xl-5 col-md-5 col-lg-5">
                                    <div class="fp__banner_img wow fadeInLeft" data-wow-duration="1s">
                                        <div class="img">
                                            <img src="{{ asset('frontend/images/slider_img_2.png') }}"
                                                alt="food item" class="img-fluid w-100">
                                            <span
                                                style="background: url({{ asset('frontend/images/offer_shapes.png') }});">
                                                70% off
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-md-7 col-lg-6">
                                    <div class="fp__banner_text wow fadeInRight" data-wow-duration="1s">
                                        <h1>Eat healthy. Stay healthy.</h1>
                                        <h3>Fast Food & Restaurants</h3>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum fugit minima
                                            et debitis ut distinctio optio qui voluptate natus.</p>
                                        <ul class="d-flex flex-wrap">
                                            <li><a class="common_btn" href="#">shop now</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="fp__banner_slider">
                        <div class=" container">
                            <div class="row">
                                <div class="col-xl-5 col-md-5 col-lg-5">
                                    <div class="fp__banner_img wow fadeInLeft" data-wow-duration="1s">
                                        <div class="img">
                                            <img src="{{ asset('frontend/images/slider_img_3.png') }}"
                                                alt="food item" class="img-fluid w-100">
                                            <span
                                                style="background: url({{ asset('frontend/images/offer_shapes.png') }});">
                                                50% off
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-md-7 col-lg-6">
                                    <div class="fp__banner_text wow fadeInRight" data-wow-duration="1s">
                                        <h1>Great food. Tastes good.</h1>
                                        <h3>Fast Food & Restaurants</h3>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum fugit minima
                                            et debitis ut distinctio optio qui voluptate natus.</p>
                                        <ul class="d-flex flex-wrap">
                                            <li><a class="common_btn" href="#">shop now</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BANNER END
    ==============================-->

    <!--=============================
        OFFER ITEM START
    ==============================-->

    <!-- CART POPUT START -->
    <div class="fp__cart_popup">
        <div class="modal fade" id="cartModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fal fa-times"></i></button>
                        <div class="fp__cart_popup_img">
                            <img src="{{ asset('frontend/images/menu1.png') }}" alt="menu"
                                class="img-fluid w-100">
                        </div>
                        <div class="fp__cart_popup_text">
                            <a href="#" class="title">Maxican Pizza Test Better</a>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>(201)</span>
                            </p>
                            <h4 class="price">$320.00 <del>$350.00</del> </h4>

                            <div class="details_size">
                                <h5>select size</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="large" checked>
                                    <label class="form-check-label" for="large">
                                        large <span>+ $350</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="medium">
                                    <label class="form-check-label" for="medium">
                                        medium <span>+ $250</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="small">
                                    <label class="form-check-label" for="small">
                                        small <span>+ $150</span>
                                    </label>
                                </div>
                            </div>

                            <div class="details_extra_item">
                                <h5>select option <span>(optional)</span></h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="coca-cola">
                                    <label class="form-check-label" for="coca-cola">
                                        coca-cola <span>+ $10</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="7up">
                                    <label class="form-check-label" for="7up">
                                        7up <span>+ $15</span>
                                    </label>
                                </div>
                            </div>

                            <div class="details_quentity">
                                <h5>select quentity</h5>
                                <div class="quentity_btn_area d-flex flex-wrapa align-items-center">
                                    <div class="quentity_btn">
                                        <button class="btn btn-danger"><i class="fal fa-minus"></i></button>
                                        <input type="text" placeholder="1">
                                        <button class="btn btn-success"><i class="fal fa-plus"></i></button>
                                    </div>
                                    <h3>$320.00</h3>
                                </div>
                            </div>
                            <ul class="details_button_area d-flex flex-wrap">
                                <li><a class="common_btn" href="#">add to cart</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CART POPUT END -->
    <!--=============================
        OFFER ITEM END
    ==============================-->


    <!--=============================
        MENU ITEM START
    ==============================-->
    <section class="fp__menu mt_95 xs_mt_65">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1s">
                <div class="col-md-8 col-lg-7 col-xl-6 m-auto text-center">
                    <div class="fp__section_heading mb_45">
                        <h4>food Menu</h4>
                        <h2>Our Popular Delicious Foods</h2>
                        <span>
                            <img src="{{ asset('frontend/images/heading_shapes.png') }}" alt="shapes"
                                class="img-fluid w-100">
                        </span>
                        <p>Objectively pontificate quality models before intuitive information. Dramatically
                            recaptiualize multifunctional materials.</p>
                    </div>
                </div>
            </div>
            <div class="row grid">
                @foreach ($products as $item)
                    <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                        <div class="fp__menu_item">
                            <div class="fp__menu_item_img">
                                <img src="{{ asset('frontend/images/menu2_img_1.jpg') }}" alt="menu"
                                    class="img-fluid w-100">
                                <a class="category" href="#">{{ $item->category_id }}</a>
                            </div>
                            <div class="fp__menu_item_text">
                                <p class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                    <span>10</span>
                                </p>
                                <a class="title" href="{{ route('detail', $item->id) }}">{{ $item->name }}</a>
                                <h5 class="price">${{ $item->price }}</h5>
                                <ul class="d-flex flex-wrap justify-content-center">
                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                                class="fas fa-shopping-basket"></i></a></li>
                                    <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                    <li><a href="#"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--=============================
        MENU ITEM END
    ==============================-->


    <!--=============================
        ADD SLIDER START
    ==============================-->
    <section class="fp__add_slider mt_100 xs_mt_70 pt_100 xs_pt_70 pb_100 xs_pb_70">
        <div class="container">
            <div class="row add_slider wow fadeInUp" data-wow-duration="1s">
                <div class="col-xl-4">
                    <a href="#" class="fp__add_slider_single"
                        style="background: url({{ asset('frontend/images/offer_slider_3.png') }});">
                        <div class="text">
                            <h3>red chicken</h3>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4">
                    <a href="#" class="fp__add_slider_single"
                        style="background: url({{ asset('frontend/images/offer_slider_2.png') }});">
                        <div class="text">
                            <h3>red chicken</h3>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4">
                    <a href="#" class="fp__add_slider_single"
                        style="background: url({{ asset('frontend/images/offer_slider_1.png') }});">
                        <div class="text">
                            <h3>red chicken</h3>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4">
                    <a href="#" class="fp__add_slider_single"
                        style="background: url({{ asset('frontend/images/offer_slider_4.png') }});">
                        <div class="text">
                            <h3>red chicken</h3>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        ADD SLIDER END
    ==============================-->


    <!--=============================
        TEAM START
    ==============================-->
    <section class="fp__team pt_95 xs_pt_65 pb_50">
        <div class="container">

            <div class="row wow fadeInUp" data-wow-duration="1s">
                <div class="col-md-8 col-lg-7 col-xl-6 m-auto text-center">
                    <div class="fp__section_heading mb_25">
                        <h4>our team</h4>
                        <h2>meet our expert chefs</h2>
                        <span>
                            <img src="{{ asset('frontend/images/heading_shapes.png') }}" alt="shapes"
                                class="img-fluid w-100">
                        </span>
                        <p>Objectively pontificate quality models before intuitive information. Dramatically
                            recaptiualize multifunctional materials.</p>
                    </div>
                </div>
            </div>

            <div class="row team_slider">
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_team">
                        <div class="fp__single_team_img">
                            <img src="{{ asset('frontend/images/chef_1.jpg') }}" alt="team"
                                class="img-fluid w-100">
                        </div>
                        <div class="fp__single_team_text">
                            <h4>ismat joha</h4>
                            <p>senior chef</p>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_team">
                        <div class="fp__single_team_img">
                            <img src="{{ asset('frontend/images/chef_2.jpg') }}" alt="team"
                                class="img-fluid w-100">
                        </div>
                        <div class="fp__single_team_text">
                            <h4>arun chandra</h4>
                            <p>senior chef</p>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_team">
                        <div class="fp__single_team_img">
                            <img src="{{ asset('frontend/images/chef_3.jpg') }}" alt="team"
                                class="img-fluid w-100">
                        </div>
                        <div class="fp__single_team_text">
                            <h4>isita rahman</h4>
                            <p>senior chef</p>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_team">
                        <div class="fp__single_team_img">
                            <img src="{{ asset('frontend/images/chef_4.jpg') }}" alt="team"
                                class="img-fluid w-100">
                        </div>
                        <div class="fp__single_team_text">
                            <h4>khandakar rashed</h4>
                            <p>senior chef</p>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_team">
                        <div class="fp__single_team_img">
                            <img src="{{ asset('frontend/images/chef_5.jpg') }}" alt="team"
                                class="img-fluid w-100">
                        </div>
                        <div class="fp__single_team_text">
                            <h4>naurin nipu</h4>
                            <p>senior chef</p>
                            <ul class="d-flex flex-wrap justify-content-center">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        TEAM END
    ==============================-->

    <!--=============================
        FOOTER START
    ==============================-->
    <footer>
        <div class="footer_overlay pt_100 xs_pt_70 pb_100 xs_pb_70">
            <div class="container wow fadeInUp" data-wow-duration="1s">
                <div class="row justify-content-between">
                    <div class="col-lg-4 col-sm-8 col-md-6">
                        <div class="fp__footer_content">
                            <a class="footer_logo" href="index.html">
                                <img src="{{ asset('frontend/images/footer_logo.png') }}" alt="FoodPark"
                                    class="img-fluid w-100">
                            </a>
                            <span>There are many variations of Lorem Ipsum available, but the majority have
                                suffered.</span>
                            <p class="info"><i class="far fa-map-marker-alt"></i> 7232 Broadway Suite 308, Jackson
                                Heights, 11372, NY, United States</p>
                            <a class="info" href="callto:1234567890123"><i class="fas fa-phone-alt"></i>
                                +1347-430-9510</a>
                            <a class="info" href="mailto:websolutionus1@gmail.com"><i class="fas fa-envelope"></i>
                                websolutionus1@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-md-6">
                        <div class="fp__footer_content">
                            <h3>Short Link</h3>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Our Service</a></li>
                                <li><a href="#">gallery</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-md-6 order-sm-4 order-lg-3">
                        <div class="fp__footer_content">
                            <h3>Help Link</h3>
                            <ul>
                                <li><a href="#">Terms And Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Refund Policy</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-8 col-md-6 order-lg-4">
                        <div class="fp__footer_content">
                            <h3>subscribe</h3>
                            <form>
                                <input type="text" placeholder="Subscribe">
                                <button>Subscribe</button>
                            </form>
                            <div class="fp__footer_social_link">
                                <h5>follow us:</h5>
                                <ul class="d-flex flex-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fp__footer_bottom d-flex flex-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="fp__footer_bottom_text d-flex flex-wrap justify-content-between">
                            <p>Copyright 2022 <b>FoodPark</b> All Rights Reserved.</p>
                            <ul class="d-flex flex-wrap">
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">payment</a></li>
                                <li><a href="#">settings</a></li>
                                <li><a href="#">privacy policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--=============================
        FOOTER END
    ==============================-->


    <!--=============================
        SCROLL BUTTON START
    ==============================-->
    <div class="fp__scroll_btn">
        go to top
    </div>
    <!--=============================
        SCROLL BUTTON END
    ==============================-->



    <!--jquery library js-->
    <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
    <!--bootstrap js-->
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <!--font-awesome js-->
    <script src="{{ asset('frontend/js/Font-Awesome.js') }}"></script>
    <!-- slick slider -->
    <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
    <!-- isotop js -->
    <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
    <!-- simplyCountdownjs -->
    <script src="{{ asset('frontend/js/simplyCountdown.js') }}"></script>
    <!-- counter up js -->
    <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.countup.min.js') }}"></script>
    <!-- nice select js -->
    <script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
    <!-- venobox js -->
    <script src="{{ asset('frontend/js/venobox.min.js') }}"></script>
    <!-- sticky sidebar js -->
    <script src="{{ asset('frontend/js/sticky_sidebar.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <!-- ex zoom js -->
    <script src="{{ asset('frontend/js/jquery.exzoom.js') }}"></script>
    <!-- fw toastr -->
    <script src="{{ asset('frontend/js/toastr.min.js') }}"></script>
    <!--main/custom js-->
    <script src="{{ asset('frontend/js/main.js') }}"></script>

</body>

</html>
