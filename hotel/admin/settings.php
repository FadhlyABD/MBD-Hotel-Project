<?php
    require('main/essentials.php');
    adminLogin();
    session_regenerate_id(true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Settings</title>
    <?php require('main/links.php')?>
</head>
<body class="custom-bg-5">

    <?php require('main/header.php')?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">SETTINGS</h3>

                <!-- General Settings Section -->

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0 fw-bold">General Settings</h5>
                            <button type="button" class="btn custom-bg-4 text-white" data-bs-toggle="modal" data-bs-target="#general-s">
                                Edit
                            </button>
                        </div>
                        <h6 class="mb-1 mt-2 fw-bold">Site Title</h6>
                        <p class="card-text" id="site_title"></p>
                        <h6 class="mb-1 fw-bold">About Us</h6>
                        <p class="card-text" id="site_about"></p>
                    </div>
                </div>

                <!-- General Settings Modal -->

                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="general_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title fs-5">General Settings</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Site Title</label>
                                        <input type="text" name="site_title" id="site_title_inp" class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">About Us</label>
                                        <textarea name="site_about" id="site_about_inp" rows="6" class="form-control shadow-none" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn custom-bg-1">SUBMIT</button>
                                </div>
                            </div>
                        </form>                       
                    </div>
                </div>

                <!-- Shutdown Section -->

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0 fw-bold">Shutdown Website</h5>
                            <div class="form-check form-switch">
                                <form>
                                    <input onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" id="shutdown-toggle">
                                </form>
                            </div>
                        </div>
                        <p class="card-text">
                            No customer will be allowed to book hotel room, when shutdown mode is turned on.
                        </p>
                    </div>
                </div>

                <!-- Contacts Details Section -->

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0 fw-bold">Contacts Settings</h5>
                            <button type="button" class="btn custom-bg-4 text-white" data-bs-toggle="modal" data-bs-target="#contacts-s">
                                Edit
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-lg-6"> 
                                <div class="mb-4">
                                    <h6 class="mb-1 mt-2 fw-bold">Address</h6>
                                    <p class="card-text" id="address">Surabaya, Kedurus, Kec. Karangpilang, Surabaya, Jawa Timur 60223</p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="mb-1 mt-2 fw-bold">Google Map</h6>
                                    <p class="card-text" id="gmap">https://goo.gl/maps/px9kixPACGudNyLj7</p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="mb-1 mt-2 fw-bold">Phone Numbers</h6>
                                    <p class="card-text m-0" id="pn1">0813 3619 7912</p>
                                    <p class="card-text m-0" id="pn2">0813 5848 3864</p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="mb-1 mt-2 fw-bold">E-mail</h6>
                                    <p class="card-text" id="email">surabaya@rendezvouz.com</p>
                                </div>
                            </div>
                            <div class="col-lg-6"> 
                                <div class="mb-4">
                                    <h6 class="mb-2 mt-2 fw-bold">Social</h6>
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark"> 
                                                <img src="/hotel/images/about/Twitter.svg" alt="" width="20" height="15" class="d-inline-block align-text-center"> 
                                                Twitter
                                            </a><br>
                                            <a href="https://www.facebook.com/vano.vano.731?mibextid=ZbWKwL" target="_blank" class="d-inline-block mb-2 text-decoration-none text-dark"> 
                                                <img src="/hotel/images/about/Facebook.svg" alt="" width="20" height="15" class="d-inline-block align-text-center"> 
                                                Facebook
                                            </a><br>
                                        </div>
                                        <div class="col-lg-5">
                                            <a href="https://instagram.com/duevano.fairuz?igshid=MzRlODBiNWFlZA==" target="_blank" class="d-inline-block mb-2 text-decoration-none text-dark"> 
                                                <img src="/hotel/images/about/Instagram.svg" alt="" width="20" height="15" class="d-inline-block align-text-center"> 
                                                Instagram
                                            </a><br>
                                            <a href="https://www.tiktok.com/@duevano_f?_t=8cweI5RPFb8&_r=1" target="_blank" class="d-inline-block mb-2 text-decoration-none text-dark"> 
                                                <img src="/hotel/images/about/Tiktok.svg" alt="" width="20" height="15" class="d-inline-block align-text-center"> 
                                                Tiktok
                                            </a><br>
                                        </div>
                                    </div>     
                                </div>
                                <div class="mb-4">
                                    <h6 class="mb-1 mt-2 fw-bold">Destination</h6>
                                    <div class="row">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3957.3021589972445!2d112.70176599999999!3d-7.319916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMTknMTEuNyJTIDExMsKwNDInMDYuNCJF!5e0!3m2!1sid!2sid!4v1686067995810!5m2!1sid!2sid" width="300" height="225" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('main/scripts.php')?>
    <script src="scripts/settings.js"></script>
</body>
</html>