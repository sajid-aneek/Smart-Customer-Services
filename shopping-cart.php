<?php
require_once("common.php");
session_start();
use_common_page_header();

if (!isset($_SESSION["user_login_id"])) {
    header("Location: .");
    exit();
}
?>

Shopping Cart

<?php
use_common_page_footer();
?>