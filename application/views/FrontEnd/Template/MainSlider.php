<style>
    #mainSlider .container {
        max-width: 1310px;
    }
</style>
<section id="mainSlider" class="pt-5">
    <div class="owl-carousel owl-theme">
        <div class="item slide-one active">
            <div class="container pt-3 pb-3">
                <div class="row align-items-center pt-5 pb-5">
                    <div class="col-sm-12 col-xl-4 col-lg-5 slide-text text-lg-start text-center">
                        <h2 class="text-danger">Brite Bio</h2>
                        <p style="color: #000;">Organic Phosphate Fertilizer<br>
                            for Grain</p>

                        <a href="<?php echo site_url(); ?>contact-us" type="button" id="" class="btn btn-danger px-4 py-2 ">Contact Us</a>

                    </div>
                    <div class="col-sm-12 col-xl-8 col-lg-7">
                        <div>
                            <img alt="Brite Bio" src="<?php echo site_url("public/frontend/") ?>assets/img/Avenue/banner/banner-1.png" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item slide-one">
            <div class="container pt-3 pb-3">
                <div class="row align-items-center pt-5 pb-5">
                    <div class="col-sm-12 col-xl-4 col-lg-5 slide-text text-lg-start text-center">
                        <h2 class="text-danger">Brite Bio</h2>
                        <p style="color: #459c25;">Organic Fertilizer<br>
                            for Vegetables</p>

                        <a href="<?php echo site_url(); ?>contact-us" type="button" id="" class="btn btn-danger px-4 py-2">Contact Us</a>

                    </div>
                    <div class="col-sm-12 col-xl-8 col-lg-7">
                        <div>
                            <img alt="Brite Bio" src="<?php echo site_url("public/frontend/") ?>assets/img/Avenue/banner/banner-2.png" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item slide-one">
            <div class="container pt-3 pb-3">
                <div class="row align-items-center pt-5 pb-5">
                    <div class="col-sm-12 col-xl-4 col-lg-5 slide-text text-lg-start text-center">
                        <h2 class="text-danger">Brite Bio</h2>
                        <p style="color: #b74039;">Organic Phosphate Fertilizer<br>
                            for Fruits</p>

                        <a href="<?php echo site_url(); ?>contact-us" type="button" id="" class="btn btn-danger px-4 py-2">Contact Us</a>

                    </div>
                    <div class="col-sm-12 col-xl-8 col-lg-7">
                        <div>
                            <img alt="Brite Bio" style="width: 79.5%;" src="<?php echo site_url("public/frontend/") ?>assets/img/Avenue/banner/banner-3.png" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item slide-one">
            <div class="container pt-3 pb-3">
                <div class="row align-items-center pt-5 pb-5">
                    <div class="col-sm-12 col-xl-4 col-lg-5 slide-text text-lg-start text-center">
                        <h2 class="text-danger">Brite Bio</h2>
                        <p style="color: #7938b4;">Organic Fertilizer<br>
                            for Kitchen Garden</p>
                        <a href="<?php echo site_url(); ?>contact-us" type="button" id="" class="btn btn-danger px-4 py-2">Contact Us</a>

                    </div>
                    <div class="col-sm-12 col-xl-8 col-lg-7">
                        <div>
                            <img alt="Brite Bio" style="width: 83%;" src="<?php echo site_url("public/frontend/") ?>assets/img/Avenue/banner/banner-4.png" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<script>
    $(document).ready(function() {
      
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            navText: [
                '<i class="fa-solid fa-angle-left fa-2xl"></i>',
                '<i class="fa fa-angle-right fa-2xl" aria-hidden="true"></i>'
            ],
            animateOut: 'fadeOut',
            //autoHeight: true,           
            //   navContainer: '.custom-nav',
            autoplay: hostname == "localhost" || hostname == "132.1.0.117" ? false : true,
            autoplayTimeout: 3000,
            autoplayHoverPause: false,
            items: 1
            // responsive: {
            //     0: {
            //         items: 1
            //     },
            // }
        })
    });
</script>