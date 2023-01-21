<?php

//QR CODE GENERATOR BY OLADOYINBO VINCENT

header("Content-Type: image/png");

require "autoloader.php";

if(isset($_GET["for"]) && is_string($_GET["for"])){
    $for = $_GET["for"];
include "urls.php";

foreach($datas as $key => $value){
$k_values[] = $key;
}

if(!in_array($for, $k_values)){
    header("Location: ".__home__."/404-page", true, 301);
    Text::print("404 NOT FOUND", "h1");
    return;
}

$attr = sanitize_endpoint($_GET["for"]);
$url = __home__."/r".$attr;
print generate_qrcode($url);

}

?>