<?php
require_once("common.php");
session_start();
use_common_page_header();

require_once("classes/query.php");
$result = Query::run("SELECT * FROM Item");

echo <<<PRODUCT_LIST_START
<div class="product-list">
PRODUCT_LIST_START;

while($row = $result->fetch_assoc()) {
    echo <<<PRODUCT
    <div class="product-box" draggable="true" ondragstart="dragProduct(event)">
        <img src="{$row["image_url"]}" alt="{$row["name"]}" draggable="false" class="no-user-select">
        <div class="product-description">
            <span><b>{$row["name"]}</b></span>
            <br>
            <span>\${$row["price"]}</span>
        </div>
    </div>
    PRODUCT;         
}

echo <<<PRODUCT_LIST_END
</div>
PRODUCT_LIST_END;

use_common_page_footer();
?>