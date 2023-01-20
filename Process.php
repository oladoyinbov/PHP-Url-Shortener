<?php
declare(strict_types=1);

session_start();

/*
 * Follow Me On Twitter - @wildfoster.
 *
 * (c) Oladoyinbo Vincent <support@digitalpoint.com.ng>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


include "Class.php";
include "functions.php";
require "config.php";


if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["url"])){


    //CHECK IF URL INPUT IS VALID
    if(empty($_POST["url"]) || strlen($_POST["url"]) == 0){
        Text::print("302");
        return;
    }
    
    if(checkurl($_POST["url"]) == 0){
        Text::print("301");
    return;
    }
    
    if(checkurl($_POST["url"]) == 0){
        Text::print("301");
    return;
    }
    
    if(checkbasename($_POST["url"]) == true){
     Text::print("303");
     return;
    }
    
    
    //INSERT CREATED SHORTNED URL IN urls.php (datas[]) ARRAY
    
    $url = sanitize_url($_POST["url"]);
    $base = basename($url);
    $rand = random_value();
    $user_ip = $_SERVER['REMOTE_ADDR'];
    $destination = "\$datas['".$rand."'] = '".$url."';";
    
    //OPEN FILE AND SAVE SHORTENED LINKS USING @fopen and @fwrite
    // fopen( string $filename , string $mode [, bool $use_include_path [, resource $context ]]): resource
    $furls = fopen("urls.php", "a");


    // fwrite( resource $handle , string $string [, int $length ]): int
    if(fwrite($furls, $destination.PHP_EOL) == TRUE){
        $result = __home__."/r".$rand;
        Text::print($result);

        $history_format = $user_ip."()".$url."()".$rand;
        $history = array(
        'history' => $history_format
     );
        $_SESSION["urlhistory"] = $history;

    };

    // fclose( resource $handle ): bool
    fclose($furls);
    
    }
    


?>