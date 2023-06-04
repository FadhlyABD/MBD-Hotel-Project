<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendezvouz Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Cardo:wght@400;700&family=Montserrat:wght@400;500;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>
    <style>
        *{                        
            font-family: 'Poppins', sans-serif;
        }

        .s-font{
            font-family: 'Montserrat', sans-serif;
        }

        .h-font{
            font-family: 'Cardo', serif;
        }

        .carousel-text{
            position: absolute;
            top: 50%;
            width: 100%;
            text-align: center;
            z-index: 2;
            text-shadow: 2px 4px 4px;
        }

        .sm-text{
            font-size: 12px;
        }

        .custom-bg-1{
            background-color: #B68973;
        }

        .custom-bg-1:hover{
            background-color: bisque;
        }

        .custom-bg-2{
            background-color: #EAEAEA;
        }

        .custom-bg-3{
            background-color: #E0E0E0;
        }

        .check-form{
            margin-top: -120px;
            z-index: 2;
            position: relative;
        }

        @media screen and (max-width: 575px){
            .check-form{
            margin-top: 25px;
            padding: 0 35px;
            }
        }
    </style>

</head>

<body>

    <?php require('main/header.php'); ?>

    <!-- Carousel -->

    <div class="container-fluid px-0">
        <h1 class="h-font text-white carousel-text">Rendezvouz Surabaya</h1>
        <h6 class="text-white carousel-text mt-lg-5">Book indirect and waste more</h6>
        <div class="swiper swiper-container">
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
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    
    <!-- Check -->

    <div class="container check-form">
        <div class="row">
            <div class="col-lg-12 custom-bg-2 bg-opacity-50 shadow p-1">
                <form>
                    <div class="row align-items-end d-flex justify-content-between mx-auto text-black">
                        <div class="col-lg-3 mb-2">
                            <label class="form-label" style="font-weight: 500;">Check In</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-2">
                            <label class="form-label" style="font-weight: 500;">Check Out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-2 mb-2">
                            <label class="form-label" style="font-weight: 500;">Adult</label>
                            <select class="form-select" aria-label="Default select example">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-2">
                            <label class="form-label" style="font-weight: 500;">Child</label>
                            <select class="form-select" aria-label="Default select example">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg-1">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- About -->

    <div class="mx-5 px-5 mt-5 pt-5">
        <div class="row">
            <div class="col-lg-5 mx-5 p-4">
                <img src="/hotel/images/about/view1.svg" class="w-100 d-block">
            </div>
            <div class="col-lg-5 mx-5 p-4 bg-white">
                <h2 class="fw-bold pt-5 h-font">About</h2><br>
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
                <h6>Rendezvouz Cares: Our commitment to your well-being in our care</h6>
            </div>
        </div>
    </div>
    
    <!-- Reach Us -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h2>

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
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
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
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

</body>
</html>