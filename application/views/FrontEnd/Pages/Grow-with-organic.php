<?php


$headingtag = "h2";
$headingtagClass = "text-dark pt-5";
$headingtext = "Grow with Organic Phosphate Fertilizer";
$data = array(
    'title' => "<" . $headingtag . " class='" . $headingtagClass . "' > " . $headingtext . "  </" . $headingtag . ">",
    "bgImage" => 'about-bg.jpg'
);
$this->load->view('FrontEnd/Template/PageHeading', $data);


$Pagedata = array(
    'heading' => "Our Visionary Founders Read the Market",
    "content" => 'The recent surge in demand for organic food products has revealed issues with crop fertilization. Fertilizer inputs are frequently lacking in nutritional analysis, are difficult to handle and apply, and are located far from key markets. Our geological location allows us to access a diverse range of natural minerals from Rajasthan State. Our fertilizer manufacturing plant is surrounded by multiple mining operations for Rock Phosphate, Gypsum, Sulphur, Calcium, Zinc, Dolomite, and other minerals, and our proprietary formula takes advantage of this natural resource.'
);
$this->load->view('FrontEnd/Template/SinglePage', $Pagedata);

$this->load->view('FrontEnd/Template/RequestConsultation');
