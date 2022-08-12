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
<style>
    #contact .location {
        padding: 10px 15px;
    }

    #contact .phone {
        padding: 10px 13px;
    }

    #contact .email {
        padding: 10px 13px;
    }

    .contact-form .RegisterForm p,
    .contact-form .RegisterForm h6,
    .contact-form .RegisterForm a {
        color: #000;
        text-decoration: none;
    }
</style>
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
                                    <div class="rounded-circle border border-1 text-danger bg-light location">
                                        <i class="fa-solid fa-location-dot "></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5>Our Location</h5>
                                    <p>
                                        Avenue Poultech<br>
                                        Village: Jagpura, Tehsil: Badnor,<br>
                                        Block: Asind, District: Bhilwara,<br>
                                        Pin: 311204, Rajasthan - India
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="rounded-circle border border-1 text-danger bg-light phone">
                                                <i class="fa-solid fa-phone-flip "></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5>Call Us </h5>
                                            <p> <a class="text-dark" href="tel:++91 94145 73208">+91 94145 73208</a> </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">

                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="rounded-circle border border-1 text-danger bg-light email">
                                                <i class="fa-solid fa-envelope "></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5>Our Email </h5>
                                            <p> <a class="text-dark" href="mailto:avenuepoultech@gmail.com ">avenuepoultech@gmail.com </a> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-form py-3">
                    <div class="row">
                        <div class="col-sm-12 RegisterForm EnqueryForm py-3">
                            <a class="mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEnqueryForm" aria-expanded="false" aria-controls="collapseEnqueryForm">
                                <div class="d-flex align-items-center ">
                                    <div class="flex-shrink-0">
                                        <div class="rounded-circle border border-1 text-danger bg-light email">
                                            <i class="fa-solid fa-id-card"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <div>
                                            <h6 class="m-0">Send Enquery</h6>
                                        </div>
                                    </div>
                                </div>

                            </a>
                            <!-- <p class="my-3">After registering, you will receive a Form-O certificate permitting you to sell our fertilizer products.</p> -->
                            <div class="collapse mt-4" id="collapseEnqueryForm">
                                <div class="card card-body px-2">
                                    <?php
                                    $this->load->view('FrontEnd/Template/EnqueryForm');
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 RegisterForm">
                            <a class="mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRegisterForm" aria-expanded="false" aria-controls="collapseRegisterForm">
                                <div class="d-flex align-items-center ">
                                    <div class="flex-shrink-0">
                                        <div class="rounded-circle border border-1 text-danger bg-light email">
                                            <i class="fa-solid fa-id-card"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <div>
                                            <h6>Register as Dealer</h6>
                                            <p>After registering, you will receive a Form-O certificate permitting you to sell our fertilizer products.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- <p class="my-3">After registering, you will receive a Form-O certificate permitting you to sell our fertilizer products.</p> -->
                            <div class="collapse mt-4" id="collapseRegisterForm">
                                <div class="card card-body px-2">
                                    <?php
                                    $this->load->view('FrontEnd/Template/RegisterDealer');
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h2 class="pb-4">Find Us</h2>
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28738.084878119356!2d74.384131!3d25.794975!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8d23fa79b1d5b4f3!2sAvenue%20Poultech!5e0!3m2!1sen!2sus!4v1659795304601!5m2!1sen!2sus" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>