<!-- Footer -->

<h6 class="text-center p-2 mt-2 h-font custom-bg-2">Designed and Developed by Mabuk Basis Data</h6>

<div class="container-fluid custom-bg-4 sm-center">
    <div class="row">
        <div class="col-lg-3 p-4">
            <h5 class="mb-3 fw-medium s-font text-color">Rendezvous Surabaya</h5>
            <p class="sm-text s-font text-color">Adress: Surabaya, Kedurus, Kec. Karangpilang, Surabaya, Jawa Timur 60223</p>
            <p class="sm-text s-font text-color">Phone: 0813 3619 7912</p>
            <p class="sm-text s-font text-color">Email: surabaya@rendezvous.com</p>
        </div>
        <div class="col-lg-3 p-4">
            <h5 class="mb-3 fw-medium s-font text-color">Check-in / Check-out</h5>
            <p class="sm-text s-font text-color mb-1-">We hope you’ve enjoyed your stay from start to finish. Please note the times below:</p>
            <p class="sm-text s-font text-color m-0">Check-in: 2pm</p>
            <p class="sm-text s-font text-color">Check-out: 12noon</p>
        </div>
        <div class="col-lg-2 p-4">
            <h5 class="mb-3 fw-medium s-font text-color">Overview</h5>
            <div class="row">
                <div class="col-lg-6">
                    <a href="#" class="d-inline-block mb-1 text-decoration-none sm-text s-font text-color">About</a><br>
                    <a href="#" class="d-inline-block mb-1 text-decoration-none sm-text s-font text-color">Rooms & Suites</a><br>
                    <a href="#" class="d-inline-block mb-1 text-decoration-none sm-text s-font text-color">Dining</a><br>
                    <a href="#" class="d-inline-block mb-1 text-decoration-none sm-text s-font text-color">Events</a><br>
                </div>
                <div class="col-lg-6">
                    <a href="#" class="d-inline-block mb-1 text-decoration-none sm-text s-font text-color">Gallery</a><br>
                    <a href="#" class="d-inline-block mb-1 text-decoration-none sm-text s-font text-color">Offers</a><br>
                    <a href="#" class="d-inline-block mb-1 text-decoration-none sm-text s-font text-color">More</a>
                </div>
            </div>                
        </div>
        <div class="col-lg-2 ps-lg-4 pt-4">
            <h5 class="mb-3 fw-medium s-font text-color">Follow Us</h5>
            <a href="#" class="d-inline-block mb-2 text-decoration-none sm-text s-font text-color"> 
                <img src="/hotel/images/about/Twitter2.svg" alt="" width="20" height="15" class="d-inline-block align-text-center"> 
                Twitter
            </a><br>
            <a href="https://www.facebook.com/vano.vano.731?mibextid=ZbWKwL" class="d-inline-block mb-2 text-decoration-none sm-text s-font text-color"> 
                <img src="/hotel/images/about/Facebook2.svg" alt="" width="20" height="15" class="d-inline-block align-text-center"> 
                Facebook
            </a><br>
            <a href="https://instagram.com/duevano.fairuz?igshid=MzRlODBiNWFlZA==" class="d-inline-block mb-2 text-decoration-none sm-text s-font text-color"> 
                <img src="/hotel/images/about/Instagram2.svg" alt="" width="20" height="15" class="d-inline-block align-text-center"> 
                Instagram
            </a><br>
            <a href="https://www.tiktok.com/@duevano_f?_t=8cweI5RPFb8&_r=1" class="d-inline-block mb-2 text-decoration-none sm-text s-font text-color"> 
                <img src="/hotel/images/about/Tiktok2.svg" alt="" width="20" height="15" class="d-inline-block align-text-center"> 
                Tiktok
            </a><br>
        </div>
        <div class="col-lg-2 pe-lg-4 pt-4">
            <h5 class="mb-4 fw-medium s-font text-color">Payment Methods</h5>
            <p class="sm-text s-font text-color">Payment we accept:</p>
            <p class="sm-text s-font text-color">VISA, QRIS, MASTER CARDS, ETC</p>
        </div>
    </div>
</div>

<div class="container-fluid custom-bg-2 text-center pt-3">
    <a class="navbar-brand s-font fs-3" href="index.php">
        <img src="/hotel/images/about/hotelLogo.svg" alt="Logo" width="60" height="53" class="d-inline-block align-text-center">  
        Rendezvous
    </a>
    <h6 class="s-font fw-medium">Privacy Policy | Terms & Conditions | Disclaimer | Supplier Code Of Conduct</h6>
    <h6 class="sm-text s-font">© 2023 Rendezvous International Hotel Management Ltd. All Rights Reserved. ICP license: 17055189</h6>
</div>

<script>

    function alert(type,msg){
        let bs_class = (type == "success") ? "alert-success" : "alert-danger";
        let element = document.createElement('div');

        element.innerHTML = `
            <div class="alert ${bs_class} alert-dismissible fade show custom-alert" role="alert">
                <strong class="me-3">${msg}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;

        document.body.append(element);
        setTimeout(remAlert, 5000);
    }

    function remAlert(){
        document.getElementsByClassName('alert')[0].remove();
    }


    function setActive()
    {

    }

    let register_form = document.getElementById('register_form');

    register_form.addEventListener('submit', (e)=>{
        e.preventDefault();

        let data = new FormData();

        data.append('name', register_form.elements['name'].value);
        data.append('email', register_form.elements['email'].value);
        data.append('pass', register_form.elements['pass'].value);
        data.append('cpass', register_form.elements['cpass'].value);
        data.append('register','');

        var myModal = document.getElementById('registerModal');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        let xhr = new XMLHttpRequest();
        xhr.open("POST","ajax/login_register.php", true);

        xhr.onload = function(){
            console.log(this.responseText);
            if(this.responseText == 'pass_mismatch'){
                alert('error', "Password Mismatch!");
            }
            else if(this.responseText == 'email_already'){
                alert('error', "Email has already registered!");
            }
            else{
                alert('success', "Registration Succes!");
                register_form.reset();
            }
        }

        xhr.send(data);
    });

    setActive();
    
</script>
