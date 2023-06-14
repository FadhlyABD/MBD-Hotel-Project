<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Book | Rendezvouz Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <?php require('main/links.php'); ?>
</head>

<body class="custom-bg-5" style="overflow-x: hidden">
    <?php require('main/header.php'); ?>
    <?php require('admin/main/essentials.php'); ?>
    <?php require('admin/main/db_config.php');?>

    <?php

        if(!isset($_GET['id'])){
            redirect('rooms.php');
        }
        elseif (!(isset($_SESSION['login']) && $_SESSION['login'] == true)) {
            redirect('rooms.php');
        }


        $data = filteration($_GET);

        $room_res = select("SELECT * FROM `jenis_kamar` WHERE `jk_id`=? AND `status`=?",[$data['id'], 1],'ii');

        if(mysqli_num_rows($room_res)==0){
            redirect('rooms.php');
        }

        $room_data = mysqli_fetch_assoc($room_res);

        $_SESSION['room'] = [
            "id" => $room_data['jk_id'],
            "name" => $room_data['NAMA_JENIS'],
            "price" => $room_data['HARGA1'],
            "payment" => null,
            "available" => false,
        ];

        // print_r($_SESSION['room']);
        // exit;

        $user_res = select("SELECT * FROM `user` WHERE `u_id`=? LIMIT 1",[$_SESSION['uId']], "i");
        $user_data = mysqli_fetch_assoc($user_res);
    ?>

    <!-- navigator start -->
    <div class="custom-margin py-2 text-left">
        <ul class="navbar-nav d-flex list-group list-group-horizontal-sm">
            <li class="nav-item"><a href="index.php" class="nav-link s-font fw-medium text-color2 md-text">Hotel ></a>
            </li>
            <li class="nav-item"><a href="rooms.php" class="nav-link s-font fw-medium text-color2 md-text">&nbsp;Rooms & Suites ></a>
            </li>
            <li class="nav-item"><a href="#" class="nav-link s-font fw-medium md-text">&nbsp;Book <?php echo $room_data['NAMA_JENIS']?></a>
        </li>
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
                    <img src="/hotel/images/roompage/<?php echo $room_data['gambar'] ?>" class="w-100 d-block img-fluid">
                </div>
            </div>
            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- swiper end -->
    
    <div class="row container-fluid m-2 mx-lg-5 px-lg-5">
        <div class="col-lg-4 mx-lg-5 px-lg-5">
            <!-- title start -->
            <div class="ms-lg-5 margintop-20">
                <img src="\hotel\images\roompage\rendezvouskotakcoklat.svg" class="d-block img-fluid">
                <h2 class="mt-2 h-font"><?php echo $room_data['NAMA_JENIS']?></h2>
                <h6 class="md-text"><?php echo $room_data['DESKRIPSI']?> Showcasing
                    modern elegance and Javanese- styled luxury with intricately carved local wooden frames adorning the walls.
                    Many of the rooms enjoy spectacular views of the city.
                </h6><br>
                <h5 class="fw-bold">Rp 
                    <?php
                        $money = number_format($room_data['HARGA1'], 2, ',', '.');
                        echo $money; 
                    ?> per night
                </h5><br>
            </div>
            <!-- title end -->
        </div>
        <div class="col-lg-5">
            <div class="card custom-bg-5 no-radius border-0 shadow">
                <div class="card-body">
                    <form action="#" id="booking_form">
                        <h6 class="card-title h-font bigger-text18 text-center">Ready to Book?</h6>
                        <div class="mb-3 mt-3 row">
                            <label class="col-sm-4 col-form-label md-text h-font fw-bold">Name</label>
                            <div class="col-sm-8">
                                <input name="name" type="text" value="<?php echo $user_data['USERNAME'] ?>" class="form-control custom-bg-6 shadow md-text no-radius text-colorgrey" required>
                            </div>
                        </div>
                        <div class="mb-3 mt-3 row">
                            <label class="col-sm-4 col-form-label md-text h-font fw-bold">Check In</label>
                            <div class="col-sm-8">
                                <input name="checkin" onchange="check_availability()" type="date" class="form-control custom-bg-6 shadow md-text no-radius text-colorgrey" required>
                            </div>
                        </div>
                        <div class="mb-3 mt-3 row">
                            <label class="col-sm-4 col-form-label md-text h-font fw-bold">Check Out</label>
                            <div class="col-sm-8">
                                <input name="checkout" onchange="check_availability()" type="date" class="form-control custom-bg-6 shadow md-text no-radius text-colorgrey" required>
                            </div>
                        </div>
                        <!-- <div class="mb-3 mt-3 row">
                            <label for="inputPassword" class="col-sm-4 col-form-label md-text h-font fw-bold">Guests</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control custom-bg-6 shadow md-text no-radius text-colorgrey"
                                    id="inputPassword" placeholder="1 - 8">
                            </div>
                        </div> -->
                        <div class="mb-3 mt-3 row">
                            <label class="col-sm-4 col-form-label md-text h-font fw-bold">Facility</label>
                            <div class="col-sm-8">
                                <div class="row">
                                    <?php
                                        $res = selectAll('fasilitas');

                                        while ($opt = mysqli_fetch_assoc($res)) {
                                            echo"
                                                <div class='col-md-5'>
                                                    <label class='sm-text'>
                                                        <input type='checkbox' name='facility' value='$opt[f_id]' class='form-check-input shadow-none'>
                                                        $opt[JENISFASILITAS]
                                                    </label>
                                                </div>
                                            ";
                                        }        
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 mt-3 row">
                            <label class="col-sm-4 col-form-label md-text h-font fw-bold">Payment Method</label>
                            <div class="col-sm-8">
                                <select class="form-select custom-bg-6 no-radius shadow md-text text-colorgrey" aria-label="Default select example" required>
                                    <?php
                                        $res = selectAll('jenistransaksi');

                                        while ($opt = mysqli_fetch_assoc($res)) {
                                            echo <<<data
                                                <option>$opt[METODEPEMBAYARAN]</option>
                                            data;
                                        }                            
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="m-3 row">
                            <h6 class="mb-3 text-danger" id="pay_info">Provide check-In & check-out date!</h6>
                            <button name="booknow" class="btn custom-bg-1 no-radius text-white">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php require('main/footer.php'); ?>

    <script>
        let booking_form = document.getElementById('booking_form');
        let pay_info = document.getElementById('pay_info');

        function check_availability() {
            let checkin_val =booking_form.elements['checkin'].value;
            let checkout_val =booking_form.elements['checkout'].value;
            
            booking_form.elements['booknow'].setAttribute('disabled', true);

            if (checkin_val!='' && checkout_val!='') {
                let data = new FormData();

                data.append('check_availability', '');
                data.append('check_in', checkin_val);
                data.append('check_out', checkout_val);

                let xhr = new XMLHttpRequest();
                xhr.open("POST","ajax/confirm_booking.php", true);

                xhr.onload = function(){
                    console.log(this.responseText);
                    let data = JSON.parse(this.responseText);
                    if (data.status == 'check_in_out_equal') {
                        pay_info.innerText = "You cannot check-out on the same day!"
                    } else if (data.status == 'check_out_earlier') {
                        pay_info.innerText = "Check-out date is earlier than check-in date!"
                    } else if (data.status == 'check_in_earlier') {
                        pay_info.innerText = "Check-in date is earlier than today's date!"
                    } else if (data.status == 'unavailable') {
                        pay_info.innerText = "Room not available for this check-in date!"
                    } else {
                        pay_info.innerHTML = "Number of days: "+data.days+"<br>Total Amount to Pay: Rp "+data.payment;
                        pay_info.classList.replace('text-danger','text-dark');
                        booking_form.elements['booknow'].removeAttribute('disabled');
                    }

                    pay_info.classList.remove('d-none');
                }

                xhr.send(data);
                }
            // else {

            // }

        }

    </script>

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