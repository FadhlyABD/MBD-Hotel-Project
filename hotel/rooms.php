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
    <?php require('admin/main/db_config.php');?>

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
    <div class="container mx-lg-5 px-lg-5">
        <div class="row m-5 px-lg-5">

            <?php
                $room_res = select("SELECT * FROM `jenis_kamar` WHERE `status`=?",[1],'i');

                while ($room_data = mysqli_fetch_assoc($room_res)) {
                    $book_btn = "";
                    $login = 0;
                    if(isset($_SESSION['login']) && $_SESSION['login'] == true){
                        $login = 1;
                    }
                    $book_btn = "<button onclick='checkLoginToBook($login,$room_data[jk_id])' class='btn no-radius text-white custom-bg-1 sm-text mb-2'>Book</button>";
                    echo <<<data
                    <div class="card m-3 mx-lg-4 no-radius text-center bg-transparent px-0" style="width: 28%;">
                        <img src="/hotel/images/roompage/$room_data[gambar]" class="card-img-top">
                        <div class="card-body">
                            <h6 class="mt-2">$room_data[NAMA_JENIS]</h6>
                            <p class="card-text sm-text">$room_data[DESKRIPSI]</p>
                            <a href="$room_data[link]" class="btn custom-bg-1 no-radius text-white sm-text mb-2">View Details</a>
                            $book_btn
                        </div>
                    </div>


                    data;
                }
            ?>

            <!-- <div class="col-md-4 mb-3">
                <div class="card m-2 no-radius text-center bg-transparent">
                    <img src="\hotel\images\roompage\deluxroomlist.svg" class="card-img-top">
                    <div class="card-body">
                        <h6 class="mt-2">Deluxe Room</h6>
                        <p class="card-text sm-text">• 35 sqm / 376 sqf of luxury. <br>• Panoramic city views.</p>
                        <a href="#" class="btn custom-bg-1 no-radius text-white sm-text mb-2">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card m-2 no-radius text-center bg-transparent">
                <img src="\hotel\images\roompage\deluxroomlist.svg" class="card-img-top">
                    <div class="card-body">
                        <h6 class="mt-2">Deluxe Room</h6>
                        <p class="card-text sm-text">• 35 sqm / 376 sqf of luxury. <br>• Panoramic city views.</p>
                        <a href="#" class="btn custom-bg-1 no-radius text-white sm-text mb-2">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card m-2 no-radius text-center bg-transparent">
                <img src="\hotel\images\roompage\deluxroomlist.svg" class="card-img-top">
                    <div class="card-body">
                        <h6 class="mt-2">Deluxe Room</h6>
                        <p class="card-text sm-text">• 35 sqm / 376 sqf of luxury. <br>• Panoramic city views.</p>
                        <a href="#" class="btn custom-bg-1 no-radius text-white sm-text mb-2">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card m-2 no-radius text-center bg-transparent">
                <img src="\hotel\images\roompage\deluxroomlist.svg" class="card-img-top">
                    <div class="card-body">
                        <h6 class="mt-2">Deluxe Room</h6>
                        <p class="card-text sm-text">• 35 sqm / 376 sqf of luxury. <br>• Panoramic city views.</p>
                        <a href="#" class="btn custom-bg-1 no-radius text-white sm-text mb-2">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card m-2 no-radius text-center bg-transparent">
                <img src="\hotel\images\roompage\deluxroomlist.svg" class="card-img-top">
                    <div class="card-body">
                        <h6 class="mt-2">Deluxe Room</h6>
                        <p class="card-text sm-text">• 35 sqm / 376 sqf of luxury. <br>• Panoramic city views.</p>
                        <a href="#" class="btn custom-bg-1 no-radius text-white sm-text mb-2">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card m-2 no-radius text-center bg-transparent">
                <img src="\hotel\images\roompage\deluxroomlist.svg" class="card-img-top">
                    <div class="card-body">
                        <h6 class="mt-2">Deluxe Room</h6>
                        <p class="card-text sm-text">• 35 sqm / 376 sqf of luxury. <br>• Panoramic city views.</p>
                        <a href="#" class="btn custom-bg-1 no-radius text-white sm-text mb-2">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card m-2 no-radius text-center bg-transparent">
                <img src="\hotel\images\roompage\deluxroomlist.svg" class="card-img-top">
                    <div class="card-body">
                        <h6 class="mt-2">Deluxe Room</h6>
                        <p class="card-text sm-text">• 35 sqm / 376 sqf of luxury. <br>• Panoramic city views.</p>
                        <a href="#" class="btn custom-bg-1 no-radius text-white sm-text mb-2">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card m-2 no-radius text-center bg-transparent">
                <img src="\hotel\images\roompage\deluxroomlist.svg" class="card-img-top">
                    <div class="card-body">
                        <h6 class="mt-2">Deluxe Room</h6>
                        <p class="card-text sm-text">• 35 sqm / 376 sqf of luxury. <br>• Panoramic city views.</p>
                        <a href="#" class="btn custom-bg-1 no-radius text-white sm-text mb-2">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card m-2 no-radius text-center bg-transparent">
                <img src="\hotel\images\roompage\deluxroomlist.svg" class="card-img-top">
                    <div class="card-body">
                        <h6 class="mt-2">Deluxe Room</h6>
                        <p class="card-text sm-text">• 35 sqm / 376 sqf of luxury. <br>• Panoramic city views.</p>
                        <a href="#" class="btn custom-bg-1 no-radius text-white sm-text mb-2">View Details</a>
                    </div>
                </div>
            </div> -->
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