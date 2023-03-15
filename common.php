<?php

require_once("classes/session.php");

function use_common_page_header() {
    /*
    This function defines the HTML content of the page's header
    */
    
    $curr_login_id = UserSession::get_prop_safely("login_id", "");
    $curr_is_admin = UserSession::get_prop_safely("is_admin", 0);
    $display_style_admin = $curr_is_admin ? "admin" : "";

    $sign_options =
        isset($_SESSION["user_login_id"]) ? 
            <<<ANCHORS_ONLINE
            <span class="login-display $display_style_admin">
                <a href="./sign-out.php">
                    $curr_login_id
                </a>
            </span>
            <div class="cart-widget-container">
                <a href="./shopping-cart.php">
                    <img src="images/shopping-cart.svg" alt="Shopping Cart" width="28" height="28" class="no-user-select" />
                </a>
            </div>
            ANCHORS_ONLINE
            :
            <<<ANCHORS_OFFLINE
            <a href="./sign-in.php">Sign In</a>
            <a href="./sign-up.php">Sign Up</a>
            ANCHORS_OFFLINE;

    $sign_options_mobile =
        isset($_SESSION["user_login_id"]) ? 
            <<<ANCHORS_ONLINE
            <a href="./sign-out.php"><div>Sign Out</div></a>
            ANCHORS_ONLINE
            :
            <<<ANCHORS_OFFLINE
            <a href="./sign-in.php"><div>Sign In</div></a>
            <a href="./sign-up.php"><div>Sign Up</div></a>
            ANCHORS_OFFLINE;

    $login_id_mobile =
        isset($_SESSION["user_login_id"]) ?
            <<<IDENTIFIER_TAG
            <div class="login-display $display_style_admin">$curr_login_id</div>
            IDENTIFIER_TAG
            :
            "";

    echo <<<HEADER
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Smart Customer Services</title>
            <link rel="icon" type="image/x-icon" href="images/favicon.ico">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;600&family=Barlow:wght@400;600&display=swap" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="css/style.css">
            <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
            <script type="text/javascript" src="js/utils.js"></script>
        </head>
        <body>
            <header class="overlay">
                <div class="header-container">
                    <h1 class="header-logo">
                        <a href="./" id="header-logo-anchor">
                            cloth-scs
                        </a>
                    </h1>
                    <nav class="header-nav">
                        <a href="./">Home</a>
                        <a href="./about-us.php">About Us</a>
                        <a href="./services.php">Services</a>
                        <a href="./reviews.php">Reviews</a>
                        <a href="./contact-us.php">Contact Us</a>
                    </nav>
                    <nav class="header-nav header-nav-rside">
                        $sign_options
                    </nav>
                    <nav class="menu-nav">
                        <div class="cart-widget-container">
                            <a href="./shopping-cart.php">
                                <img src="images/shopping-cart.svg" alt="Shopping Cart" width="28" height="28" class="no-user-select" />
                            </a>
                        </div>
                        <div class="menu-widget" onclick="toggleMenu();">
                            <img src="images/menu-toggle.svg" alt="Shopping Cart" width="24" height="24" class="no-user-select" />
                        </div>
                        <div id="menu-container" style="display: none;">
                            $login_id_mobile
                            <a href="./"><div>Home</div></a>
                            <a href="./about-us.php"><div>About Us</div></a>
                            <a href="./services.php"><div>Services</div></a>
                            <a href="./reviews.php"><div>Reviews</div></a>
                            <a href="./contact-us.php"><div>Contact Us</div></a>
                            $sign_options_mobile
                        </div>
                    </nav>
                </div>
            </header>
            <div id="content">
    HEADER;
}

function use_common_page_footer() {
    /*
    This function defines the HTML content of the page's footer
    */
    echo <<<FOOTER
            </div>
            <script type="text/javascript" src="js/drag-events.js"></script>
        </body>
    </html>
    FOOTER;
}

?>