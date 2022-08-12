<?php

$headingtag = "h1";
$headingtagClass = "text-dark pt-5";
$headingtext = "About Us";
$data = array(
    'title' => "<" . $headingtag . " class='" . $headingtagClass . "' > " . $headingtext . "  </" . $headingtag . ">",
    "bgImage" => 'about-bg.jpg'
);
$this->load->view('FrontEnd/Template/PageHeading', $data);

//echo base_url();
?>
<style>
    @media (min-width: 992px) {

        #about .container {
            max-width: 1170px;
        }

        #about .content-text p {
            line-height: 27px;
        }
    }
</style>

<section id="about">
    <div class="container py-5 text-center">
        <div class="row">
            <div class="col-xs-12">
                <h4 class="mb-5 ">
                    We make every effort to provide you with the highest quality Organic Fertilizer
                </h4>
                <div class="content-text">
                    <p>Avenue Poultech is a company that specializes in modern agriculture. We create products and
                        systems to assist farmers all over the world in growing crops while utilizing the best available
                        inputs. We believe that Organic Inputs have the potential to bring humanity’s needs into balance
                        with our planet’s resources.
                    </p>
                    <p>Avenue Poultech was founded in 2019 by Mr. Yusufddin Dyer and was one of first companies in region to have a 100 percent bio waste utilization system at the time. The company owns egg-laying poultry farms, and the daily poultry litter – bio waste is processed by a biogas plant to produce biogas. The bio slurry discharged from the biogas plant is the primary source of organic fertilizer at our plant. The company’s policy is to provide the best products and never compromise on quality, as evidenced by periodic sample tests of the products at the government level.

                    </p>
                    <p>Because of our skilled business ethics, we were able to serve batter to our clients. We have installed cutting-edge machinery to create world-class products and keep operations running smoothly. Our entire operation is led by experienced professionals who diligently execute their assigned tasks within the parameters of productivity, time, and cost. Since our establishment, we have been meeting the market demands successfully. We have a large number of satisfied customers as a result of our high-quality products and customer-centric approaches.

                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$this->load->view('FrontEnd/Template/RequestConsultation');
?>