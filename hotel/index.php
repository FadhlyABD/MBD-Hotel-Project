<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Rendezvouz Hotel</title>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <?php require('main/links.php'); ?>
</head>

<body class="custom-bg-5">
    <?php require('main/header.php'); ?>

    <!-- Carousel -->

    <div class="container-fluid px-0">
        <h1 class="h-font carousel-text text-color">Rendezvouz Surabaya</h1>
        <h6 class="text-color carousel-text mt-5">Book indirect and waste more</h6>
        <div class="swiper swiper-container-1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/hotel/images/carousel/mainImage1.svg" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="/hotel/images/carousel/mainImage2.svg" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="/hotel/images/carousel/mainImage3.svg" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="/hotel/images/carousel/mainImage4.svg" class="w-100 d-block">
                </div>
            </div>
            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
    
    <!-- Check -->

    <div class="container check-form">
        <div class="row">
            <div class="col-lg-12 shadow p-1">
                <form>
                    <div class="row align-items-end d-flex justify-content-between mx-auto text-black">
                        <div class="col-lg-3 mb-2">
                            <label class="form-label" style="font-weight: 500;">Check In</label>
                            <input type="date" class="form-control shadow-none custom-bg-6 no-radius">
                        </div>
                        <div class="col-lg-3 mb-2">
                            <label class="form-label" style="font-weight: 500;">Check Out</label>
                            <input type="date" class="form-control shadow-none custom-bg-6 no-radius">
                        </div>
                        <div class="col-lg-2 mb-2">
                            <label class="form-label" style="font-weight: 500;">Adult</label>
                            <select class="form-select custom-bg-6 no-radius" aria-label="Default select example">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-2">
                            <label class="form-label" style="font-weight: 500;">Child</label>
                            <select class="form-select custom-bg-6 no-radius" aria-label="Default select example">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-2">
                            <button type="submit" class="btn text-white shadow custom-bg-1 no-radius">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- About -->

    <div class="mx-5 px-5 mt-5 pt-5">
        <div class="row">
            <div class="col-lg-6 ms-lg-5 p-4">
                <img src="/hotel/images/about/view1.svg" class="w-100 d-block">
            </div>
            <div class="col-lg-5 me-lg-5 p-4">
                <h3 class="fw-bold pt-5 h-font">About</h3><br>
                <h6>A refined oasis of quietude right in the heart of the city, 
                    Rendezvouz Surabaya presents a traditional sense of luxury 
                    with an endless Javanese style and warm Indonesian hospitality. 
                    Featuring 380* elegant guest rooms and suites with stylish 
                    ambience in its unique contemporary, yet culturally relevant 
                    room décor, as well as in the exquisite dining venues. From 
                    business to leisure, Rendezvouz Surabaya is the ideal home 
                    away from home.
                </h6><br>
                <h6>380* elegant guest rooms and suites</h6>
                <h6>5* restaurants and a range of recreational experiences</h6>
                <h6>Rendezvouz Cares: Our commitment to your well-being in our care</h6><br>
                <a class="lm-color fs-5" href="#">Learn More</a>
            </div>
        </div>
    </div>
    
    <!-- Rooms & Suites -->

    <h3 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Recommended Room Types</h3>
    <p class="text-center room-desc">Rendezvouz Surabaya, features 380* tastefully decorated guest rooms and suites 
        in warm tones, showcasing modern elegance and Javanese- styled luxury with 
        intricately carved local wooden frames adorning the walls. Many of the rooms 
        enjoy spectacular views of the city.
    </p>

    <div class="container-fluid px-0">
        <div class="swiper swiper-container-2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/hotel/images/rooms/room1.svg" class="mx-auto d-block">
                    <div class="card mx-auto no-radius custom-bg-2 room-cards border-0 shadow-sm" style="width: 37rem;">
                        <div class="card-body">
                            <h5 class="card-title h-font">Deluxe Room</h5><br>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur. Magna tortor 
                                pharetra vulputate diam. Blandit quam commodo vel vel varius id nisi 
                                massa bibendum. In id adipiscing egestas mauris. Sit facilisi varius.
                            </p>
                            <a href="#" class="card-link lm-color">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="/hotel/images/rooms/room2.svg" class="mx-auto d-block">
                    <div class="card mx-auto no-radius custom-bg-2 room-cards border-0 shadow-sm" style="width: 37rem;">
                        <div class="card-body">
                            <h5 class="card-title h-font">Executive Room</h5><br>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur. Magna tortor 
                                pharetra vulputate diam. Blandit quam commodo vel vel varius id nisi 
                                massa bibendum. In id adipiscing egestas mauris. Sit facilisi varius.
                            </p>
                            <a href="#" class="card-link lm-color">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="/hotel/images/rooms/room3.svg" class="mx-auto d-block">
                    <div class="card mx-auto no-radius custom-bg-2 room-cards border-0 shadow-sm" style="width: 37rem;">
                        <div class="card-body">
                            <h5 class="card-title h-font">Executive Suite</h5><br>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur. Magna tortor 
                                pharetra vulputate diam. Blandit quam commodo vel vel varius id nisi 
                                massa bibendum. In id adipiscing egestas mauris. Sit facilisi varius.
                            </p>
                            <a href="#" class="card-link lm-color">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="/hotel/images/rooms/room4.svg" class="mx-auto d-block">
                    <div class="card mx-auto no-radius custom-bg-2 room-cards border-0 shadow-sm" style="width: 37rem;">
                        <div class="card-body">
                            <h5 class="card-title h-font">Two Deluxe Room Connected</h5><br>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur. Magna tortor 
                                pharetra vulputate diam. Blandit quam commodo vel vel varius id nisi 
                                massa bibendum. In id adipiscing egestas mauris. Sit facilisi varius.
                            </p>
                            <a href="#" class="card-link lm-color">Learn More</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Landscape -->

    <div class="container-fluid custom-bg-4 px-0">
        <h3 class="mt-5 pt-4 mb-4 fw-bold h-font text-color ms-5">Beautiful Landscape</h3>
        <div class="swiper swiper-container-2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/hotel/images/rooms/room1.svg" class="mx-auto d-block">
                    <div class="card mx-auto no-radius custom-bg-2 room-cards border-0 shadow-sm" style="width: 37rem;">
                        <div class="card-body">
                            <h5 class="card-title h-font">Deluxe Room</h5><br>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur. Magna tortor 
                                pharetra vulputate diam. Blandit quam commodo vel vel varius id nisi 
                                massa bibendum. In id adipiscing egestas mauris. Sit facilisi varius.
                            </p>
                            <a href="#" class="card-link lm-color">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="/hotel/images/rooms/room2.svg" class="mx-auto d-block">
                    <div class="card mx-auto no-radius custom-bg-2 room-cards border-0 shadow-sm" style="width: 37rem;">
                        <div class="card-body">
                            <h5 class="card-title h-font">Executive Room</h5><br>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur. Magna tortor 
                                pharetra vulputate diam. Blandit quam commodo vel vel varius id nisi 
                                massa bibendum. In id adipiscing egestas mauris. Sit facilisi varius.
                            </p>
                            <a href="#" class="card-link lm-color">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="/hotel/images/rooms/room3.svg" class="mx-auto d-block">
                    <div class="card mx-auto no-radius custom-bg-2 room-cards border-0 shadow-sm" style="width: 37rem;">
                        <div class="card-body">
                            <h5 class="card-title h-font">Executive Suite</h5><br>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur. Magna tortor 
                                pharetra vulputate diam. Blandit quam commodo vel vel varius id nisi 
                                massa bibendum. In id adipiscing egestas mauris. Sit facilisi varius.
                            </p>
                            <a href="#" class="card-link lm-color">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="/hotel/images/rooms/room4.svg" class="mx-auto d-block">
                    <div class="card mx-auto no-radius custom-bg-2 room-cards border-0 shadow-sm" style="width: 37rem;">
                        <div class="card-body">
                            <h5 class="card-title h-font">Two Deluxe Room Connected</h5><br>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur. Magna tortor 
                                pharetra vulputate diam. Blandit quam commodo vel vel varius id nisi 
                                massa bibendum. In id adipiscing egestas mauris. Sit facilisi varius.
                            </p>
                            <a href="#" class="card-link lm-color">Learn More</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Reach Us -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Destination</h2>

    <div class="container">
        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3957.302194486082!2d112.701712!3d-7.319911999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMTknMTEuNyJTIDExMsKwNDInMDYuMiJF!5e0!3m2!1sid!2sid!4v1685869768713!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <iframe src="https://www.google.com/maps/embed?pb=!4v1685867449478!6m8!1m7!1sS4hRc4Fqt0cmhzJ6gsf_0Q!2m2!1d-7.319895959831304!2d112.7017526972321!3f272.54068097422106!4f-28.11030324239666!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <?php require('main/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
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
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            centeredSlides: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                1350: {
                    slidesPerView: 2
                }
            }
            // navigation: {
            //     nextEl: ".swiper-button-next",
            //     prevEl: ".swiper-button-prev",
            // },
        });
    </script>

</body>
</html>