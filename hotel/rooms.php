<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms & Suites | Rendezvouz Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <?php require('main/links.php'); ?>
</head>

<body class="custom-bg-5">
    <?php require('main/header.php'); ?>

    <!-- navigator start -->
    <div class="custom-margin py-2 text-left">
        <ul class="navbar-nav d-flex list-group list-group-horizontal-sm">
            <li class="nav-item"><a href="index.php" class="nav-link s-font fw-medium text-color2 md-text">Hotel ></a>
            </li>
            <li class="nav-item"><a href="#" class="nav-link s-font fw-medium md-text">&nbsp;Rooms & Suites</a></li>
        </ul>
    </div>
    <!-- navigator end -->

    <!-- swiper start -->
    <div class="container-fluid px-0">
        <!-- <h1 class="h-font carousel-text text-color">Rendezvouz Surabaya</h1>
        <h6 class="text-color carousel-text mt-5">Book indirect and waste more</h6> -->
        <style>
            .swiper-container-1 {
                margin-left: 200px;
                margin-right: 200px;
            }

            .swiper-slide img {
                max-width: 100%;
                height: auto;
            }
        </style>
        <div class="swiper swiper-container-1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="\hotel\images\roompage\deluxroomdanteks.svg" class="w-100 d-block img-fluid">
                </div>
                <div class="swiper-slide">
                    <img src="\hotel\images\roompage\executiveroomdanteks.svg" class="w-100 d-block img-fluid">
                </div>
                <div class="swiper-slide">
                    <img src="\hotel\images\roompage\executivesuitedanteks.svg" class="w-100 d-block img-fluid">
                </div>
                <div class="swiper-slide">
                    <img src="\hotel\images\roompage\connectroomdanteks.svg" class="w-100 d-block img-fluid">
                </div>
            </div>
            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- swiper end -->
    
    <!-- title start -->
    <div class="custom-margin margintop-20">
        <img src="\hotel\images\roompage\rendezvouskotakcoklat.svg" class="d-block img-fluid">
        <h2 class="mt-2 h-font">Rooms & Suites</h2>
        <h6 class="md-text">Rendezvous Surabaya, features 380 tastefully decorated guest rooms and suites in warm tones,
            showcasing
            modern elegance and Javanese- styled luxury with intricately carved local wooden frames adorning the walls.
            Many of the rooms enjoy spectacular views of the city. </h6>
        <div class="margintop-20">
            <ul class="navbar-nav d-flex list-group list-group-horizontal-sm">
                <li class="nav-item marginr-20"><a href="#"
                        class="nav-link s-font fw-medium text-colorgrey md-text border border-secondary py-2 px-4">All</a>
                </li>
                <li class="nav-item marginr-20"><a href="#"
                        class="nav-link s-font fw-medium text-colorgrey md-text border border-secondary py-2 px-4">Rooms</a>
                </li>
                <li class="nav-item marginr-20"><a href="#"
                        class="nav-link s-font fw-medium text-colorgrey md-text border border-secondary py-2 px-4">Suites</a>
                </li>
                <li class="nav-item marginr-20"><a href="#"
                        class="nav-link s-font fw-medium text-colorgrey md-text border border-secondary py-2 px-4">Connecting
                        Room</a></li>
            </ul>
        </div>
    </div>
    <!-- title end -->

    <!-- list room start -->
    <div class="custom-margin my-2 pb-5 row row-cols-3 row-cols-lg-3 g-2 g-lg-5">
        <div class="col mb-2">
            <div class="border border-2" style="max-width: fit-content; height: 21rem">
                <img src="\hotel\images\roompage\deluxroomlist.svg" class="d-block img-fluid">
                <div class="mx-4 my-4">
                    <h6 class="s-font fw-medium">Deluxe Room</h6>
                    <ul class="text-colorgrey">
                        <li class="sm-text">• 35 sqm / 376 sqf of luxury.</li>
                        <li class="sm-text">• Panoramic city views.</li>
                    </ul>
                </div>
                <div class="mx-auto custom-bg-1" style="width: 100px">
                    <h6 class="py-3 px-1 text-center sm-text fw-bolder"><a class="text-colorfaf3e0" href="#" style="text-decoration: none">View Details</a></h6>
                </div>
            </div>
        </div>

        <div class="col mb-2">
            <div class="border border-2" style="max-width: fit-content; height: 21rem">
                <img src="\hotel\images\roompage\executiveroomlist.svg" class="d-block img-fluid">
                <div class="mx-4 my-4">
                    <h6 class="s-font fw-medium">Executive Room</h6>
                    <ul class="text-colorgrey">
                        <li class="sm-text">• 49 sqm / 528 sqf of luxury.</li>
                        <li class="sm-text">• Panoramic city views.</li>
                    </ul>
                </div>
                <div class="mx-auto custom-bg-1" style="width: 100px">
                    <h6 class="py-3 px-1 text-center sm-text fw-bolder"><a class="text-colorfaf3e0" href="#" style="text-decoration: none">View Details</a></h6>
                </div>
            </div>
        </div>

        <div class="col mb-2">
            <div class="border border-2" style="max-width: fit-content; height: 21rem">
                <img src="\hotel\images\roompage\deluxroomlist.svg" class="d-block img-fluid">
                <div class="mx-4 my-4">
                    <h6 class="s-font fw-medium">Horizon Club Deluxe Room</h6>
                    <ul class="text-colorgrey">
                        <li class="sm-text">• 35 sqm / 376 sqf of luxury.</li>
                        <li class="sm-text">• Panoramic city views.</li>
                    </ul>
                </div>
                <div class="mx-auto custom-bg-1" style="width: 100px">
                    <h6 class="py-3 px-1 text-center sm-text fw-bolder"><a class="text-colorfaf3e0" href="#" style="text-decoration: none">View Details</a></h6>
                </div>
            </div>
        </div>

        <div class="col mb-2">
            <div class="border border-2" style="max-width: fit-content; height: 21rem">
                <img src="\hotel\images\roompage\executiveroomlist.svg" class="d-block img-fluid">
                <div class="mx-4 my-4">
                    <h6 class="s-font fw-medium">Horizon Club Executive Room</h6>
                    <ul class="text-colorgrey">
                        <li class="sm-text">• 49 sqm / 527 sqf of luxury.</li>
                        <li class="sm-text">• Panoramic city views.</li>
                    </ul>
                </div>
                <div class="mx-auto custom-bg-1" style="width: 100px">
                    <h6 class="py-3 px-1 text-center sm-text fw-bolder"><a class="text-colorfaf3e0" href="#" style="text-decoration: none">View Details</a></h6>
                </div>
            </div>
        </div>

        <div class="col mb-2">
            <div class="border border-2" style="max-width: fit-content; height: 21rem">
                <img src="\hotel\images\roompage\executivesuitelist.svg" class="d-block img-fluid">
                <div class="mx-4 my-4">
                    <h6 class="s-font fw-medium">Executive Suite</h6>
                    <ul class="text-colorgrey">
                        <li class="sm-text">• 84 sqm / 904 sqf of luxury.</li>
                        <li class="sm-text">• Expansive views of Surabaya.</li>
                    </ul>
                </div>
                <div class="mx-auto custom-bg-1" style="width: 100px">
                    <h6 class="py-3 px-1 text-center sm-text fw-bolder"><a class="text-colorfaf3e0" href="#" style="text-decoration: none">View Details</a></h6>
                </div>
            </div>
        </div>

        <div class="col mb-2">
            <div class="border border-2" style="max-width: fit-content; height: 21rem">
                <img src="\hotel\images\roompage\executivesuitelist.svg" class="d-block img-fluid">
                <div class="mx-4 my-4">
                    <h6 class="s-font fw-medium">Residence Suite</h6>
                    <ul class="text-colorgrey">
                        <li class="sm-text">• 119 sqm / 376 sqf of luxury.</li>
                        <li class="sm-text">• Panoramic city views.</li>
                    </ul>
                </div>
                <div class="mx-auto custom-bg-1" style="width: 100px">
                    <h6 class="py-3 px-1 text-center sm-text fw-bolder"><a class="text-colorfaf3e0" href="#" style="text-decoration: none">View Details</a></h6>
                </div>
            </div>
        </div>

        <div class="col mb-2">
            <div class="border border-2" style="max-width: fit-content; height: 21rem">
                <img src="\hotel\images\roompage\executivesuitelist.svg" class="d-block img-fluid">
                <div class="mx-4 my-4">
                    <h6 class="s-font fw-medium">Bali Suite</h6>
                    <ul class="text-colorgrey">
                        <li class="sm-text">• 187 sqm / 2,012 sqf of luxury.</li>
                        <li class="sm-text">• 180-degree views of Surabaya.</li>
                    </ul>
                </div>
                <div class="mx-auto custom-bg-1" style="width: 100px">
                    <h6 class="py-3 px-1 text-center sm-text fw-bolder"><a class="text-colorfaf3e0" href="#" style="text-decoration: none">View Details</a></h6>
                </div>
            </div>
        </div>

        <div class="col mb-2">
            <div class="border border-2" style="max-width: fit-content; height: 21rem">
                <img src="\hotel\images\roompage\executivesuitelist.svg" class="d-block img-fluid">
                <div class="mx-4 my-4">
                    <h6 class="s-font fw-medium">Presidential Suite</h6>
                    <ul class="text-colorgrey">
                        <li class="sm-text">• Each room offers 208 sqm of luxury.</li>
                        <li class="sm-text">• Panoramic city views.</li>
                    </ul>
                </div>
                <div class="mx-auto custom-bg-1" style="width: 100px">
                    <h6 class="py-3 px-1 text-center sm-text fw-bolder"><a class="text-colorfaf3e0" href="#" style="text-decoration: none">View Details</a></h6>
                </div>
            </div>
        </div>

        <div class="col mb-2">
            <div class="border border-2" style="max-width: fit-content; height: 21rem">
                <img src="\hotel\images\roompage\connectroomlist.svg" class="d-block img-fluid">
                <div class="mx-4 my-4">
                    <h6 class="s-font fw-medium">Two Deluxe Room Connecting</h6>
                    <ul class="text-colorgrey">
                        <li class="sm-text">• Each room offers 70 sqm of luxury.</li>
                        <li class="sm-text">• Panoramic city views.</li>
                    </ul>
                </div>
                <div class="mx-auto custom-bg-1" style="width: 100px">
                    <h6 class="py-3 px-1 text-center sm-text fw-bolder"><a class="text-colorfaf3e0" href="#" style="text-decoration: none">View Details</a></h6>
                </div>
            </div>
        </div>

    </div>
    <!-- list room end -->








    <?php require('main/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".swiper-container-1", {
            spaceBetween: 0,
            loop: true,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            // navigation: {
            //     nextEl: ".swiper-button-next",
            //     prevEl: ".swiper-button-prev",
            // },
        });

        var swiper = new Swiper(".swiper-container-2", {
            spaceBetween: 30,
            loop: true,
            centeredSlides: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            // navigation: {
            //     nextEl: ".swiper-button-next",
            //     prevEl: ".swiper-button-prev",
            // },
        });
    </script>

</body>

</html>