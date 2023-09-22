<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Alexis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/images/logo/logo-1.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- FONT -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <style>
        #header{
            height:150vh;
        }
        .fade-in-1 { 
            opacity: 0;
            transition: opacity 3s 0.5s;
            -webkit-transition: opacity 3s 0.5s;
            -moz-transition: opacity 3s 0.5s;
            -ms-transition: opacity 3s 0.5s;
            -o-transition: opacity 3s 0.5s;
            will-change: opacity;
        }
        .fade-in-1.is-inview { 
            opacity: 1;
        } 
        
        .fade-in-2 { 
            opacity: 0;
            transition: opacity 3s 1s;
            -webkit-transition: opacity 3s 1s;
            -moz-transition: opacity 3s 1s;
            -ms-transition: opacity 3s 1s;
            -o-transition: opacity 3s 1s;
            will-change: opacity;
        }
        .fade-in-2.is-inview { 
            opacity: 1;
        } 
        
        .fade-in-3 { 
            opacity: 0;
            transition: opacity 3s 1.5s;
            -webkit-transition: opacity 3s 1.5s;
            -moz-transition: opacity 3s 1.5s;
            -ms-transition: opacity 3s 1.5s;
            -o-transition: opacity 3s 1.5s;
            will-change: opacity;
        }
        .fade-in-3.is-inview { 
            opacity: 1;
        } 
        
        .fade-in-4 { 
            opacity: 0;
            transition: opacity 3s 2s;
            -webkit-transition: opacity 3s 2s;
            -moz-transition: opacity 3s 2s;
            -ms-transition: opacity 3s 2s;
            -o-transition: opacity 3s 2s;
            will-change: opacity;
        }
        .fade-in-4.is-inview { 
            opacity: 1;
        } 

        .fade-in-5 { 
            opacity: 0;
            transition: opacity 3s 2.5s;
            -webkit-transition: opacity 3s 2.5s;
            -moz-transition: opacity 3s 2.5s;
            -ms-transition: opacity 3s 2.5s;
            -o-transition: opacity 3s 2.5s;
            will-change: opacity;
        }
        .fade-in-5.is-inview { 
            opacity: 1;
        }


        @keyframes scroll {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(calc(-100% - var(--gap)));
            }
        }
  
        .marquee {
            --gap: 1rem;
            position: relative;
            display: flex;
            overflow: hidden;
            user-select: none;
            gap: var(--gap);
        }

        .marquee__content {
            flex-shrink: 0;
            display: flex;
            justify-content: space-around;
            gap: var(--gap);
            min-width: 100%;
            list-style: none;
        }
        .marquee__content img {
            height: 5rem;
        }
        .enable-animation .marquee__content {
            animation: scroll 20s linear infinite;
        }
        .marquee--reverse .marquee__content {
            animation-direction: reverse;
        }

        .accordion {
            background: transparent !important;
        }
  
        .accordion-item {
            background: transparent;
        }
        .accordion-header {
            background: transparent !important;
            border-top: 1px solid;
        }
        
        .accordion-item {
            padding-top: 0;
        }
        button.accordion-button {
            background: transparent;
            color: white;
        }

        .accordion-button:focus {
            z-index: 3;
            border-color: none;
            outline: 0;
            box-shadow: none;
        }
        .accordion-item:first-of-type {
            border-top-left-radius: 0 !important;
            border-top-right-radius: 0 !important;
        }
        .accordion-item:last-of-type {
            border-bottom-right-radius: 0 !important;
            border-bottom-left-radius: 0 !important;
        }
        .accordion-button:not(.collapsed) {
            color: #FFFFFF;
            background: transparent !important;
            box-shadow: none;
        }
        .accordion-button:not(.collapsed)::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23FFF'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }  
        .accordion-button::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23FFF'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e"); 
        }
        .list-group {
            display: flex;
            flex-direction: column;
            margin-left: 5rem;
            padding-left: 0;
            border-top: 1px solid;
            padding-top: 1rem;
            margin-bottom: 0;
            border-radius: none;
        }
        .list-group-item {
            position: relative;
            display: block;
            color: white;  
            padding: 0.5rem 0rem;
            text-decoration: none;
            background-color: transparent !important;
            border: none;
        }
        .accordion-button .number {
            width: 5rem;
            font-size: 1rem;
            font-weight: bold;
        }
    </style>

</head>
<div class='magnet-cursor'></div>
<div class='magnet-circle'></div>

<body class="magnet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <div class="o-scroll" id="js-scroll">

        <!-- SECTION 1 -->
        <section class="c-section" data-scroll-section>
            <div class="bg-hero o-container d-lg-block d-none " style="background-image: url('assets/images/material/bg-1.png')" data-scroll>
                <div class=" o-container pt-3">
                    <div class="text-center">
                        <img src="assets/images/logo/logo-1.png" alt="" width="150">
                    </div>
                    <div class="div-title ">
                        <div class="text-left">
                            <span class="title-1"><img src="assets/images/main_banner/declare_your.png" alt="" srcset=""> </span>
                            <span class="title-1"><span class="p-2 mt-2"><img src="assets/images/main_banner/badge.png" alt="" srcset=""></span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-hero o-container d-lg-none d-block" style="background-image: url('assets/images/main_banner/bg-2.png')">
                <div class=" o-container pt-3">
                    <div class="text-center">
                        <img src="assets/images/logo/logo-1.png" alt="" width="150">
                    </div>
                    <div class="div-title ">
                        <div class="text-left">
                            <span class="title-1"><img src="assets/images/main_banner/declare_your.png" alt="" srcset=""> </span>
                            <span class="title-1"><span class="p-2 mt-2"><img src="assets/images/main_banner/badge.png" alt="" srcset=""></span></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="c-section  mt-3" data-scroll-section>
            <div class="o-container" id="scroll-direction">

                <div class="c-direction-block div-cross-text" id="direction" data-scroll data-scroll-offset="100">
                    <div class="c-direction-block_item ">
                        <span class=" cross-text-2  text-white" data-scroll data-scroll-direction="horizontal" data-scroll-speed="3" data-scroll-target="#direction" style="background-color: #18181a; ">
                            DECLARE YOUR ELEGANCE <img src="assets/images/material/star.png" width="70px;" class="pb-2 mx-3"> DECLARE YOUR ELEGANCE <img src="assets/images/material/star.png" width="70px;" class="pb-2 mx-3">
                        </span>
                    </div>
                    <div class="c-direction-block_item" id="direction2">
                        <span class=" cross-text-1 text-white align-items-center" data-scroll data-scroll-direction="horizontal" data-scroll-speed="-4" data-scroll-target="#direction2" style="background-color: #18181a;">
                            DECLARE YOUR ELEGANCE <img src="assets/images/material/star.png" width="70px;" class="pb-2 mx-3"> DECLARE YOUR ELEGANCE <img src="assets/images/material/star.png" width="70px;" class="pb-2 mx-3"> DECLARE
                        </span>
                    </div>
                </div>

            </div>
        </section>

        <div class="divider"></div>

        <!-- ABOUT ALEXIS --> 
        <section class="container px-5 mb-5" data-scroll-section> 
            <div class="row align-items-center pr-0 " id="fixed-elements" >
                <div class="col-lg-6 col-12" >
                    <div class="mb-3 fade-in-1"  data-scroll data-scroll-speed="2.5" data-scroll-repeat="true" >
                        <span class="title-2 mb-0">AFORDABLE</span> <br>
                        <span class="title-2 mb-0">INTERNATIONAL</span> <br>
                        <span class="title-2 mb-0">FASHION</span>
                    </div>
                    <div class="row align-items-center fade-in-3" data-scroll data-scroll-speed="2.5" data-scroll-repeat="true">
                        <div class="col-3 ">
                            <h1 class="first-1 text-white">#1</h1>
                            <h1 class="first-2 ">#1</h1>
                        </div>
                        <div class="col-9">
                            <h5 class="text-white">OFF-PRICE FASHION STORE IN INDONESIA.</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 pr-0 img-hero-4 inner_img" data-scroll data-scroll-direction="horizontal" data-scroll-speed="2"   data-scroll-delay="0.05" data-scroll-repeat="true"> 
                    <img src="assets/images/material/store_image.jpeg" class="w-100 img" alt="" srcset=""> 
                </div>
            </div>
            <div class="col-lg-8 col-12 py-0 fade-in-4" data-scroll data-scroll-speed="2.5" data-scroll-repeat="true">
                <h5 class="text-white fadein">ABOUT ALEXIS</h5>
                <p class="text-white fadein">Alexis presents Imported clothing, bags and shoes with European, American, Chinese, Korean, Japanese Labels; all at very affordable prices.</p>
            </div>
        </section>   


        <div class="divider"></div>
        <!-- Why Are Our Prices So Affordable? -->


        <section class="container-fluid title-3-div align-items-center" data-scroll-section>
            <div class="" data-scroll data-scroll-speed="1" data-scroll-position="center">

                <div class="row d-flex justify-content-center" data-scroll data-scroll-speed="1" data-scroll-position="center">
                    <div id="" class="col-3 img-hero-1" data-scroll data-scroll-speed="4" data-scroll-position="center"> <img src="assets/images/material/img-1.jpg" class="w-100 fadein" alt="" srcset=""></div>
                    <div class="col-3 img-hero-2 d-flex justify-content-center align-items-end" data-scroll data-scroll-speed="1" data-scroll-position="center"> <img src="assets/images/material/img-2.jpg" class="w-50 fadein" alt="" srcset=""></div>
                    <div class="col-3 img-hero-3" data-scroll data-scroll-speed="3" data-scroll-position="center"> <img src="assets/images/material/img-3.jpg" class="w-100 fadein" alt="" srcset=""></div>
                </div>
                <div class="adorable-price-div" id="cross">
                    <h1 class="title-3-text-1 line1 title-3 " data-scroll data-scroll-direction="horizontal" data-scroll-speed="-2" data-scroll-target="#cross">
                        <span>WHY ARE OUR</span> <br>
                    </h1>
                    <h1 class="title-3-text-1 line2 title-3" data-scroll data-scroll-direction="horizontal" data-scroll-speed="0" data-scroll-target="#cross">
                        <span>PRICES SO</span> <br>
                    </h1>
                    <h1 class="title-3-text-1 line3 title-3" data-scroll data-scroll-direction="horizontal" data-scroll-speed="2" data-scroll-target="#cross">
                        <span>AFFORDABLE?</span>
                    </h1>

                    <h1 class="title-3-text-2 line1-1 title-3" data-scroll data-scroll-direction="horizontal" data-scroll-speed="-2" data-scroll-target="#cross">
                        <span>WHY ARE OUR</span> <br>
                    </h1>
                    <h1 class="title-3-text-2 line2-1 title-3" data-scroll data-scroll-direction="horizontal" data-scroll-speed="0" data-scroll-target="#cross">
                        <span>PRICES SO</span> <br>
                    </h1>
                    <h1 class="title-3-text-2 line3-1 title-3" data-scroll data-scroll-direction="horizontal" data-scroll-speed="2" data-scroll-target="#cross">
                        <span>AFFORDABLE?</span>
                    </h1>
                    <div class="container my-5">
                        <h5 class="text-center px-5 text-white"> Affordability is not a compromise on quality. Our products are sourced from excess production and off-season inventory, purchased in bulk quantities. This strategic approach allows us to offer you competitive prices without compromising on the excellence of our goods.</h5>
                    </div>
                </div>
            </div>

        </section>

        <div class="divider"></div>

        <!-- SINCE 2017 --> 

        <section class="container  px-5" data-scroll-section>

            <div class="row align-items-center pr-0">

                <div class="col-lg-9 col-12 pr-0 inner_img" data-scroll data-scroll-direction="horizontal" data-scroll-speed="-2"  data-scroll-repeat="true">
                    <img src="assets/images/material/store_image_2.jpg" class="w-100 img" alt="" srcset="">
                </div>

                <div class="col-lg-3 col-12 text-right ">
                    <h1 class="title-3 since-2017-1 mb-0" data-scroll data-scroll-speed="2" data-scroll-position="center">
                        <span>SINCE 2017</span> <br>
                    </h1>
                    <h1 class="title-3 text-white since-2017-2 mb-0" data-scroll data-scroll-speed="2" data-scroll-position="center">
                        <span>SINCE 2017</span> <br>
                    </h1>

                    <p class="since-2017-p text-white" data-scroll data-scroll-speed="2" data-scroll-position="center">
                        At Alexis, we've had the privilege of serving millions of customers across our numerous outlets since 2017. What truly speaks to our commitment to excellence is that an astounding 80% of our customers become cherished, long-term customers.
                    </p>
                </div>

            </div>

        </section>

        <div class="divider"></div>

        <!-- CUSTOMER SATISFACTION -->


        <section class="container-fluid title-3-div " data-scroll-section>
            <div class="" data-scroll data-scroll-speed="2" data-scroll-position="center">

                <div class="row d-flex justify-content-center" data-scroll data-scroll-speed="1" data-scroll-position="center">
                    <div id="" class="col-3 img-hero-1" data-scroll data-scroll-speed="4" data-scroll-position="center"> <img src="assets/images/material/img-1.jpg" class="w-100 fadein" alt="" srcset=""></div>
                    <div class="col-3 img-hero-2 d-flex justify-content-center align-items-end" data-scroll data-scroll-speed="1" data-scroll-position="center"> <img src="assets/images/material/img-2.jpg" class="w-50 fadein" alt="" srcset=""></div>
                    <div class="col-3 img-hero-3" data-scroll data-scroll-speed="3" data-scroll-position="center"> <img src="assets/images/material/img-3.jpg" class="w-100 fadein" alt="" srcset=""></div>
                </div>
                <div class="adorable-price-div" id="cross-2">
                    <h1 class="title-3-text-1 line1 title-3 " data-scroll data-scroll-direction="horizontal" data-scroll-speed="-2" data-scroll-target="#cross-2">
                        <span>100% CUSTOMER</span> <br>
                    </h1>
                    <h1 class="title-3-text-1 line2 title-3" data-scroll data-scroll-direction="horizontal" data-scroll-speed="0" data-scroll-target="#cross-2">
                        <span>SATISFACTION</span> <br>
                    </h1>
                    <h1 class="title-3-text-1 line3 title-3" data-scroll data-scroll-direction="horizontal" data-scroll-speed="2" data-scroll-target="#cross-2">
                        <span>GUARANTEE!!!</span>
                    </h1>

                    <h1 class="title-3-text-2 line1-1 title-3" data-scroll data-scroll-direction="horizontal" data-scroll-speed="-2" data-scroll-target="#cross-2">
                        <span>100% CUSTOMER</span> <br>
                    </h1>
                    <h1 class="title-3-text-2 line2-1 title-3" data-scroll data-scroll-direction="horizontal" data-scroll-speed="0" data-scroll-target="#cross-2">
                        <span>SATISFACTION</span> <br>
                    </h1>
                    <h1 class="title-3-text-2 line3-1 title-3" data-scroll data-scroll-direction="horizontal" data-scroll-speed="2" data-scroll-target="#cross-2">
                        <span>GUARANTEE!!!</span>
                    </h1>
                    <div class="container my-5">
                        <h5 class="text-center px-5 text-white"> If, for any reason, you're not completely satisfied with your purchase, simply let us know, and we'll happily provide a full refund. Your peace of mind is our priority, and we're committed to ensuring your experience with us is nothing short of exceptional.</h5>
                    </div>
                </div>
            </div>

        </section>


        <div class="divider"></div>

        <section class="container " data-scroll-section>
            <div class="row text-white limited-stock align-items-center" data-scroll data-scroll-speed="2" data-scroll-position="center">
                <div class="col-lg-5 ">
                    <h2>LIMITED STOCK</h2>
                    <h2 class="limited-stock-text-1">UNIQUENESS GUARANTEED</h2>
                </div>
                <div class="col-lg-7">
                    <h5>With our limited stock items, you can be confident in owning something truly distinctive, designed to make you stand out from the crowd.</h5>
                </div>
            </div>
        </section>


        <div class="divider"></div>

        <section class="container" data-scroll-section>

            <header class="c-header" id="header">
                <div class="container collections ">
                    <h1 class="title-3 mb-0 fadein">
                        <span class="mb-0 text-white">OUR</span> <br>
                        <span class="title-2">COLLECTIONS</span>
                    </h1> 
                </div>
                <div data-scroll data-scroll-horizontal="true">
                    <div class="containerCarousel"> 
                        <article>
                            <div class="wrapper">
                                <div class="img"><img src="https://images.squarespace-cdn.com/content/v1/57bafe29ff7c50e4a7ffbf67/1644246247889-9Z409F1D72G25OJVR85N/IMG_1047_web.jpg?format=1000w" class="w-100" alt="" srcset=""></div>
                            </div>
                        </article>

                        <article>
                            <div class="wrapper">
                                <div class="img"><img src="https://www.splendide-models.com/cache/2032/F02_2000.jpg?cached=1682671204" class="w-100" alt="" srcset=""></div>
                            </div>
                        </article>

                        <article>
                            <div class="wrapper">
                                <div class="img"><img src="https://images.unsplash.com/photo-1581338834647-b0fb40704e21?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8ZmFzaGlvbiUyMG1vZGVsfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" class="w-100" alt="" srcset=""></div>
                            </div>
                        </article>

                        <article>
                            <div class="wrapper">
                                <div class="img"><img src="https://images.unsplash.com/photo-1611042553484-d61f84d22784?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1364&q=80" class="w-100" alt="" srcset=""></div>
                            </div>
                        </article>

                        <article>
                            <div class="wrapper">
                                <div class="img"><img src="https://watermark.lovepik.com/photo/20211202/large/lovepik-fashion-suit-outer-model-picture_501399674.jpg" class="w-100" alt="" srcset=""></div>
                            </div>
                        </article>

                        <article>
                            <div class="wrapper">
                                <div class="img"><img src="https://4.bp.blogspot.com/_ZyeEZ-ZB3a8/TCuAu0TX-8I/AAAAAAAABqE/M1McJYwoF5s/s500/highfashion2.jpg" class="w-100" alt="" srcset=""></div>
                            </div>
                        </article>

                        <article>
                            <div class="wrapper">
                                <div class="img"><img src="https://2.bp.blogspot.com/-SfNHmbyU8yQ/Tjs7XRIrDpI/AAAAAAAACnA/USBGXAvpLHU/s1600/highfashion3.jpg" class="w-100" alt="" srcset=""></div>
                            </div>
                        </article>

                    </div>
                </div>
            </header>

        </section>
 
        <div class="divider"></div>

        <section class="container-fluid" data-scroll-section>
            <div class="row affordable-div align-items-center">
                <div class="text-center">
                    <h1 class="affordable">
                        <span class="">AFFORDABLE</span>
                    </h1>
                    <h1 class="international-fashion">
                        <span>INTERNATIONAL</span>
                    </h1> 
                    <h1 class="international-fashion">
                        <span>FASHION</span>
                    </h1> 
                </div>
            </div>
        </section> 
        <section class="container " data-scroll-section>
            <div class="text-white limited-stock align-items-center" data-scroll data-scroll-speed="2" data-scroll-position="center"> 
                <div class="text-center">
                    <h1 class="title-3-text-1 line1 title-3 fade-in-1" data-scroll data-scroll-speed="2.5">
                        <span>AFFORDABLE</span>  
                    </h1> 
                    <h2 class="limited-stock-text-1 fade-in-2" data-scroll data-scroll-speed="2.5">
                        <span>INTERNATIONAL FASHION</span>
                    </h2> 
                    <h5 class="fade-in-3" data-scroll data-scroll-speed="2.5">Alexis brings you imported clothing, bags, and shoes from renowned European, American, Chinese, Korean, and Japanese brands—all at incredibly affordable prices.</h5>
                </div>
            </div> 
        </section>

        <div class="divider" data-scroll-section></div>

        
        <!-- LOGO --> 
        <section class="container-fluid pt-5" data-scroll-section> 
            <section class="customer-logos slider mb-2">
                <div class="marquee enable-animation ">
                    <ul class="marquee__content">
                        <li><img src="assets/images/material/logo/logo-01.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-02.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-03.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-04.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-05.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-06.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-07.jpg"></li>
                    </ul>

                    <ul aria-hidden="true" class="marquee__content"> 
                        <li><img src="assets/images/material/logo/logo-01.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-02.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-03.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-04.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-05.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-06.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-07.jpg"></li>
                    </ul>
                </div>
            </section>
            <section class="customer-logos slider mb-2">
                <div class="marquee enable-animation marquee--reverse">
                    <ul class="marquee__content">
                        <li><img src="assets/images/material/logo/logo-07.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-06.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-05.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-04.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-03.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-02.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-01.jpg"></li>
                    </ul>

                    <ul aria-hidden="true" class="marquee__content"> 
                    <li><img src="assets/images/material/logo/logo-07.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-06.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-05.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-04.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-03.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-02.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-01.jpg"></li>
                    </ul>
                </div>
            </section>
            <section class="customer-logos slider mb-2">
                <div class="marquee enable-animation ">
                    <ul class="marquee__content">
                        <li><img src="assets/images/material/logo/logo-01.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-02.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-03.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-04.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-05.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-06.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-07.jpg"></li>
                    </ul>

                    <ul aria-hidden="true" class="marquee__content"> 
                        <li><img src="assets/images/material/logo/logo-01.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-02.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-03.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-04.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-05.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-06.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-07.jpg"></li>
                    </ul>
                </div>
            </section>
            
            <section class="customer-logos slider mb-2">
                <div class="marquee enable-animation marquee--reverse">
                    <ul class="marquee__content">
                        <li><img src="assets/images/material/logo/logo-07.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-06.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-05.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-04.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-03.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-02.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-01.jpg"></li>
                    </ul>

                    <ul aria-hidden="true" class="marquee__content"> 
                    <li><img src="assets/images/material/logo/logo-07.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-06.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-05.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-04.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-03.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-02.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-01.jpg"></li>
                    </ul>
                </div>
            </section>
            <section class="customer-logos slider mb-2">
                <div class="marquee enable-animation ">
                    <ul class="marquee__content">
                        <li><img src="assets/images/material/logo/logo-01.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-02.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-03.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-04.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-05.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-06.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-07.jpg"></li>
                    </ul>

                    <ul aria-hidden="true" class="marquee__content"> 
                        <li><img src="assets/images/material/logo/logo-01.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-02.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-03.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-04.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-05.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-06.jpg"></li>
                        <li><img src="assets/images/material/logo/logo-07.jpg"></li>
                    </ul>
                </div>
            </section>
        </section> 

        <div class="divider" data-scroll-section></div>


        <!-- VISIT STORE --> 
        <section class="container" data-scroll-section> 
            <div class="row text-white visit-store align-items-center">
                <div class="col-lg-7">
                    <h2 class="mb-3" >Visit our stores in person which are spread across various cities throughout Indonesia</h2> 
                    <div class="accordion" id="visit-store">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="visit-jakarta">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-visit-jakarta" aria-expanded="false" aria-controls="collapse-visit-jakarta">
                                    <span class="number">01</span>
                                    <span class="store">Jakarta</span>
                                </button>
                            </h2>
                            <div id="collapse-visit-jakarta" class="accordion-collapse collapse" aria-labelledby="visit-jakarta" data-bs-parent="#visit-store">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Mall Artha Gading</li>
                                        <li class="list-group-item">Mall Arion</li>
                                        <li class="list-group-item">Plaza Atrium</li>
                                        <li class="list-group-item">Plaza Cibubur</li>
                                        <li class="list-group-item">Plaza Slipi Jaya</li>
                                        <li class="list-group-item">Blok M Square</li>
                                        <li class="list-group-item">Mall Ciputra</li>
                                        <li class="list-group-item">Mall Daan Mogot</li>
                                        <li class="list-group-item">Plaza Blok M</li>
                                        <li class="list-group-item">Kalibata City Square</li>
                                        <li class="list-group-item">Mall Ambassador</li>
                                        <li class="list-group-item">Mall Bassura</li>
                                        <li class="list-group-item">Mall Cipinang Indah</li>
                                        <li class="list-group-item">Plaza Lippo Kramat Jati Indah</li>
                                        <li class="list-group-item">Plaza Kalibata</li>
                                        <li class="list-group-item">Plaza Pondok Gede</li>
                                        <li class="list-group-item">Mall Cijantung City</li>
                                        <li class="list-group-item">Seasons City</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="visit-tangerang">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-visit-tangerang" aria-expanded="false" aria-controls="collapse-visit-tangerang">
                                    <span class="number">02</span>
                                    <span class="store">Tangerang</span>
                                </button>
                            </h2>
                            <div id="collapse-visit-tangerang" class="accordion-collapse collapse" aria-labelledby="visit-tangerang" data-bs-parent="#visit-store">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush">  
                                        <li class="list-group-item">Supermall Karawaci</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="visit-bekasi">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-visit-bekasi" aria-expanded="false" aria-controls="collapse-visit-bekasi">
                                    <span class="number">03</span>
                                    <span class="store">Bekasi</span>
                                </button>
                            </h2>
                            <div id="collapse-visit-bekasi" class="accordion-collapse collapse" aria-labelledby="visit-bekasi" data-bs-parent="#visit-store">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush"> 
                                        <li class="list-group-item">Mall Metropolitan Bekasi</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="visit-Depok">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-visit-depok" aria-expanded="false" aria-controls="collapse-visit-depok">
                                    <span class="number">04</span>
                                    <span class="store">Depok</span>
                                </button>
                            </h2>
                            <div id="collapse-visit-depok" class="accordion-collapse collapse" aria-labelledby="visit-depok" data-bs-parent="#visit-store">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush"> 
                                        <li class="list-group-item">Mall Cinere</li> 
                                        <li class="list-group-item">D'Mall Depok</li>
                                        <li class="list-group-item">Depok Town Center</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="visit-banten">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-visit-banten" aria-expanded="false" aria-controls="collapse-visit-banten">
                                    <span class="number">05</span>
                                    <span class="store">Banten</span>
                                </button>
                            </h2>
                            <div id="collapse-visit-banten" class="accordion-collapse collapse" aria-labelledby="visit-banten" data-bs-parent="#visit-store">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush"> 
                                        <li class="list-group-item">Supermall Cilegon</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="visit-bogor">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-visit-bogor" aria-expanded="false" aria-controls="collapse-visit-bogor">
                                    <span class="number">06</span>
                                    <span class="store">Bogor</span>
                                </button>
                            </h2>
                            <div id="collapse-visit-bogor" class="accordion-collapse collapse" aria-labelledby="visit-bogor" data-bs-parent="#visit-store">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush"> 
                                        <li class="list-group-item">Bogor Trade Mall</li>
                                        <li class="list-group-item">Plaza Lippo Ekalokasari Bogor</li>
                                        <li class="list-group-item">Cibinong City Mall</li>
                                        <li class="list-group-item">Metropolitan Mall Cileungsi</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="visit-jawa-barat">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-visit-jawa-barat" aria-expanded="false" aria-controls="collapse-visit-jawa-barat">
                                    <span class="number">07</span>
                                    <span class="store">Jawa Barat</span>
                                </button>
                            </h2>
                            <div id="collapse-visit-jawa-barat" class="accordion-collapse collapse" aria-labelledby="visit-jawa-barat" data-bs-parent="#visit-store">
                                <div class="accordion-body ">
                                    <ul class="list-group list-group-flush"> 
                                        <li class="list-group-item">Cihampelas Walk Bandung</li>
                                        <li class="list-group-item">Paris Van Java Bandung</li>
                                        <li class="list-group-item">BTC Fashion Mall Bandung</li>
                                        <li class="list-group-item">Jatinangor Town Square</li>
                                        <li class="list-group-item">Karawang Central Plaza</li> 
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="visit-jawa-tengah">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-visit-jawa-tengah" aria-expanded="false" aria-controls="collapse-visit-jawa-tengah">
                                    <span class="number">08</span>
                                    <span class="store">Jawa Tengah</span>
                                </button>
                            </h2>
                            <div id="collapse-visit-jawa-tengah" class="accordion-collapse collapse" aria-labelledby="visit-jawa-tengah" data-bs-parent="#visit-store">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush"> 
                                        <li class="list-group-item">Solo Square</li> 
                                        <li class="list-group-item">Solo Grand Mall</li> 
                                        <li class="list-group-item">Rita Supermall Purwokerto</li> 
                                        <li class="list-group-item">Artos Magelang</li> 
                                    </ul>  
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="visit-jawa-timur">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-visit-jawa-timur" aria-expanded="false" aria-controls="collapse-visit-jawa-timur">
                                    <span class="number">08</span>
                                    <span class="store">Jawa Timur</span>
                                </button>
                            </h2>
                            <div id="collapse-visit-jawa-timur" class="accordion-collapse collapse" aria-labelledby="visit-jawa-timur" data-bs-parent="#visit-store">
                                <div class="accordion-body">
                                    <ul class="list-group list-group-flush"> 
                                        <li class="list-group-item">Grand City Mall Surabaya</li> 
                                        <li class="list-group-item">Royal Plaza Surabaya</li> 
                                        <li class="list-group-item">Tunjungan Plaza Surabaya</li> 
                                        <li class="list-group-item">Pakuwon Mall Surabaya</li> 
                                        <li class="list-group-item">Lippo Plaza Sidoarjo</li> 
                                        <li class="list-group-item">Sunrise Mall Mojokerto</li> 
                                        <li class="list-group-item">Mall Olympic Garden Malang</li>  
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" >
                    <img src="assets/images/material/store_image_2.jpg" class="w-100 img" alt="" srcset="">
                </div> 
            </div>
        </section>

        
        <div class="divider" data-scroll-section></div>

        <section class="container" data-scroll-section> 
            <div class="container collections ">
                <h1 class="title-3 mb-0 fadein">
                    <span class="title-2">VISIT</span><br>
                    <span class="mb-0 text-white">OUR MARKETPLACE</span> 
                </h1> 
            </div>
        </section>
    </div>


    <!-- <script>
        const spaceHolder = document.querySelectorAll('.space-holder');
        const horizontal = document.querySelectorAll('.horizontal');
        const container = document.querySelectorAll('.container');
        const sticky = document.querySelectorAll('.sticky');

        function calcDynamicHeight(ref) {
            const vw = window.innerWidth;
            const vh = window.innerHeight;
            const objectWidth = ref.scrollWidth;
            return objectWidth - vw + vh + 150;
        }

        container.forEach(function(current, i) {
            console.log(spaceHolder[i]);
            spaceHolder[i].style.height = `${calcDynamicHeight(horizontal[i])}px`;
            window.addEventListener('scroll', () => {
                horizontal[i].style.transform = `translateX(-${sticky[i].offsetTop}px)`;
            });
            window.addEventListener('resize', () => {
                spaceHolder[i].style.height = `${calcDynamicHeight(horizontal[i])}px`;
            });
        });
    </script> -->





    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script>
        !(function() {
            "use strict";

            function s(t, e) {
                if (!(t instanceof e))
                    throw new TypeError("Cannot call a class as a function");
            }

            function n(t, e) {
                for (var i = 0; i < e.length; i++) {
                    var s = e[i];
                    (s.enumerable = s.enumerable || !1),
                    (s.configurable = !0),
                    "value" in s && (s.writable = !0),
                        Object.defineProperty(t, s.key, s);
                }
            }

            function l(t, e, i) {
                return e && n(t.prototype, e), i && n(t, i), t;
            }

            function i(e, t) {
                var i = Object.keys(e);
                if (Object.getOwnPropertySymbols) {
                    var s = Object.getOwnPropertySymbols(e);
                    t &&
                        (s = s.filter(function(t) {
                            return Object.getOwnPropertyDescriptor(e, t).enumerable;
                        })),
                        i.push.apply(i, s);
                }
                return i;
            }

            function e(t, e) {
                if ("function" != typeof e && null !== e)
                    throw new TypeError("Super expression must either be null or a function");
                (t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                })),
                e && a(t, e);
            }

            function o(t) {
                return (o = Object.setPrototypeOf ?
                    Object.getPrototypeOf :
                    function(t) {
                        return t.__proto__ || Object.getPrototypeOf(t);
                    })(t);
            }

            function a(t, e) {
                return (a =
                    Object.setPrototypeOf ||
                    function(t, e) {
                        return (t.__proto__ = e), t;
                    })(t, e);
            }

            function r(t) {
                if (void 0 === t)
                    throw new ReferenceError(
                        "this hasn't been initialised - super() hasn't been called"
                    );
                return t;
            }

            function c(t, e) {
                return !e || ("object" != typeof e && "function" != typeof e) ? r(t) : e;
            }

            function h(t, e, i) {
                return (h =
                    "undefined" != typeof Reflect && Reflect.get ?
                    Reflect.get :
                    function(t, e, i) {
                        var s = (function(t, e) {
                            for (; !Object.prototype.hasOwnProperty.call(t, e) &&
                                null !== (t = o(t));

                            );
                            return t;
                        })(t, e);
                        if (s) {
                            var n = Object.getOwnPropertyDescriptor(s, e);
                            return n.get ? n.get.call(i) : n.value;
                        }
                    })(t, e, i || t);
            }
            var u = {
                el: document,
                elMobile: document,
                name: "scroll",
                offset: 0,
                repeat: !1,
                smooth: !1,
                smoothMobile: !1,
                direction: "vertical",
                inertia: 0.1,
                class: "is-inview",
                scrollbarClass: "c-scrollbar",
                scrollingClass: "has-scroll-scrolling",
                draggingClass: "has-scroll-dragging",
                smoothClass: "has-scroll-smooth",
                initClass: "has-scroll-init",
                getSpeed: !1,
                getDirection: !1,
                firefoxMultiplier: 50,
                touchMultiplier: 2
            },
            d = (function() {
                function e() {
                    var t =
                        0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : {};
                    s(this, e),
                        window.scrollTo(0, 0),
                        Object.assign(this, u, t),
                        (this.namespace = "locomotive"),
                        (this.html = document.documentElement),
                        (this.windowHeight = window.innerHeight),
                        (this.windowMiddle = this.windowHeight / 2),
                        (this.els = []),
                        (this.listeners = {}),
                        (this.hasScrollTicking = !1),
                        (this.hasCallEventSet = !1),
                        (this.checkScroll = this.checkScroll.bind(this)),
                        (this.checkResize = this.checkResize.bind(this)),
                        (this.checkEvent = this.checkEvent.bind(this)),
                        (this.instance = {
                            scroll: {
                                x: 0,
                                y: 0
                            },
                            limit: this.html.offsetHeight
                        }),
                        this.getDirection && (this.instance.direction = null),
                        this.getDirection && (this.instance.speed = 0),
                        this.html.classList.add(this.initClass),
                        window.addEventListener("resize", this.checkResize, !1);
                }
                return (
                    l(e, [{
                            key: "init",
                            value: function() {
                                this.initEvents();
                            }
                        },
                        {
                            key: "checkScroll",
                            value: function() {
                                this.dispatchScroll();
                            }
                        },
                        {
                            key: "checkResize",
                            value: function() {}
                        },
                        {
                            key: "initEvents",
                            value: function() {
                                var e = this;
                                (this.scrollToEls = this.el.querySelectorAll(
                                    "[data-".concat(this.name, "-to]")
                                )),
                                (this.setScrollTo = this.setScrollTo.bind(this)),
                                this.scrollToEls.forEach(function(t) {
                                    t.addEventListener("click", e.setScrollTo, !1);
                                });
                            }
                        },
                        {
                            key: "setScrollTo",
                            value: function(t) {
                                t.preventDefault(),
                                    this.scrollTo(
                                        t.currentTarget.getAttribute(
                                            "data-".concat(this.name, "-href")
                                        ) || t.currentTarget.getAttribute("href"),
                                        t.currentTarget.getAttribute(
                                            "data-".concat(this.name, "-offset")
                                        )
                                    );
                            }
                        },
                        {
                            key: "addElements",
                            value: function() {}
                        },
                        {
                            key: "detectElements",
                            value: function(i) {
                                var s = this,
                                    n = this.instance.scroll.y,
                                    l = n + this.windowHeight;
                                this.els.forEach(function(t, e) {
                                        !t ||
                                            (t.inView && !i) ||
                                            (l >= t.top && n < t.bottom && s.setInView(t, e)),
                                            t &&
                                            t.inView &&
                                            (l < t.top || n > t.bottom) &&
                                            s.setOutOfView(t, e);
                                    }),
                                    (this.els = this.els.filter(function(t, e) {
                                        return null !== t;
                                    })),
                                    (this.hasScrollTicking = !1);
                            }
                        },
                        {
                            key: "setInView",
                            value: function(t, e) {
                                (this.els[e].inView = !0),
                                t.el.classList.add(t.class),
                                    t.call &&
                                    this.hasCallEventSet &&
                                    (this.dispatchCall(t, "enter"),
                                        t.repeat || (this.els[e].call = !1)),
                                    t.repeat ||
                                    t.speed ||
                                    t.sticky ||
                                    ((!t.call || (t.call && this.hasCallEventSet)) &&
                                        (this.els[e] = null));
                            }
                        },
                        {
                            key: "setOutOfView",
                            value: function(t, e) {
                                (t.repeat || void 0 !== t.speed) && (this.els[e].inView = !1),
                                t.call && this.hasCallEventSet && this.dispatchCall(t, "exit"),
                                    t.repeat && t.el.classList.remove(t.class);
                            }
                        },
                        {
                            key: "dispatchCall",
                            value: function(t, e) {
                                (this.callWay = e),
                                (this.callValue = t.call.split(",").map(function(t) {
                                    return t.trim();
                                })),
                                (this.callObj = t),
                                1 == this.callValue.length &&
                                    (this.callValue = this.callValue[0]);
                                var i = new Event(this.namespace + "call");
                                this.el.dispatchEvent(i);
                            }
                        },
                        {
                            key: "dispatchScroll",
                            value: function() {
                                var t = new Event(this.namespace + "scroll");
                                this.el.dispatchEvent(t);
                            }
                        },
                        {
                            key: "setEvents",
                            value: function(t, e) {
                                this.listeners[t] || (this.listeners[t] = []);
                                var i = this.listeners[t];
                                i.push(e),
                                    1 === i.length &&
                                    this.el.addEventListener(
                                        this.namespace + t,
                                        this.checkEvent,
                                        !1
                                    ),
                                    "call" === t &&
                                    ((this.hasCallEventSet = !0), this.detectElements(!0));
                            }
                        },
                        {
                            key: "unsetEvents",
                            value: function(t, e) {
                                if (this.listeners[t]) {
                                    var i = this.listeners[t],
                                        s = i.indexOf(e);
                                    s < 0 ||
                                        (i.splice(s, 1),
                                            0 === i.index &&
                                            this.el.removeEventListener(
                                                this.namespace + t,
                                                this.checkEvent,
                                                !1
                                            ));
                                }
                            }
                        },
                        {
                            key: "checkEvent",
                            value: function(t) {
                                var e = this,
                                    i = t.type.replace(this.namespace, ""),
                                    s = this.listeners[i];
                                s &&
                                    0 !== s.length &&
                                    s.forEach(function(t) {
                                        switch (i) {
                                            case "scroll":
                                                return t(e.instance);
                                            case "call":
                                                return t(e.callValue, e.callWay, e.callObj);
                                            default:
                                                return t();
                                        }
                                    });
                            }
                        },
                        {
                            key: "startScroll",
                            value: function() {}
                        },
                        {
                            key: "stopScroll",
                            value: function() {}
                        },
                        {
                            key: "setScroll",
                            value: function(t, e) {
                                this.instance.scroll = {
                                    x: 0,
                                    y: 0
                                };
                            }
                        },
                        {
                            key: "destroy",
                            value: function() {
                                var e = this;
                                window.removeEventListener("resize", this.checkResize, !1),
                                    Object.keys(this.listeners).forEach(function(t) {
                                        e.el.removeEventListener(e.namespace + t, e.checkEvent, !1);
                                    }),
                                    (this.listeners = {}),
                                    this.scrollToEls.forEach(function(t) {
                                        t.removeEventListener("click", e.setScrollTo, !1);
                                    });
                            }
                        }
                    ]),
                    e
                );
            })(),
            t = (function(t) {
                function i() {
                    var t,
                        e =
                        0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : {};
                    return (
                        s(this, i),
                        (t = c(this, o(i).call(this, e))),
                        window.addEventListener("scroll", t.checkScroll, !1),
                        t
                    );
                }
                return (
                    e(i, d),
                    l(i, [{
                            key: "init",
                            value: function() {
                                (this.instance.scroll.y = window.pageYOffset),
                                this.addElements(),
                                    this.detectElements(),
                                    h(o(i.prototype), "init", this).call(this);
                            }
                        },
                        {
                            key: "checkScroll",
                            value: function() {
                                var t = this;
                                h(o(i.prototype), "checkScroll", this).call(this),
                                    (this.instance.scroll.y = window.pageYOffset),
                                    this.els.length &&
                                    (this.hasScrollTicking ||
                                        (requestAnimationFrame(function() {
                                                t.detectElements();
                                            }),
                                            (this.hasScrollTicking = !0)));
                            }
                        },
                        {
                            key: "checkResize",
                            value: function() {
                                var t = this;
                                this.els.length &&
                                    ((this.windowHeight = window.innerHeight),
                                        this.hasScrollTicking ||
                                        (requestAnimationFrame(function() {
                                                t.updateElements();
                                            }),
                                            (this.hasScrollTicking = !0)));
                            }
                        },
                        {
                            key: "addElements",
                            value: function() {
                                var c = this;
                                (this.els = []),
                                this.el
                                    .querySelectorAll("[data-" + this.name + "]")
                                    .forEach(function(t, e) {
                                        var i = t.dataset[c.name + "Class"] || c.class,
                                            s = t.getBoundingClientRect().top + c.instance.scroll.y,
                                            n = s + t.offsetHeight,
                                            l =
                                            parseInt(t.dataset[c.name + "Offset"]) ||
                                            parseInt(c.offset),
                                            o = t.dataset[c.name + "Repeat"],
                                            a = t.dataset[c.name + "Call"],
                                            r = {
                                                el: t,
                                                id: e,
                                                class: i,
                                                top: s + l,
                                                bottom: n,
                                                offset: l,
                                                repeat: (o = "false" != o && (null != o || c.repeat)),
                                                inView: !1,
                                                call: a
                                            };
                                        c.els.push(r);
                                    });
                            }
                        },
                        {
                            key: "updateElements",
                            value: function() {
                                var n = this;
                                this.els.forEach(function(t, e) {
                                        var i = t.el.getBoundingClientRect().top + n.instance.scroll.y,
                                            s = i + t.el.offsetHeight;
                                        (n.els[e].top = i + t.offset), (n.els[e].bottom = s);
                                    }),
                                    (this.hasScrollTicking = !1);
                            }
                        },
                        {
                            key: "scrollTo",
                            value: function(t, e) {
                                var i,
                                    s = e ? parseInt(e) : 0;
                                "string" == typeof t
                                    ?
                                    "top" === t ?
                                    (i = this.html) :
                                    "bottom" === t ?
                                    (s = this.html.offsetHeight - window.innerHeight) :
                                    (i = document.querySelectorAll(t)[0]) :
                                    t.target || (i = t),
                                    i && (s = i.getBoundingClientRect().top + s),
                                    (s += this.instance.scroll.y),
                                    window.scrollTo({
                                        top: s,
                                        behavior: "smooth"
                                    });
                            }
                        },
                        {
                            key: "update",
                            value: function() {
                                this.addElements(), this.detectElements();
                            }
                        },
                        {
                            key: "destroy",
                            value: function() {
                                h(o(i.prototype), "destroy", this).call(this),
                                    window.removeEventListener("scroll", this.checkScroll, !1);
                            }
                        }
                    ]),
                    i
                );
            })(),
            f = Object.getOwnPropertySymbols,
            p = Object.prototype.hasOwnProperty,
            y = Object.prototype.propertyIsEnumerable;
            var m = (function() {
                    try {
                        if (!Object.assign) return !1;
                        var t = new String("abc");
                        if (((t[5] = "de"), "5" === Object.getOwnPropertyNames(t)[0])) return !1;
                        for (var e = {}, i = 0; i < 10; i++) e["_" + String.fromCharCode(i)] = i;
                        if (
                            "0123456789" !==
                            Object.getOwnPropertyNames(e)
                            .map(function(t) {
                                return e[t];
                            })
                            .join("")
                        )
                            return !1;
                        var s = {};
                        return (
                            "abcdefghijklmnopqrst".split("").forEach(function(t) {
                                s[t] = t;
                            }),
                            "abcdefghijklmnopqrst" === Object.keys(Object.assign({}, s)).join("")
                        );
                    } catch (t) {
                        return !1;
                    }
                })() ?
                Object.assign :
                function(t, e) {
                    for (
                        var i,
                            s,
                            n = (function(t) {
                                if (null == t)
                                    throw new TypeError(
                                        "Object.assign cannot be called with null or undefined"
                                    );
                                return Object(t);
                            })(t),
                            l = 1; l < arguments.length; l++
                    ) {
                        for (var o in (i = Object(arguments[l])))
                            p.call(i, o) && (n[o] = i[o]);
                        if (f) {
                            s = f(i);
                            for (var a = 0; a < s.length; a++)
                                y.call(i, s[a]) && (n[s[a]] = i[s[a]]);
                        }
                    }
                    return n;
                };

            function v() {}
            v.prototype = {
                on: function(t, e, i) {
                    var s = this.e || (this.e = {});
                    return (s[t] || (s[t] = [])).push({
                        fn: e,
                        ctx: i
                    }), this;
                },
                once: function(t, e, i) {
                    var s = this;

                    function n() {
                        s.off(t, n), e.apply(i, arguments);
                    }
                    return (n._ = e), this.on(t, n, i);
                },
                emit: function(t) {
                    for (
                        var e = [].slice.call(arguments, 1),
                            i = ((this.e || (this.e = {}))[t] || []).slice(),
                            s = 0,
                            n = i.length; s < n; s++
                    )
                        i[s].fn.apply(i[s].ctx, e);
                    return this;
                },
                off: function(t, e) {
                    var i = this.e || (this.e = {}),
                        s = i[t],
                        n = [];
                    if (s && e)
                        for (var l = 0, o = s.length; l < o; l++)
                            s[l].fn !== e && s[l].fn._ !== e && n.push(s[l]);
                    return n.length ? (i[t] = n) : delete i[t], this;
                }
            };
            var g = v,
                w =
                "undefined" != typeof globalThis ?
                globalThis :
                "undefined" != typeof window ?
                window :
                "undefined" != typeof global ?
                global :
                "undefined" != typeof self ?
                self : {};
            var b,
                k =
                ((function(t, e) {
                        (function() {
                            (null !== e ? e : this).Lethargy = (function() {
                                function t(t, e, i, s) {
                                    (this.stability = null != t ? Math.abs(t) : 8),
                                    (this.sensitivity = null != e ? 1 + Math.abs(e) : 100),
                                    (this.tolerance = null != i ? 1 + Math.abs(i) : 1.1),
                                    (this.delay = null != s ? s : 150),
                                    (this.lastUpDeltas = function() {
                                        var t, e, i;
                                        for (
                                            i = [], t = 1, e = 2 * this.stability; 1 <= e ? t <= e : e <= t; 1 <= e ? t++ : t--
                                        )
                                            i.push(null);
                                        return i;
                                    }.call(this)),
                                    (this.lastDownDeltas = function() {
                                        var t, e, i;
                                        for (
                                            i = [], t = 1, e = 2 * this.stability; 1 <= e ? t <= e : e <= t; 1 <= e ? t++ : t--
                                        )
                                            i.push(null);
                                        return i;
                                    }.call(this)),
                                    (this.deltasTimestamp = function() {
                                        var t, e, i;
                                        for (
                                            i = [], t = 1, e = 2 * this.stability; 1 <= e ? t <= e : e <= t; 1 <= e ? t++ : t--
                                        )
                                            i.push(null);
                                        return i;
                                    }.call(this));
                                }
                                return (
                                    (t.prototype.check = function(t) {
                                        var e;
                                        return (
                                            null != (t = t.originalEvent || t).wheelDelta ?
                                            (e = t.wheelDelta) :
                                            null != t.deltaY ?
                                            (e = -40 * t.deltaY) :
                                            (null == t.detail && 0 !== t.detail) ||
                                            (e = -40 * t.detail),
                                            this.deltasTimestamp.push(Date.now()),
                                            this.deltasTimestamp.shift(),
                                            0 < e ?
                                            (this.lastUpDeltas.push(e),
                                                this.lastUpDeltas.shift(),
                                                this.isInertia(1)) :
                                            (this.lastDownDeltas.push(e),
                                                this.lastDownDeltas.shift(),
                                                this.isInertia(-1))
                                        );
                                    }),
                                    (t.prototype.isInertia = function(t) {
                                        var e, i, s, n, l, o, a;
                                        return null ===
                                            (e = -1 === t ? this.lastDownDeltas : this.lastUpDeltas)[0] ?
                                            t :
                                            !(
                                                this.deltasTimestamp[2 * this.stability - 2] +
                                                this.delay >
                                                Date.now() && e[0] === e[2 * this.stability - 1]
                                            ) &&
                                            ((s = e.slice(0, this.stability)),
                                                (i = e.slice(this.stability, 2 * this.stability)),
                                                (a = s.reduce(function(t, e) {
                                                    return t + e;
                                                })),
                                                (l = i.reduce(function(t, e) {
                                                    return t + e;
                                                })),
                                                (o = a / s.length),
                                                (n = l / i.length),
                                                Math.abs(o) < Math.abs(n * this.tolerance) &&
                                                this.sensitivity < Math.abs(n) &&
                                                t);
                                    }),
                                    (t.prototype.showLastUpDeltas = function() {
                                        return this.lastUpDeltas;
                                    }),
                                    (t.prototype.showLastDownDeltas = function() {
                                        return this.lastDownDeltas;
                                    }),
                                    t
                                );
                            })();
                        }.call(w));
                    })((b = {
                        exports: {}
                    }), b.exports),
                    b.exports),
                S = {
                    hasWheelEvent: "onwheel" in document,
                    hasMouseWheelEvent: "onmousewheel" in document,
                    hasTouch: "ontouchstart" in document,
                    hasTouchWin: navigator.msMaxTouchPoints && 1 < navigator.msMaxTouchPoints,
                    hasPointer: !!window.navigator.msPointerEnabled,
                    hasKeyDown: "onkeydown" in document,
                    isFirefox: -1 < navigator.userAgent.indexOf("Firefox")
                },
                E = Object.prototype.toString,
                T = Object.prototype.hasOwnProperty;

            function O(t, e) {
                return function() {
                    return t.apply(e, arguments);
                };
            }
            var D = k.Lethargy,
                _ = "virtualscroll",
                L = B,
                M = 37,
                C = 38,
                H = 39,
                x = 40,
                j = 32;

            function B(t) {
                !(function(t) {
                    if (!t) return console.warn("bindAll requires at least one argument.");
                    var e = Array.prototype.slice.call(arguments, 1);
                    if (0 === e.length)
                        for (var i in t)
                            T.call(t, i) &&
                            "function" == typeof t[i] &&
                            "[object Function]" == E.call(t[i]) &&
                            e.push(i);
                    for (var s = 0; s < e.length; s++) {
                        var n = e[s];
                        t[n] = O(t[n], t);
                    }
                })(
                    this,
                    "_onWheel",
                    "_onMouseWheel",
                    "_onTouchStart",
                    "_onTouchMove",
                    "_onKeyDown"
                ),
                (this.el = window),
                t && t.el && ((this.el = t.el), delete t.el),
                    (this.options = m({
                            mouseMultiplier: 1,
                            touchMultiplier: 2,
                            firefoxMultiplier: 15,
                            keyStep: 120,
                            preventTouch: !1,
                            unpreventTouchClass: "vs-touchmove-allowed",
                            limitInertia: !1,
                            useKeyboard: !0,
                            useTouch: !0
                        },
                        t
                    )),
                    this.options.limitInertia && (this._lethargy = new D()),
                    (this._emitter = new g()),
                    (this._event = {
                        y: 0,
                        x: 0,
                        deltaX: 0,
                        deltaY: 0
                    }),
                    (this.touchStartX = null),
                    (this.touchStartY = null),
                    (this.bodyTouchAction = null),
                    void 0 !== this.options.passive &&
                    (this.listenerOptions = {
                        passive: this.options.passive
                    });
            }

            function P(t, e, i) {
                return (1 - i) * t + i * e;
            }

            function Y(t) {
                var e = {};
                if (window.getComputedStyle) {
                    var i = getComputedStyle(t),
                        s = i.transform || i.webkitTransform || i.mozTransform,
                        n = s.match(/^matrix3d\((.+)\)$/);
                    return n ?
                        parseFloat(n[1].split(", ")[13]) :
                        ((n = s.match(/^matrix\((.+)\)$/)),
                            (e.x = n ? parseFloat(n[1].split(", ")[4]) : 0),
                            (e.y = n ? parseFloat(n[1].split(", ")[5]) : 0),
                            e);
                }
            }
            (B.prototype._notify = function(t) {
                var e = this._event;
                (e.x += e.deltaX),
                (e.y += e.deltaY),
                this._emitter.emit(_, {
                    x: e.x,
                    y: e.y,
                    deltaX: e.deltaX,
                    deltaY: e.deltaY,
                    originalEvent: t
                });
            }),
            (B.prototype._onWheel = function(t) {
                var e = this.options;
                if (!this._lethargy || !1 !== this._lethargy.check(t)) {
                    var i = this._event;
                    (i.deltaX = t.wheelDeltaX || -1 * t.deltaX),
                    (i.deltaY = t.wheelDeltaY || -1 * t.deltaY),
                    S.isFirefox &&
                        1 == t.deltaMode &&
                        ((i.deltaX *= e.firefoxMultiplier),
                            (i.deltaY *= e.firefoxMultiplier)),
                        (i.deltaX *= e.mouseMultiplier),
                        (i.deltaY *= e.mouseMultiplier),
                        this._notify(t);
                }
            }),
            (B.prototype._onMouseWheel = function(t) {
                if (!this.options.limitInertia || !1 !== this._lethargy.check(t)) {
                    var e = this._event;
                    (e.deltaX = t.wheelDeltaX ? t.wheelDeltaX : 0),
                    (e.deltaY = t.wheelDeltaY ? t.wheelDeltaY : t.wheelDelta),
                    this._notify(t);
                }
            }),
            (B.prototype._onTouchStart = function(t) {
                var e = t.targetTouches ? t.targetTouches[0] : t;
                (this.touchStartX = e.pageX), (this.touchStartY = e.pageY);
            }),
            (B.prototype._onTouchMove = function(t) {
                var e = this.options;
                e.preventTouch &&
                    !t.target.classList.contains(e.unpreventTouchClass) &&
                    t.preventDefault();
                var i = this._event,
                    s = t.targetTouches ? t.targetTouches[0] : t;
                (i.deltaX = (s.pageX - this.touchStartX) * e.touchMultiplier),
                (i.deltaY = (s.pageY - this.touchStartY) * e.touchMultiplier),
                (this.touchStartX = s.pageX),
                (this.touchStartY = s.pageY),
                this._notify(t);
            }),
            (B.prototype._onKeyDown = function(t) {
                var e = this._event;
                e.deltaX = e.deltaY = 0;
                var i = window.innerHeight - 40;
                switch (t.keyCode) {
                    case M:
                    case C:
                        e.deltaY = this.options.keyStep;
                        break;
                    case H:
                    case x:
                        e.deltaY = -this.options.keyStep;
                        break;
                    case t.shiftKey:
                        e.deltaY = i;
                        break;
                    case j:
                        e.deltaY = -i;
                        break;
                    default:
                        return;
                }
                this._notify(t);
            }),
            (B.prototype._bind = function() {
                S.hasWheelEvent &&
                    this.el.addEventListener("wheel", this._onWheel, this.listenerOptions),
                    S.hasMouseWheelEvent &&
                    this.el.addEventListener(
                        "mousewheel",
                        this._onMouseWheel,
                        this.listenerOptions
                    ),
                    S.hasTouch &&
                    this.options.useTouch &&
                    (this.el.addEventListener(
                            "touchstart",
                            this._onTouchStart,
                            this.listenerOptions
                        ),
                        this.el.addEventListener(
                            "touchmove",
                            this._onTouchMove,
                            this.listenerOptions
                        )),
                    S.hasPointer &&
                    S.hasTouchWin &&
                    ((this.bodyTouchAction = document.body.style.msTouchAction),
                        (document.body.style.msTouchAction = "none"),
                        this.el.addEventListener("MSPointerDown", this._onTouchStart, !0),
                        this.el.addEventListener("MSPointerMove", this._onTouchMove, !0)),
                    S.hasKeyDown &&
                    this.options.useKeyboard &&
                    document.addEventListener("keydown", this._onKeyDown);
            }),
            (B.prototype._unbind = function() {
                S.hasWheelEvent && this.el.removeEventListener("wheel", this._onWheel),
                    S.hasMouseWheelEvent &&
                    this.el.removeEventListener("mousewheel", this._onMouseWheel),
                    S.hasTouch &&
                    (this.el.removeEventListener("touchstart", this._onTouchStart),
                        this.el.removeEventListener("touchmove", this._onTouchMove)),
                    S.hasPointer &&
                    S.hasTouchWin &&
                    ((document.body.style.msTouchAction = this.bodyTouchAction),
                        this.el.removeEventListener("MSPointerDown", this._onTouchStart, !0),
                        this.el.removeEventListener("MSPointerMove", this._onTouchMove, !0)),
                    S.hasKeyDown &&
                    this.options.useKeyboard &&
                    document.removeEventListener("keydown", this._onKeyDown);
            }),
            (B.prototype.on = function(t, e) {
                this._emitter.on(_, t, e);
                var i = this._emitter.e;
                i && i[_] && 1 === i[_].length && this._bind();
            }),
            (B.prototype.off = function(t, e) {
                this._emitter.off(_, t, e);
                var i = this._emitter.e;
                (!i[_] || i[_].length <= 0) && this._unbind();
            }),
            (B.prototype.reset = function() {
                var t = this._event;
                (t.x = 0), (t.y = 0);
            }),
            (B.prototype.destroy = function() {
                this._emitter.off(), this._unbind();
            });
            var R = 38,
                A = 40,
                V = 32,
                X = 9,
                W = 33,
                K = 34,
                I = 36,
                q = 35,
                F = (function(t) {
                    function n() {
                        var t,
                            e =
                            0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : {};
                        return (
                            s(this, n),
                            ((t = c(this, o(n).call(this, e))).inertia = 0.1 * t.inertia),
                            (t.isScrolling = !1),
                            (t.isDraggingScrollbar = !1),
                            (t.isTicking = !1),
                            (t.hasScrollTicking = !1),
                            (t.parallaxElements = []),
                            (t.inertiaRatio = 1),
                            (t.stop = !1),
                            (t.checkKey = t.checkKey.bind(r(t))),
                            window.addEventListener("keydown", t.checkKey, !1),
                            t
                        );
                    }
                    return (
                        e(n, d),
                        l(n, [{
                                key: "init",
                                value: function() {
                                    var e = this;
                                    this.html.classList.add(this.smoothClass),
                                        (this.instance = (function(n) {
                                            for (var t = 1; t < arguments.length; t++) {
                                                var l = null != arguments[t] ? arguments[t] : {};
                                                t % 2 ?
                                                    i(l, !0).forEach(function(t) {
                                                        var e, i, s;
                                                        (e = n),
                                                        (s = l[(i = t)]),
                                                        i in e ?
                                                            Object.defineProperty(e, i, {
                                                                value: s,
                                                                enumerable: !0,
                                                                configurable: !0,
                                                                writable: !0
                                                            }) :
                                                            (e[i] = s);
                                                    }) :
                                                    Object.getOwnPropertyDescriptors ?
                                                    Object.defineProperties(
                                                        n,
                                                        Object.getOwnPropertyDescriptors(l)
                                                    ) :
                                                    i(l).forEach(function(t) {
                                                        Object.defineProperty(
                                                            n,
                                                            t,
                                                            Object.getOwnPropertyDescriptor(l, t)
                                                        );
                                                    });
                                            }
                                            return n;
                                        })({
                                            delta: {
                                                x: 0,
                                                y: 0
                                            }
                                        }, this.instance)),
                                        (this.vs = new L({
                                            el: this.el,
                                            mouseMultiplier:
                                                -1 < navigator.platform.indexOf("Win") ? 1 : 0.4,
                                            firefoxMultiplier: this.firefoxMultiplier,
                                            touchMultiplier: this.touchMultiplier,
                                            useKeyboard: !1,
                                            passive: !0
                                        })),
                                        this.vs.on(function(t) {
                                            e.stop ||
                                                (e.isTicking ||
                                                    e.isDraggingScrollbar ||
                                                    (requestAnimationFrame(function() {
                                                            e.isScrolling || e.startScrolling(), e.updateDelta(t);
                                                        }),
                                                        (e.isTicking = !0)),
                                                    (e.isTicking = !1));
                                        }),
                                        this.setScrollLimit(),
                                        this.initScrollBar(),
                                        this.addSections(),
                                        this.addElements(),
                                        this.detectElements(),
                                        this.transformElements(!0),
                                        h(o(n.prototype), "init", this).call(this);
                                }
                            },
                            {
                                key: "setScrollLimit",
                                value: function() {
                                    this.instance.limit = this.el.offsetHeight - this.windowHeight;
                                }
                            },
                            {
                                key: "startScrolling",
                                value: function() {
                                    (this.isScrolling = !0),
                                    this.checkScroll(),
                                        this.html.classList.add(this.scrollingClass);
                                }
                            },
                            {
                                key: "stopScrolling",
                                value: function() {
                                    (this.isScrolling = !1),
                                    (this.inertiaRatio = 1),
                                    (this.instance.scroll.y = Math.round(this.instance.scroll.y)),
                                    this.html.classList.remove(this.scrollingClass);
                                }
                            },
                            {
                                key: "checkKey",
                                value: function(t) {
                                    var e = this;
                                    switch (t.keyCode) {
                                        case X:
                                            setTimeout(function() {
                                                (document.documentElement.scrollTop = 0),
                                                (document.body.scrollTop = 0),
                                                document.activeElement instanceof HTMLBodyElement ||
                                                    e.scrollTo(
                                                        document.activeElement,
                                                        -window.innerHeight / 2
                                                    );
                                            }, 0);
                                            break;
                                        case R:
                                            this.instance.delta.y -= 240;
                                            break;
                                        case A:
                                            this.instance.delta.y += 240;
                                            break;
                                        case W:
                                            this.instance.delta.y -= window.innerHeight;
                                            break;
                                        case K:
                                            this.instance.delta.y += window.innerHeight;
                                            break;
                                        case I:
                                            this.instance.delta.y -= this.instance.limit;
                                            break;
                                        case q:
                                            this.instance.delta.y += this.instance.limit;
                                            break;
                                        case V:
                                            document.activeElement instanceof HTMLInputElement ||
                                                document.activeElement instanceof HTMLTextAreaElement ||
                                                (t.shiftKey ?
                                                    (this.instance.delta.y -= window.innerHeight) :
                                                    (this.instance.delta.y += window.innerHeight));
                                            break;
                                        default:
                                            return;
                                    }
                                    this.instance.delta.y < 0 && (this.instance.delta.y = 0),
                                        this.instance.delta.y > this.instance.limit &&
                                        (this.instance.delta.y = this.instance.limit),
                                        (this.isScrolling = !0),
                                        this.checkScroll(),
                                        this.html.classList.add(this.scrollingClass);
                                }
                            },
                            {
                                key: "checkScroll",
                                value: function() {
                                    var t = this;
                                    if (this.isScrolling || this.isDraggingScrollbar) {
                                        this.hasScrollTicking ||
                                            (requestAnimationFrame(function() {
                                                    return t.checkScroll();
                                                }),
                                                (this.hasScrollTicking = !0));
                                        var e = Math.abs(
                                            this.instance.delta.y - this.instance.scroll.y
                                        );
                                        ((e < 0.5 && 0 != this.instance.delta.y) ||
                                            (e < 0.5 && 0 == this.instance.delta.y)) &&
                                        this.stopScrolling(),
                                            this.updateScroll();
                                        for (var i = this.sections.length - 1; 0 <= i; i--)
                                            this.sections[i].persistent ||
                                            (this.instance.scroll.y > this.sections[i].offset &&
                                                this.instance.scroll.y < this.sections[i].limit) ?
                                            (this.transform(
                                                    this.sections[i].el,
                                                    0,
                                                    -this.instance.scroll.y
                                                ),
                                                (this.sections[i].el.style.visibility = "visible"),
                                                (this.sections[i].inView = !0)) :
                                            ((this.sections[i].el.style.visibility = "hidden"),
                                                (this.sections[i].inView = !1),
                                                this.transform(this.sections[i].el, 0, 0));
                                        this.getDirection && this.addDirection(),
                                            this.getSpeed &&
                                            (this.addSpeed(), (this.timestamp = Date.now())),
                                            this.detectElements(),
                                            this.transformElements();
                                        var s =
                                            (this.instance.scroll.y / this.instance.limit) *
                                            this.scrollBarLimit;
                                        this.transform(this.scrollbarThumb, 0, s),
                                            h(o(n.prototype), "checkScroll", this).call(this),
                                            (this.hasScrollTicking = !1);
                                    }
                                }
                            },
                            {
                                key: "checkResize",
                                value: function() {
                                    (this.windowHeight = window.innerHeight),
                                    (this.windowMiddle = this.windowHeight / 2),
                                    this.update();
                                }
                            },
                            {
                                key: "updateDelta",
                                value: function(t) {
                                    (this.instance.delta.y -= t.deltaY),
                                    this.instance.delta.y < 0 && (this.instance.delta.y = 0),
                                        this.instance.delta.y > this.instance.limit &&
                                        (this.instance.delta.y = this.instance.limit);
                                }
                            },
                            {
                                key: "updateScroll",
                                value: function(t) {
                                    this.isScrolling || this.isDraggingScrollbar ?
                                        (this.instance.scroll.y = P(
                                            this.instance.scroll.y,
                                            this.instance.delta.y,
                                            this.inertia * this.inertiaRatio
                                        )) :
                                        (this.instance.scroll.y = this.instance.delta.y);
                                }
                            },
                            {
                                key: "addDirection",
                                value: function() {
                                    this.instance.delta.y > this.instance.scroll.y ?
                                        "down" !== this.instance.direction &&
                                        (this.instance.direction = "down") :
                                        this.instance.delta.y < this.instance.scroll.y &&
                                        "up" !== this.instance.direction &&
                                        (this.instance.direction = "up");
                                }
                            },
                            {
                                key: "addSpeed",
                                value: function() {
                                    this.instance.delta.y != this.instance.scroll.y ?
                                        (this.instance.speed =
                                            (this.instance.delta.y - this.instance.scroll.y) /
                                            (Date.now() - this.timestamp)) :
                                        (this.instance.speed = 0);
                                }
                            },
                            {
                                key: "initScrollBar",
                                value: function() {
                                    (this.scrollbar = document.createElement("span")),
                                    (this.scrollbarThumb = document.createElement("span")),
                                    this.scrollbar.classList.add("".concat(this.scrollbarClass)),
                                        this.scrollbarThumb.classList.add(
                                            "".concat(this.scrollbarClass, "_thumb")
                                        ),
                                        this.scrollbar.append(this.scrollbarThumb),
                                        document.body.append(this.scrollbar),
                                        (this.scrollbarHeight = this.scrollbar.getBoundingClientRect().height),
                                        (this.scrollbarThumb.style.height = "".concat(
                                            (this.scrollbarHeight * this.scrollbarHeight) /
                                            (this.instance.limit + this.scrollbarHeight),
                                            "px"
                                        )),
                                        (this.scrollBarLimit =
                                            this.scrollbarHeight -
                                            this.scrollbarThumb.getBoundingClientRect().height),
                                        (this.getScrollBar = this.getScrollBar.bind(this)),
                                        (this.releaseScrollBar = this.releaseScrollBar.bind(this)),
                                        (this.moveScrollBar = this.moveScrollBar.bind(this)),
                                        this.scrollbarThumb.addEventListener(
                                            "mousedown",
                                            this.getScrollBar
                                        ),
                                        window.addEventListener("mouseup", this.releaseScrollBar),
                                        window.addEventListener("mousemove", this.moveScrollBar);
                                }
                            },
                            {
                                key: "reinitScrollBar",
                                value: function() {
                                    (this.scrollbarHeight = this.scrollbar.getBoundingClientRect().height),
                                    (this.scrollbarThumb.style.height = "".concat(
                                        (this.scrollbarHeight * this.scrollbarHeight) /
                                        this.instance.limit,
                                        "px"
                                    )),
                                    (this.scrollBarLimit =
                                        this.scrollbarHeight -
                                        this.scrollbarThumb.getBoundingClientRect().height);
                                }
                            },
                            {
                                key: "destroyScrollBar",
                                value: function() {
                                    this.scrollbarThumb.removeEventListener(
                                            "mousedown",
                                            this.getScrollBar
                                        ),
                                        window.removeEventListener("mouseup", this.releaseScrollBar),
                                        window.removeEventListener("mousemove", this.moveScrollBar),
                                        this.scrollbar.remove();
                                }
                            },
                            {
                                key: "getScrollBar",
                                value: function(t) {
                                    (this.isDraggingScrollbar = !0),
                                    this.checkScroll(),
                                        this.html.classList.remove(this.scrollingClass),
                                        this.html.classList.add(this.draggingClass);
                                }
                            },
                            {
                                key: "releaseScrollBar",
                                value: function(t) {
                                    (this.isDraggingScrollbar = !1),
                                    this.html.classList.add(this.scrollingClass),
                                        this.html.classList.remove(this.draggingClass);
                                }
                            },
                            {
                                key: "moveScrollBar",
                                value: function(e) {
                                    var i = this;
                                    !this.isTicking &&
                                        this.isDraggingScrollbar &&
                                        (requestAnimationFrame(function() {
                                                var t =
                                                    (((100 * e.clientY) / i.scrollbarHeight) *
                                                        i.instance.limit) /
                                                    100;
                                                0 < t && t < i.instance.limit && (i.instance.delta.y = t);
                                            }),
                                            (this.isTicking = !0)),
                                        (this.isTicking = !1);
                                }
                            },
                            {
                                key: "addElements",
                                value: function() {
                                    var b = this;
                                    (this.els = []),
                                    (this.parallaxElements = []),
                                    this.sections.forEach(function(t, w) {
                                        b.sections[w].el
                                            .querySelectorAll("[data-".concat(b.name, "]"))
                                            .forEach(function(t, e) {
                                                var i,
                                                    s,
                                                    n = t.dataset[b.name + "Class"] || b.class,
                                                    l = t.dataset[b.name + "Repeat"],
                                                    o = t.dataset[b.name + "Call"],
                                                    a = t.dataset[b.name + "Position"],
                                                    r = t.dataset[b.name + "Delay"],
                                                    c = t.dataset[b.name + "Direction"],
                                                    h = "string" == typeof t.dataset[b.name + "Sticky"],
                                                    u = !!t.dataset[b.name + "Speed"] &&
                                                    parseFloat(t.dataset[b.name + "Speed"]) / 10,
                                                    d =
                                                    "string" == typeof t.dataset[b.name + "Offset"] &&
                                                    t.dataset[b.name + "Offset"].split(","),
                                                    f = t.dataset[b.name + "Target"];
                                                s =
                                                    void 0 !== f ? document.querySelector("".concat(f)) : t;
                                                var p =
                                                    (i = b.sections[w].inView ?
                                                        s.getBoundingClientRect().top +
                                                        b.instance.scroll.y -
                                                        Y(s).y :
                                                        s.getBoundingClientRect().top -
                                                        Y(b.sections[w].el).y -
                                                        Y(s).y) + s.offsetHeight,
                                                    y = (p - i) / 2 + i;
                                                if (h) {
                                                    var m = t.getBoundingClientRect().top - i;
                                                    y =
                                                        ((p =
                                                                (i += window.innerHeight) +
                                                                s.offsetHeight -
                                                                window.innerHeight -
                                                                t.offsetHeight -
                                                                m) -
                                                            i) /
                                                        2 +
                                                        i;
                                                }
                                                l = "false" != l && (null != l || b.repeat);
                                                var v = [0, 0];
                                                if (d)
                                                    for (e = 0; e < d.length; e++)
                                                        d[e].includes("%") ?
                                                        (v[e] = parseInt(
                                                            (d[e].replace("%", "") * b.windowHeight) / 100
                                                        )) :
                                                        (v[e] = parseInt(d[e]));
                                                var g = {
                                                    el: t,
                                                    id: e,
                                                    class: n,
                                                    top: i + v[0],
                                                    middle: y,
                                                    bottom: p - v[1],
                                                    offset: d,
                                                    repeat: l,
                                                    inView: !1,
                                                    call: o,
                                                    speed: u,
                                                    delay: r,
                                                    position: a,
                                                    target: s,
                                                    direction: c,
                                                    sticky: h
                                                };
                                                b.els.push(g),
                                                    (!1 !== u || h) && b.parallaxElements.push(g);
                                            });
                                    });
                                }
                            },
                            {
                                key: "addSections",
                                value: function() {
                                    var a = this;
                                    this.sections = [];
                                    var t = this.el.querySelectorAll(
                                        "[data-".concat(this.name, "-section]")
                                    );
                                    0 === t.length && (t = [this.el]),
                                        t.forEach(function(t, e) {
                                            var i =
                                                t.getBoundingClientRect().top -
                                                1.5 * window.innerHeight -
                                                Y(t).y,
                                                s =
                                                i +
                                                t.getBoundingClientRect().height +
                                                2 * window.innerHeight,
                                                n = "string" == typeof t.dataset[a.name + "Persistent"],
                                                l = !1;
                                            a.instance.scroll.y >= i &&
                                                a.instance.scroll.y <= s &&
                                                (l = !0);
                                            var o = {
                                                el: t,
                                                offset: i,
                                                limit: s,
                                                inView: l,
                                                persistent: n
                                            };
                                            a.sections[e] = o;
                                        });
                                }
                            },
                            {
                                key: "transform",
                                value: function(t, e, i, s) {
                                    var n;
                                    if (s) {
                                        var l = Y(t),
                                            o = P(l.x, e, s),
                                            a = P(l.y, i, s);
                                        n = "matrix3d(1,0,0.00,0,0.00,1,0.00,0,0,0,1,0,"
                                            .concat(o, ",")
                                            .concat(a, ",0,1)");
                                    } else
                                        n = "matrix3d(1,0,0.00,0,0.00,1,0.00,0,0,0,1,0,"
                                        .concat(e, ",")
                                        .concat(i, ",0,1)");
                                    (t.style.webkitTransform = n),
                                    (t.style.msTransform = n),
                                    (t.style.transform = n);
                                }
                            },
                            {
                                key: "transformElements",
                                value: function(s) {
                                    var n = this,
                                        l = this.instance.scroll.y + this.windowHeight,
                                        o = this.instance.scroll.y + this.windowMiddle;
                                    this.parallaxElements.forEach(function(t, e) {
                                        var i = !1;
                                        if ((s && (i = 0), t.inView))
                                            switch (t.position) {
                                                case "top":
                                                    i = n.instance.scroll.y * -t.speed;
                                                    break;
                                                case "elementTop":
                                                    i = (l - t.top) * -t.speed;
                                                    break;
                                                case "bottom":
                                                    i = (n.instance.limit - l + n.windowHeight) * t.speed;
                                                    break;
                                                default:
                                                    i = (o - t.middle) * -t.speed;
                                            }
                                        t.sticky &&
                                            (i = t.inView ?
                                                n.instance.scroll.y - t.top + window.innerHeight :
                                                n.instance.scroll.y < t.top - window.innerHeight &&
                                                n.instance.scroll.y < t.top - window.innerHeight / 2 ?
                                                0 :
                                                n.instance.scroll.y > t.bottom &&
                                                n.instance.scroll.y > t.bottom + 100 &&
                                                t.bottom - t.top + window.innerHeight),
                                            !1 !== i &&
                                            ("horizontal" === t.direction ?
                                                n.transform(t.el, i, 0, !s && t.delay) :
                                                n.transform(t.el, 0, i, !s && t.delay));
                                    });
                                }
                            },
                            {
                                key: "scrollTo",
                                value: function(t, e) {
                                    var i,
                                        s = this,
                                        n = e ? parseInt(e) : 0;
                                    if (
                                        ("string" == typeof t ?
                                            "top" === t ?
                                            (n = 0) :
                                            "bottom" === t ?
                                            (n = this.instance.limit) :
                                            (i = document.querySelectorAll(t)[0]) :
                                            t.target || (i = t),
                                            i)
                                    ) {
                                        var l = i.getBoundingClientRect().top + this.instance.scroll.y,
                                            o = (function(t) {
                                                for (var e = []; t && t !== document; t = t.parentNode)
                                                    e.push(t);
                                                return e;
                                            })(i).find(function(e) {
                                                return s.sections.find(function(t) {
                                                    return t.el == e;
                                                });
                                            }),
                                            a = 0;
                                        o && (a = Y(o).y), (n = l + n - a);
                                    }
                                    (n -= this.instance.scroll.y),
                                    (this.instance.delta.y = Math.min(n, this.instance.limit)),
                                    (this.inertiaRatio = Math.min(
                                        4e3 /
                                        Math.abs(this.instance.delta.y - this.instance.scroll.y),
                                        0.8
                                    )),
                                    (this.isScrolling = !0),
                                    this.checkScroll(),
                                        this.html.classList.add(this.scrollingClass);
                                }
                            },
                            {
                                key: "update",
                                value: function() {
                                    this.setScrollLimit(),
                                        this.addSections(),
                                        this.addElements(),
                                        this.detectElements(),
                                        this.updateScroll(),
                                        this.transformElements(!0),
                                        this.reinitScrollBar();
                                }
                            },
                            {
                                key: "startScroll",
                                value: function() {
                                    this.stop = !1;
                                }
                            },
                            {
                                key: "stopScroll",
                                value: function() {
                                    this.stop = !0;
                                }
                            },
                            {
                                key: "setScroll",
                                value: function(t, e) {
                                    this.instance = {
                                        scroll: {
                                            x: t,
                                            y: e
                                        },
                                        delta: {
                                            x: t,
                                            y: e
                                        }
                                    };
                                }
                            },
                            {
                                key: "destroy",
                                value: function() {
                                    h(o(n.prototype), "destroy", this).call(this),
                                        this.stopScrolling(),
                                        this.html.classList.remove(this.smoothClass),
                                        this.vs.destroy(),
                                        this.destroyScrollBar(),
                                        window.removeEventListener("keydown", this.checkKey, !1);
                                }
                            }
                        ]),
                        n
                    );
                })(),
                z = (function() {
                    function e() {
                        var t =
                            0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : {};
                        s(this, e), (this.options = t), Object.assign(this, u, t), this.init();
                    }
                    return (
                        l(e, [{
                                key: "init",
                                value: function() {
                                    this.smoothMobile ||
                                        (this.isMobile =
                                            /Android|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
                                                navigator.userAgent
                                            ) ||
                                            ("MacIntel" === navigator.platform &&
                                                1 < navigator.maxTouchPoints)),
                                        !0 !== this.smooth || this.isMobile ?
                                        (this.scroll = new t(this.options)) :
                                        (this.scroll = new F(this.options)),
                                        this.scroll.init(),
                                        window.location.hash &&
                                        this.scroll.scrollTo(window.location.hash);
                                }
                            },
                            {
                                key: "update",
                                value: function() {
                                    this.scroll.update();
                                }
                            },
                            {
                                key: "start",
                                value: function() {
                                    this.scroll.startScroll();
                                }
                            },
                            {
                                key: "stop",
                                value: function() {
                                    this.scroll.stopScroll();
                                }
                            },
                            {
                                key: "scrollTo",
                                value: function(t, e) {
                                    this.scroll.scrollTo(t, e);
                                }
                            },
                            {
                                key: "setScroll",
                                value: function(t, e) {
                                    this.scroll.setScroll(t, e);
                                }
                            },
                            {
                                key: "on",
                                value: function(t, e) {
                                    this.scroll.setEvents(t, e);
                                }
                            },
                            {
                                key: "off",
                                value: function(t, e) {
                                    this.scroll.unsetEvents(t, e);
                                }
                            },
                            {
                                key: "destroy",
                                value: function() {
                                    this.scroll.destroy();
                                }
                            }
                        ]),
                        e
                    );
                })();
            document.documentElement.classList.add("is-loaded"),
                document.documentElement.classList.remove("is-loading"),
                setTimeout(function() {
                    document.documentElement.classList.add("is-ready");
                }, 300),
                setTimeout(function() {
                    var i = new z({
                            el: document.querySelector("#js-scroll"),
                            smooth: !0,
                            getSpeed: !0,
                            getDirection: !0,
                            useKeyboard: !0
                        }),
                        n = [],
                        l = []; 
                    i.on("call", function(t, e, i) {
                        if ("slider" === t){
                            $('.customer-logos-left').slick({
                                slidesToShow: 6,
                                slidesToScroll: 1,
                                autoplay: true,
                                autoplaySpeed: 1500,
                                arrows: false,
                                dots: false,
                                pauseOnHover: false,
                                responsive: [{
                                    breakpoint: 768,
                                    settings: {
                                        slidesToShow: 4
                                    }
                                }, {
                                    breakpoint: 520,
                                    settings: {
                                        slidesToShow: 3
                                    }
                                }]
                            });
                        }
                             
                    });
                }, 1e3);
        })();
    </script> 


    <!-- cursor -->


    <script>
        const magnet = document.querySelector('.magnet');
        const cursor = document.querySelector('.magnet-cursor');
        const circle = document.querySelector('.magnet-circle');
        let [startX, startY, endX, endY] = [0, 0, 0, 0];
        let time = 0.1;
        let raf;

        const lerp = (start, end, t) => start * (1 - t) + end * t;

        function updateCircle() {
            startX = lerp(startX, endX, time);
            startY = lerp(startY, endY, time);
            circle.style.transform = `translate(${startX}px,${startY}px)`;
            raf = requestAnimationFrame(updateCircle);
            startX.toFixed(1) === endX.toFixed(1) && cancelAnimationFrame(raf);
        }

        function trackCircle(e) {
            endX = e.clientX - (circle.clientWidth / 2);
            endY = e.clientY - (circle.clientHeight / 2);
            cancelAnimationFrame(raf);
            raf = requestAnimationFrame(updateCircle);
        }

        function trackCursor(e) {
            cursor.style.setProperty('--x', `${e.clientX - cursor.clientWidth/2}px`);
            cursor.style.setProperty('--y', `${e.clientY - cursor.clientHeight/2}px`);
            magnet.classList.remove('reset');
        }

        function init(e) {
            trackCursor(e);
            trackCircle(e);
            return e.target.matches('.magnet-link') && magnet.classList.add('reset');
        }

        window.addEventListener('pointermove', init, false);
        window.addEventListener('load', updateCircle, false);
    </script>


</body>

</html>