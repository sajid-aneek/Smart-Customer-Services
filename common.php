<?php

function use_common_page_header() {
    /*
    This function defines the HTML content of the page's header
    */
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
        </head>
        <body>
            <header class="overlay">
                <div class="header-container">
                    <h1 class="header-logo">
                        <a href="./">
                            scs
                        </a>
                    </h1>
                    <nav class="header-nav">
                        <a href="./">Home</a>
                        <a href="./about-us.php">About Us</a>
                        <a href="./services.php">Services</a>
                        <a href="./reviews.php">Reviews</a>
                        <a href="./contact-us.php">Contact Us</a>
                    </nav>
                    <nav class="header-nav">
                        <a href="./sign-in.php">Sign In</a>
                        <a href="./sign-up.php">Sign Up</a>
                        <div class="cart-widget-container">
                            <a href="./shopping-cart.php">
                                <img src="images/shopping-cart.svg" alt="Shopping Cart" width="28" height="28" />
                            </a>
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
        </body>
    </html>
    FOOTER;
}

?>