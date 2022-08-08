<?php

$headingtag = "h1";
$headingtagClass = "text-dark pt-5";
$headingtext = "Contact Us";
$data = array(
    'title' => "<" . $headingtag . " class='" . $headingtagClass . "' > " . $headingtext . "  </" . $headingtag . ">",
    "bgImage" => 'about-bg.jpg'
);

$this->load->view('FrontEnd/Template/PageHeading', $data);
?>

<section id="contact">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8">
                <div class="contact-details border-bottom pb-5">
                    <h2 class="pb-4">Contact Details</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <div class="rounded-circle px-4 py-3 border border-1 text-danger bg-light">
                                        <i class="fa-solid fa-location-dot fa-lg"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h3>Our Location</h3>
                                    <p>Avenue Poultech <br>
                                        Village Jagpura, Block Asind, <br>
                                        District Bhilwara, <br>
                                        Rajasthan India </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <div class="rounded-circle px-4 py-3 border border-1 text-danger bg-light">
                                        <i class="fa-solid fa-phone-flip fa-lg"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h3>Call Us </h3>
                                    <p> <a class="text-dark" href="tel:++91 94145 73208">+91 94145 73208</a> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <div class="rounded-circle px-4 py-3 border border-1 text-danger bg-light">
                                        <i class="fa-solid fa-envelope fa-lg"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h3>Our Email </h3>
                                    <p> <a class="text-dark" href="mailto:avenuepoultech@gmail.com ">avenuepoultech@gmail.com </a> </p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="contact-form py-3">
                    <div class="row">
                        <div class="col-sm-12">

                            <?php
                            $this->load->view('FrontEnd/Template/ContactForm');
                            ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h2 class="pb-4">Find Us</h2>
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28738.084878119356!2d74.384131!3d25.794975!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8d23fa79b1d5b4f3!2sAvenue%20Poultech!5e0!3m2!1sen!2sus!4v1659795304601!5m2!1sen!2sus" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>


        </div>
    </div>
    </div>
</section>