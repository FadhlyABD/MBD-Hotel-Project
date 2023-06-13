<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Rendezvous Hotel</title>
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
            <li class="nav-item"><a href="#" class="nav-link s-font fw-medium md-text">&nbsp;About the Hotel</a></li>
        </ul>
    </div>
    <!-- navigator end -->

    <img src="/hotel/images/aboutdetail/aboutmainimage.svg" class="w-100 d-block">
    <!-- title start -->
    <div class="mt-5">
        <h4 class="h-font text-center">Step into a sanctuary</h4>
        <h5 class="mt-2 mx-5 text-center h-font">& chill out the day</h5>
    </div>
    <!-- title end -->
    <div class="mt-5 custom-margin px-0 d-flex justify-content-center">
        <img src="/hotel/images/aboutdetail/secondimage.svg" class="w-100 d-block">
    </div>
    <div class="custom-margin mt-5 md-text">
        <h3 class="h-font fw-bold">About</h3>
        <p>A refined oasis of quietude right in the heart of the city, Rendezvous Surabaya presents a traditional sense
            of luxury with an endless Javanese style and warm Indonesian hospitality. Featuring 380* elegant guest rooms
            and suites with stylish ambience in its unique contemporary, yet culturally relevant room décor, as well as
            in the exquisite dining venues. From business to leisure, Rendezvous Surabaya is the ideal home away from
            home.</p><br>
        <p>• 380* elegant guest rooms and suites
            Rendezvous Surabaya, features 380 tastefully decorated guest rooms and suites in warm tones, showcasing
            modern elegance and Javanese- styled luxury with intricately carved local wooden frames adorning the walls.
            Many of the rooms enjoy spectacular views of the city.</p><br>
        <p>• 5* restaurants and a range of recreational experiences
            Featuring nine food and beverage outlets, Rendezvous Hotel, Surabaya offers a wide array of culinary
            experiences under one roof. With several international chefs on board, Rendezvous Hotel, Surabaya is home to
            a rich variety of tantalising global cuisines. In addition, choices of wellness cuisine are also available
            to enable guests to continue their healthy eating routines, and stay well even when you are away from home.
        </p><br>
        <p>• Rendezvous Cares: Our commitment to your well-being in our care
            Enjoy our care and commitment for your comfort and well being. From large conferences to private board
            meetings, the hotel's diverse space can cater for any event.</p>
    </div>

    <div class="d-flex justify-content-center mt-5"> <!-- Added line -->
        <div class="card mb-3 w-100 custom-bg-2" style="max-width: 65rem">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body ms-3 mt-3">
                        <h5 class="card-title fw-bold h-font">Services & Facilities</h5>
                        <p class="card-text md-text" style="max-width: 30rem">Experience our new and exciting
                            complimentary program with your loved ones
                            during your staycation, basking in our resort-like atmosphere with lush gardens and an
                            enchanting pool.​</p>
                        <a href="#" class="card-text btn custom-bg-1 no-radius text-white sm-text mb-2"
                            style="width: 75px;">More</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="/hotel/images/aboutdetail/drinkcoffee.svg" class="img-fluid rounded-start no-radius"
                        alt="...">
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-5"> <!-- Added line -->
        <div class="card mb-3 w-100 custom-bg-2" style="max-width: 65rem">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="/hotel/images/aboutdetail/direction.svg" class="img-fluid rounded-start no-radius"
                        alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body ms-3 mt-3">
                        <h5 class="card-title fw-bold h-font">Map & Directions</h5>
                        <p class="card-text md-text" style="max-width: 30rem">Experience Rendezvous Surabaya’s
                            appetising gastronomy in the comfort of your home</p>
                        <a href="#" class="card-text btn custom-bg-1 no-radius text-white sm-text mb-2"
                            style="width: 75px;">More</a>
                    </div>
                </div>
            </div>
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