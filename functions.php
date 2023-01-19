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


// ######

function urlhistory(){

$ip = $_SERVER['REMOTE_ADDR'];
if(isset($_SESSION["urlhistory"]["history"])){
$hist = $_SESSION["urlhistory"]["history"];
$h2 = explode("()", $hist);
if($ip != $h2[0]){
    echo Text::print(__homepage_no_history_text____, "h4", "bg-font");
return;
}
}else{
    echo Text::print(__homepage_no_history_text____, "h4", "bg-font");
    return; 
}

$full_url = __home__."/r".$h2[2];

echo '<div class="container">
<div class="d-flex justify-content-center bg-font mb-2"><h4>.   .   .  .</h4></div>
  <div class="alert alert-light d-flex justify-content-between flex-wrap">
    <div class="d-inline-block text-truncate">'.$h2[1].'</div><div><input type="text" class="d-none" id="link2" value="'.$full_url.'" readonly/> <a href="'.$full_url.'">'.$full_url.'</a>  <div class="p-2 btn btn-primary ch" onclick="Copy2()" data-bs-toggle="modal" data-bs-tool="tooltip" data-bs-target="#myModal" title="Copy!"><i class="fad fa-copy"></i></div></div>
</div>';

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
    $n = 4;
 
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