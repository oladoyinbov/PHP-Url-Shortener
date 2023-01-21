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


// ####### Sanitize Url/Endpoint Function ########

function sanitize_url($url){
    $url = trim($url);
    $url = filter_var($url, FILTER_SANITIZE_URL);
    return $url;

}

function sanitize_endpoint($val){
$val = strip_tags($val);
$val = trim($val);
$val = filter_var($val, FILTER_SANITIZE_STRING);
return $val;
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
$qrcode = __home__."/generate/qrcode/".$h2[2];

echo '<div class="container">
<div class="d-flex justify-content-center bg-font mb-2"><h4>.   .   .  .</h4></div>
  <div class="alert alert-light d-flex justify-content-between flex-wrap">
    <div class="d-inline-block text-truncate">'.$h2[1].'</div><div><input type="text" class="d-none" id="link2" value="'.$full_url.'" readonly/> <a href="'.$full_url.'">'.$full_url.'</a>  
    <div type="button" class="p-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#qrcode"><i class="fa-duotone fa-qrcode"></i> QR Code</div>
    <div class="p-2 btn btn-primary ch" onclick="Copy2()" data-bs-toggle="modal" data-bs-tool="tooltip" data-bs-target="#myModal" title="Copy!"><i class="fad fa-copy"></i> Copy</div></div>
    
</div>

<div class="modal fade" id="qrcode">
  <div class="modal-dialog">
    <div class="modal-content">

      
      <div class="modal-header">
        <h4 class="modal-title">QR CODE</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <img src="'.$qrcode.'" class="d-flex justify-content-center" /><br/>

        <a href="'.$full_url.'"><div type="button" class="btn btn-primary d-flex justify-content-center">Visit Link</div></a>
      </div>

      
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
';

}



// ############### First Url Validation #################

function validate_url($value){
    $value = trim($value);
    $value = filter_var($value, FILTER_VALIDATE_URL);
    return $value;
     
}

######### QR CODE GENERATOR #########
function generate_qrcode($url){
$googleapi = "https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=".$url."&choe=UTF-8";
$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_URL, $googleapi);
$url = curl_exec($curl);
return $url;
}



// ############ Generate Random 7 Strings ############

function random_value(){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    $n = 5;
 
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
 
    return $randomString;

   
}



// ############ Validate Url #############

function checkurl($value)
{
    $value = trim($value);
    $url_validation_regex = "/^https?:\\/\\/(?:www\\.)?[-a-zA-Z0-9@:%._\\+~#=]{1,256}\\.[a-zA-Z0-9()]{1,6}\\b(?:[-a-zA-Z0-9()@:%_\\+.~#?&\\/=]*)$/"; 
    return preg_match($url_validation_regex, $value);
}


function checkbasename($value){
$value = trim($value);
$base = basename($value);
$mainbase = basename(__home__);
if($base == $mainbase){
echo true;
}
else{
   echo false; 
}

}



?>