<?php
$headingtag = "h2";
$headingtagClass = "text-dark pt-5";
$headingtext = "Reliable Organic Fertilizer Manufacturer";
$data = array(
    'title' => "<" . $headingtag . " class='" . $headingtagClass . "' > " . $headingtext . "  </" . $headingtag . ">",
    "bgImage" => 'about-bg.jpg'
);

$this->load->view('FrontEnd/Template/PageHeading', $data);


$Pagedata = array(
    'heading' => "Reliable Organic Fertilizer Manufacturer",
    "content" => 'Avenue Poultech is a fertilizer supplier that evaluates and sells a wide range of registered organic materials. We produce granulated organic fertilizer derived from high-quality resources for use in organic agriculture, conventional broad crop production, regenerative and transitional agricultural practices. We also provide organic nitrogen, potassium (potash), Sulphur, gypsum, and micronutrient fertilizer sources. We also provide organic soil amendments such as humates. Our agronomists conduct regular testing and help educate clients on proper application practices to ensure the efficacy of our organic fertilizer.'
);
$this->load->view('FrontEnd/Template/SinglePage', $Pagedata);

$this->load->view('FrontEnd/Template/RequestConsultation');
