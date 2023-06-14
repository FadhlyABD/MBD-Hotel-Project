<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms & Suites | Rendezvous Hotel</title>
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
            <li class="nav-item"><a href="rooms.php" class="nav-link s-font fw-medium text-color2 md-text">&nbsp;Rooms &
                    Suites ></a></li>
            <li class="nav-item"><a href="#" class="nav-link s-font fw-medium md-text">&nbsp;Executive Room</a></li>
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
                    <img src="\hotel\images\roomdetail\executivedetail.svg" class="w-100 d-block img-fluid">
                </div>
                <div class="swiper-slide">
                    <img src="\hotel\images\roomdetail\executivedetail2.svg" class="w-100 d-block img-fluid">
                </div>
            </div>
            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- swiper end -->

    <!-- description start -->
    <div class="custom-margin margintop-20 mb-5">
        <div class="row">
            <div class="col" style="width: 34.75rem">
                <img src="\hotel\images\roompage\rendezvouskotakcoklat.svg" class="d-block img-fluid">
                <h2 class="mt-2 h-font">Executive Room</h2>
                <h6 class="mt-3 h-font fw-normal bigger-text">Modern elegance with exceptional city views.</h6>
                <h6 class="mt-3 md-text">Executive Rooms at Rendezvous Surabaya provide abundant space and crisp white
                    décor with Asian accents. Sweeping views of Surabaya city and nearby Darmo can be enjoyed from the
                    large picture windows.</h6>
                <h6 class="mt-3 md-text">Rendezvous Surabaya is a CHSE-certified hotel and has been awarded the
                    SafeGuard
                    Hygiene Excellence and Safety Label by Bureau Veritas. View our Covid-19 certifications, services,
                    and
                    updates here.</h6>
                <h6 class="mt-3 h-font fw-bold">Features</h6>
                <ul class="md-text p-0">
                    <li class="">• 49 sqm / 528 sqf of luxury.</li>
                    <li class="">• Panoramic city views.</li>
                    <li class="">• Spacious bathroom.</li>
                    <li class="">• Wi-Fi</li>
                </ul>
                <h6 class="mt-3 h-font fw-bold">Amenities</h6>
                <ul class="mt-3 md-text p-0">
                    <h6 class="md-text fw-bold p-0">Bath & Personal Care</h6>
                    <li class="">• Pillow Menu</li>
                    <li class="">• Spacious Bathroom with tub</li>
                </ul>
                <ul class="mt-3 md-text p-0">
                    <h6 class="md-text fw-bold p-0">Media & Entertainment</h6>
                    <li class="">• Wi-Fi access</li>
                    <li class="">• LED TV</li>
                    <li class="">• Universal electric plug</li>
                </ul>
                <ul class="mt-3 md-text p-0">
                    <h6 class="md-text fw-bold p-0">Office Equipment & Stationery</h6>
                    <li class="">• Executive writing desk</li>
                    <li class="">• Safe deposit box</li>
                </ul>
                <ul class="mt-3 md-text p-0">
                    <h6 class="md-text fw-bold p-0">Refreshments</h6>
                    <li class="">• Coffee / tea-making facilities</li>
                    <li class="">• 24-hour room service</li>
                    <li class="">• Mini-bar</li>
                </ul>
                <h6 class="mt-3 h-font fw-bold">Children's meal plan for guests staying at the hotel</h6>
                <h6 class="mt-3 sm-text">The following children's meal plan is applicable for all members. When
                    accompanied by a
                    dine-in adult, up to 2 children of registered in-house hotel guests at the age of 6 and below can
                    enjoy
                    buffet meals at the all-day dining venues at no additional charge. Additional children at the age of
                    6 and
                    below and all children who are above 6 years of age but under 12 years of age will receive a 50%
                    discount on
                    the adult buffet price.</h6>
                <h6 class="mt-3 sm-text">Registered in-house hotel guests can also join at any time during their stay to
                    enjoy
                    the meal plan.Children of non-registered walk-in guests under the age of 12 will receive a 50%
                    discount on
                    buffet meals at the all-day dining outlets.</h6>
            </div>
            <!-- description end -->

            <!-- book card start -->
            <!-- book card end -->
        </div>
    </div>










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