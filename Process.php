<?php

/*
 * Follow Me On Twitter - @wildfoster.
 *
 * (c) Oladoyinbo Vincent <support@digitalpoint.com.ng>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);
include "Class.php";
include "functions.php";
require "config.php";


if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["url"])){


    //CHECK IF URL INPUT IS VALID
    if(empty($_POST["url"]) || $_POST["url"] == 0 && !is_link($_POST["url"])){
        Text::print("200");
        return;
    }
    
    if(validate_url($_POST["url"]) == false){
        Text::print("202");
        return;
    }
    
    if(checkurl($_POST["url"]) == 0){
        Text::print("202");
    return;
    }
    
    
    
    
    
    //INSERT CREATED SHORTNED URL IN urls.php (datas[]) ARRAY
    
    $url = sanitize_url($_POST["url"]);
    $base = basename($url);
    $rand = random_value();
    $destination = "\$datas['".$rand."'] = '".$url."';";
    
    //OPEN FILE AND SAVE SHORTENED LINKS USING @fopen and @fwrite
    $furls = fopen("urls.php", "a");

    if(fwrite($furls, $destination.PHP_EOL) == TRUE){
        $result = __home__."/r/".$rand;
        Text::print($result);

    };
    fclose($furls);
    
    }
    


?>