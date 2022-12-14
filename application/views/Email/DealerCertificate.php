<?php
// echo "<pre>";
// echo print_r($UserData);

// echo "</pre>";
$CertificateDate = date("d-m-Y");
$id = empty($dealer['id']) ? "" : $dealer['id'];

$CertificateNumber = empty($dealer['Certificate_No']) ? "" : $dealer['Certificate_No'];  //"AP/" . date("Y-d") . "/" . sprintf("%04d", $id);
$Dealer_Name = empty($dealer['Dealer_Name']) ? "" : $dealer['Dealer_Name'];
$id = empty($dealer['id']) ? "" : $dealer['id'];
$Address = empty($dealer['Address']) ? "" : $dealer['Address'] . ",";
$City = empty($dealer['City']) ? "" : $dealer['City'] . ",";
$District = empty($dealer['District']) ? "" : $dealer['District'] . ",";
$State = empty($dealer['State']) ? "" : $dealer['State'] . ",";
$Phone_Number = empty($dealer['Phone_Number']) ? "" : $dealer['Phone_Number'];
$Email = empty($dealer['Email']) ? "" : $dealer['Email'];
$License_No = empty($dealer['License_No']) ? "" : $dealer['License_No'];
$Issue_Date = empty($dealer['Issue_Date']) ? "" : $dealer['Issue_Date'];
$Expiry_Date = empty($dealer['Expiry_Date']) ? "" : $dealer['Expiry_Date'];
$License_Issue_by = empty($dealer['License_Issue_by']) ? "" : $dealer['License_Issue_by'];
$Pincode = empty($dealer['Pincode']) ? "" : $dealer['Pincode'];

$logo = site_url("public/frontend/assets/img/Avenue/Avenue-Logo-232x300.png");

//die();


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
  <!-- Compiled with Bootstrap Email version: 1.3.1 -->
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="x-apple-disable-message-reformatting">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no, date=no, address=no, email=no">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <style type="text/css">
    body,
    table,
    td {
      font-family: Helvetica, Arial, sans-serif !important
    }

    .ExternalClass {
      width: 100%
    }

    .ExternalClass,
    .ExternalClass p,
    .ExternalClass span,
    .ExternalClass font,
    .ExternalClass td,
    .ExternalClass div {
      line-height: 150%
    }

    a {
      text-decoration: none
    }

    * {
      color: inherit
    }

    a[x-apple-data-detectors],
    u+#body a,
    #MessageViewBody a {
      color: inherit;
      text-decoration: none;
      font-size: inherit;
      font-family: inherit;
      font-weight: inherit;
      line-height: inherit
    }

    img {
      -ms-interpolation-mode: bicubic
    }

    table:not([class^=s-]) {
      font-family: Helvetica, Arial, sans-serif;
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
      border-spacing: 0px;
      border-collapse: collapse
    }

    table:not([class^=s-]) td {
      border-spacing: 0px;
      border-collapse: collapse
    }

    @media screen and (max-width: 600px) {

      .w-full,
      .w-full>tbody>tr>td {
        width: 100% !important
      }

      .w-12,
      .w-12>tbody>tr>td {
        width: 48px !important
      }

      .p-2:not(table),
      .p-2:not(.btn)>tbody>tr>td,
      .p-2.btn td a {
        padding: 8px !important
      }

      .pt-5:not(table),
      .pt-5:not(.btn)>tbody>tr>td,
      .pt-5.btn td a,
      .py-5:not(table),
      .py-5:not(.btn)>tbody>tr>td,
      .py-5.btn td a {
        padding-top: 20px !important
      }

      .pt-6:not(table),
      .pt-6:not(.btn)>tbody>tr>td,
      .pt-6.btn td a,
      .py-6:not(table),
      .py-6:not(.btn)>tbody>tr>td,
      .py-6.btn td a {
        padding-top: 24px !important
      }

      *[class*=s-lg-]>tbody>tr>td {
        font-size: 0 !important;
        line-height: 0 !important;
        height: 0 !important
      }

      .s-5>tbody>tr>td {
        font-size: 20px !important;
        line-height: 20px !important;
        height: 20px !important
      }

      .s-6>tbody>tr>td {
        font-size: 24px !important;
        line-height: 24px !important;
        height: 24px !important
      }
    }
  </style>
</head>

<body class="bg-light" style="outline: 0; width: 100%; min-width: 100%; height: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; font-family: Helvetica, Arial, sans-serif; line-height: 24px; font-weight: normal; font-size: 16px; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; color: #000000; margin: 0; padding: 0; border-width: 0;" bgcolor="#f7fafc">
  <table class="bg-light body" valign="top" role="presentation" border="0" cellpadding="0" cellspacing="0" style="outline: 0; width: 100%; min-width: 100%; height: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; font-family: Helvetica, Arial, sans-serif; line-height: 24px; font-weight: normal; font-size: 16px; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; color: #000000; margin: 0; padding: 0; border-width: 0;" bgcolor="#f7fafc">
    <tbody>
      <tr>
        <td valign="top" style="line-height: 24px; font-size: 16px; margin: 0;" align="left" bgcolor="#f7fafc">
          <table class="container" role="presentation" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
            <tbody>
              <tr>
                <td align="center" style="line-height: 24px; font-size: 16px; margin: 0; padding: 0 16px;">
                  <!--[if (gte mso 9)|(IE)]>
                      <table align="center" role="presentation">
                        <tbody>
                          <tr>
                            <td width="600">
                    <![endif]-->
                  <table align="center" role="presentation" border="0" cellpadding="0" cellspacing="0" style="width: 100%; max-width: 600px; margin: 0 auto;">
                    <tbody>
                      <tr>
                        <td style="line-height: 24px; font-size: 16px; margin: 0;" align="left">
                          <table class="s-5 w-full" role="presentation" border="0" cellpadding="0" cellspacing="0" style="width: 100%;" width="100%">
                            <tbody>
                              <tr>
                                <td style="line-height: 20px; font-size: 20px; width: 100%; height: 20px; margin: 0;" align="left" width="100%" height="20">
                                  &#160;
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <table class="pt-5" role="presentation" border="0" cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td style="line-height: 24px; font-size: 16px; padding-top: 20px; margin: 0;" align="left">
                                  <div class="row">
                                    <table class="" role="presentation" border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed; width: 100%;" width="100%">
                                      <tbody>
                                        <tr>
                                          <td class="col-12 test-start" style="line-height: 24px; font-size: 16px; min-height: 1px; font-weight: normal;  width: 100%; margin: 0;" align="left" valign="top">
                                            <h6 style="padding-top: 0; padding-bottom: 0; font-weight: 500; vertical-align: baseline; font-size: 16px; line-height: 19.2px; margin: 0;" align="left">Hello <?php echo $Dealer_Name; ?>,</h6>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <table class="s-5 w-full" role="presentation" border="0" cellpadding="0" cellspacing="0" style="width: 100%;" width="100%">
                            <tbody>
                              <tr>
                                <td style="line-height: 20px; font-size: 20px; width: 100%; height: 20px; margin: 0;" align="left" width="100%" height="20">
                                  &#160;
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <table class="pt-5" role="presentation" border="0" cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td style="line-height: 24px; font-size: 16px; padding-top: 20px; margin: 0;" align="left">
                                  <div class="row">
                                    <table class="" role="presentation" border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed; width: 100%;" width="100%">
                                      <tbody>
                                        <tr>
                                          <td class="col-12 test-start" style="line-height: 24px; font-size: 16px; min-height: 1px; font-weight: normal;  width: 100%; margin: 0;" align="left" valign="top">
                                            <div class="">
                                              <p style="line-height: 24px; font-size: 16px; width: 100%; margin: 0;" align="left">We are glad to issue Form-O Principal Certificate based on the information you have provided.</p>
                                            </div>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <table class="s-5 w-full" role="presentation" border="0" cellpadding="0" cellspacing="0" style="width: 100%;" width="100%">
                            <tbody>
                              <tr>
                                <td style="line-height: 20px; font-size: 20px; width: 100%; height: 20px; margin: 0;" align="left" width="100%" height="20">
                                  &#160;
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <table class="pt-5" role="presentation" border="0" cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td style="line-height: 24px; font-size: 16px; padding-top: 20px; margin: 0;" align="left">
                                  <div class="row">
                                    <table class="" role="presentation" border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed; width: 100%;" width="100%">
                                      <tbody>
                                        <tr>
                                          <td class="col-8" style="line-height: 24px; font-size: 16px; min-height: 1px; font-weight: normal;  width: 66.666667%; margin: 0;" align="left" valign="top">
                                            <table class="table table-striped " border="0" cellpadding="0" cellspacing="0" style="width: 100%; max-width: 100%;">
                                              <tbody>
                                                <tr bgcolor="#f2f2f2">
                                                  <td class="border-0 text-black" style="line-height: 24px; font-size: 16px; color: #000000; margin: 0; padding: 12px; border: 0px solid #e2e8f0;" align="left" valign="top">Certificate Number :</td>
                                                  <td class="border-0 text-gray-700" style="line-height: 24px; font-size: 16px; color: #4a5568; margin: 0; padding: 12px; border: 0px solid #e2e8f0;" align="left" valign="top"> <?php echo $CertificateNumber; ?> </td>
                                                </tr>
                                                <tr>
                                                  <td class="border-0 text-black" style="line-height: 24px; font-size: 16px; color: #000000; margin: 0; padding: 12px; border: 0px solid #e2e8f0;" align="left" valign="top">Date of Issue :</td>
                                                  <td class="border-0 text-gray-700" style="line-height: 24px; font-size: 16px; color: #4a5568; margin: 0; padding: 12px; border: 0px solid #e2e8f0;" align="left" valign="top"><?php echo $Issue_Date; ?> </td>
                                                </tr>

                                              </tbody>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <table class="s-5 w-full" role="presentation" border="0" cellpadding="0" cellspacing="0" style="width: 100%;" width="100%">
                            <tbody>
                              <tr>
                                <td style="line-height: 20px; font-size: 20px; width: 100%; height: 20px; margin: 0;" align="left" width="100%" height="20">
                                  &#160;
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <table class="pt-6" role="presentation" border="0" cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td style="line-height: 24px; font-size: 16px; padding-top: 24px; margin: 0;" align="left">
                                  <div class="row">
                                    <table class="" role="presentation" border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed; width: 100%;" width="100%">
                                      <tbody>
                                        <tr>
                                          <td class="col-12 test-start" style="line-height: 24px; font-size: 16px; min-height: 1px; font-weight: normal;  width: 100%; margin: 0;" align="left" valign="top">
                                            <div class="">
                                              <p style="line-height: 24px; font-size: 16px; width: 100%; margin: 0;" align="left">Please download the certificate, and we hope to have a good business relationship with you.</p>
                                            </div>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <table class="s-6 w-full" role="presentation" border="0" cellpadding="0" cellspacing="0" style="width: 100%;" width="100%">
                            <tbody>
                              <tr>
                                <td style="line-height: 24px; font-size: 24px; width: 100%; height: 24px; margin: 0;" align="left" width="100%" height="24">
                                  &#160;
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <table class="pt-6" role="presentation" border="0" cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td style="line-height: 24px; font-size: 16px; padding-top: 24px; margin: 0;" align="left">
                                  <div class="row">
                                    <table class="" role="presentation" border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed; width: 100%;" width="100%">
                                      <tbody>
                                        <tr>
                                          <td class="col-12 p-2 text-center" style="line-height: 24px; font-size: 16px; min-height: 1px; font-weight: normal; width: 100%; margin: 0; padding: 8px 24px 8px 8px;" align="center" valign="top">
                                            <img class="w-12 img-fluid" src="<?php echo $logo; ?>" alt="logo" style="height: auto; line-height: 100%; outline: none; text-decoration: none; display: block; max-width: 100%; width: 48px; border-style: none; border-width: 0;" width="48">
                                            <p class="text-center" style="line-height: 24px; font-size: 16px; width: 100%; margin: 0;" align="center">Avenue Poultech</p>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="row">
                            <table class="" role="presentation" border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed; width: 100%;" width="100%">
                              <tbody>
                                <tr>
                                  <td class="col-12 text-cente" style="line-height: 24px; font-size: 16px; min-height: 1px; font-weight: normal;  width: 100%; margin: 0;" align="left" valign="top">
                                    <p class="text-center" style="line-height: 24px; font-size: 16px; width: 100%; margin: 0;" align="center">
                                      Village: Jagpura, Tehsil: Badnor,
                                      Block: Asind, District: Bhilwara,
                                      Pin: 311204, Rajasthan - India
                                    </p>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <!--[if (gte mso 9)|(IE)]>
                    </td>
                  </tr>
                </tbody>
              </table>
                    <![endif]-->
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
</body>

</html>