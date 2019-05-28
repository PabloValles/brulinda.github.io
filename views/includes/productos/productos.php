<header class="al-hero-header">
    <?php include_once 'views/includes/config/navbar_hero.php';?>

    <div class="al-hero-cta text-center">
        <h1 class="al-cta-title">NUESTROS PRODUCTOS</h1>
        <p class="al-cta-desc">Todo sobre nuestros productos.</p>
        <hr class="personal">
        <img src="views/app-assets/img/icons/frutas/png/72/apple_72.png" alt="">
        <img src="views/app-assets/img/icons/frutas/png/72/pear_72.png" alt="">
        <img src="views/app-assets/img/icons/frutas/png/72/grape_72.png" alt="">

    </div>

    <svg class="al-wave" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1240 120" style="enable-background:new 0 0 1240 120;" xml:space="preserve">
        <path class="hk" d="M682.2,39.6C418.5-11.1,140.2,9.9,0,30v96h1440V30C1252.7,52.2,1011,96.4,675.6,38.7z" fill="#ffffff" />
    </svg>
</header>

<section class="creative-content">
    <div class="container">
        <div class="row d-flex align-items-center h-100">
            <div class="col-12 col-lg-6">
                <div class="img-box text-left">
                    <img src="views/app-assets/img/varias/svg/manzana.svg" alt="">
                    
                    <!-- <img src="https://res.cloudinary.com/gdye4r3f/image/upload/v1543403026/svg%20Vectors/wallet.svg"> -->
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="content-box">
                    <h2><span class="font-weight-bold d-block">Creative</span> <span class="font-weight-light">Content Section</span></h2>
                    <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec viverra enim. Nulla blandit posuere eleifend. Vivamus tempor in magna malesuada feugiat. Nam leo enim, egestas consectetur sagittis quis, elementum id tortor. Phasellus porta hendrerit ligula a dignissim. Maecenas vel fringilla tellus. </p>
                    <a href="#" class="btn btn-primary btn-lg rounded-0 mt-3">Veere Kiddann!</a>
                </div>
            </div>
        </div>
    </div>
</section>




<?php include_once 'views/includes/footer.php';?>
<script>
    var alNav = document.querySelector('#al-sticky-nav');
    var navChangePoint = 100;

    function stickyNav() {

        if (window.scrollY >= navChangePoint) {
            alNav.classList.add('navbar-light', 'al-fixed-nav');
            alNav.classList.remove('navbar-dark', 'al-transparent-nav');
        } else {
            alNav.classList.remove('navbar-light', 'al-fixed-nav');
            alNav.classList.add('navbar-dark', 'al-transparent-nav');
        }
    }
    window.addEventListener('scroll', stickyNav);
</script>