<?php
// echo "<pre>";
// echo print_r($UserData);

// echo "</pre>";
//die();

$name = empty($UserData['name']) ? "name" :  $UserData['name'];
$message = empty($UserData['message']) ? "message" :  $UserData['message'];

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

      .w-24,
      .w-24>tbody>tr>td {
        width: 50px !important
      }

      .p-2:not(table),
      .p-2:not(.btn)>tbody>tr>td,
      .p-2.btn td a {
        padding: 8px !important
      }

      .p-4:not(table),
      .p-4:not(.btn)>tbody>tr>td,
      .p-4.btn td a {
        padding: 16px !important
      }

      .pt-5:not(table),
      .pt-5:not(.btn)>tbody>tr>td,
      .pt-5.btn td a,
      .py-5:not(table),
      .py-5:not(.btn)>tbody>tr>td,
      .py-5.btn td a {
        padding-top: 20px !important
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
                                  <div class="row" style="margin-right: -24px;">
                                    <table class="" role="presentation" border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed; width: 100%;" width="100%">
                                      <tbody>
                                        <tr>
                                          <td class="col-12 test-start" style="line-height: 24px; font-size: 16px; min-height: 1px; font-weight: normal; padding-right: 24px; width: 100%; margin: 0;" align="left" valign="top">
                                            <div class="">
                                              <h6 style="padding-top: 0; padding-bottom: 0; font-weight: 500; vertical-align: baseline; font-size: 16px; line-height: 19.2px; margin: 0;" align="left">Hello <?php echo $name; ?>,</h6>
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
                                  <div class="row" style="margin-right: -24px;">
                                    <table class="" role="presentation" border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed; width: 100%;" width="100%">
                                      <tbody>
                                        <tr>
                                          <td class="col-12 test-start" style="line-height: 24px; font-size: 16px; min-height: 1px; font-weight: normal; padding-right: 24px; width: 100%; margin: 0;" align="left" valign="top">
                                            <div class="">
                                              <p style="line-height: 24px; font-size: 16px; width: 100%; margin: 0;" align="left">Thank you for getting in touch with us. We received your message</p>
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
                                  <div class="row" style="margin-right: -24px;">
                                    <table class="" role="presentation" border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed; width: 100%;" width="100%">
                                      <tbody>
                                        <tr>
                                          <td class="col-12" style="line-height: 24px; font-size: 16px; min-height: 1px; font-weight: normal; padding-right: 24px; width: 100%; margin: 0;" valign="top">
                                            <table class="p-4" role="presentation" border="0" cellpadding="0" cellspacing="0">
                                              <tbody>
                                                <tr>
                                                  <td style="line-height: 24px; font-size: 16px; margin: 0;" align="left">
                                                    <div class="">
                                                      <p style="line-height: 24px; font-size: 16px; width: 100%; margin: 0;font-style: italic;" align="left">
                                                        "
                                                        <?php echo $message; ?>
                                                        "
                                                      </p>
                                                    </div>
                                                  </td>
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
                          <table class="pt-5" role="presentation" border="0" cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td style="line-height: 24px; font-size: 16px; padding-top: 20px; margin: 0;" align="left">
                                  <div class="row" style="margin-right: -24px;">
                                    <table class="" role="presentation" border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed; width: 100%;" width="100%">
                                      <tbody>
                                        <tr>
                                          <td class="col-12 test-start" style="line-height: 24px; font-size: 16px; min-height: 1px; font-weight: normal; padding-right: 24px; width: 100%; margin: 0;" align="left" valign="top">
                                            <div class="">
                                              <p style="line-height: 24px; font-size: 16px; width: 100%; margin: 0;" align="left">We will respond to your inquiry.</p>
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
                          <div class="row" style="margin-right: -24px;">
                            <table class="" role="presentation" border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed; width: 100%;" width="100%">
                              <tbody>
                                <tr>
                                  <td class="col-12 p-2 text-center" style="line-height: 24px; font-size: 16px; min-height: 1px; font-weight: normal; width: 100%; margin: 0; padding: 8px 24px 8px 8px;" align="center" valign="top">
                                    <img class="w-24" src="<?php echo site_url("public/frontend/") ?>assets/img/Avenue/Avenue-Logo-232x300.png" alt="logo" style="height: auto; line-height: 100%; outline: none; text-decoration: none; display: block; width: 50px; border-style: none; border-width: 0;" width="50">
                                    <p class="text-center" style="line-height: 24px; font-size: 16px; width: 100%; margin: 0;" align="center">Avenue Poultech</p>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="row" style="margin-right: -24px;">
                            <table class="" role="presentation" border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed; width: 100%;" width="100%">
                              <tbody>
                                <tr>
                                  <td class="col-12 text-cente" style="line-height: 24px; font-size: 16px; min-height: 1px; font-weight: normal; padding-right: 24px; width: 100%; margin: 0;" align="left" valign="top">
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