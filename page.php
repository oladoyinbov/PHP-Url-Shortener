<?php

if(isset($_GET["page"])){

    require "autoloader.php";
    
    require "header.php";


if(isset($_GET["page"]) && $_GET["page"] == "contact"){

require Views("contact");

}elseif(isset($_GET["page"]) && $_GET["page"] == "privacy-policy"){

require Views("privacy");

}elseif(isset($_GET["page"]) != "contact" || isset($_GET["page"]) == "privacy-policy"){

   require Views("404");

}
    require "footer.php";

}else{

   header("Location: 404-page", true, 301);

}



?>