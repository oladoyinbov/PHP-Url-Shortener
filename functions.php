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

// ############ Unused Function ########### 

function Domain(){
    return $_SERVER["SERVER_NAME"];
}



// ######## Views Function ##########

function Views(string $name){
$prefix = ".template.php";
$dir = "views/";
$all = $dir.$name.$prefix;

if(!file_exists($all)){
print "Files Does Not Exist!!!!!";
return;
}

return $all;;
}


// ####### Sanitize Url Function ########

function sanitize_url($url){
$url = filter_var($url, FILTER_SANITIZE_URL);
return $url;

}



// ######### Last Modified Date Function  ############

// USAGE: modified_date(string #file url, string #date_format)

function modified_date($file, $format="M d, Y"){
    $file = filemtime($file);
    return date($format, $file); 
}



// ############### First Url Validation #################

function validate_url($value){
$value = filter_var($value, FILTER_VALIDATE_URL);
return $value;
     
}



// ############ Generate Random 7 Strings ############

function random_value(){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    $n = 7;
 
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
 
    return $randomString;

}



// ############ Validate Url #############

function checkurl($value)
{

    $regex = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';
    return preg_match($regex, $value);
  
}



?>