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

// ############ Text Class ###########

class Text{

    public $text;

    public static function print($text, $tag="", $class=""){

    // ########## Check If Value Passed Into Class is Not Empty #############
        if(!empty($class)){
            $class = ' class="'.$class.'"';
        }else{ print ""; }


    // ########## Check If Value Passed as HTML Tag is Not Empty #############

        if(!empty($tag)){
        $front = '<'.$tag.$class.'>';
        $back = '</'.$tag.'>';
        }else{
            $front ="";
            $back="";
        }


    // ########## Sanitize Text And Print Out The Full Statement ###########
         $text = htmlentities($text);

         print $front.$text.$back;
    }

   
}


// ################ Url Process Class ##################

class Process{



public static function execute($value){

    // ########### Error-Page Redirect Function ###########

    function Redirect($to, $elapse = 100){
        print '
        <script>
        setTimeout(Redir());
        function Redir(){
        window.location = "'.$to.'";
        }
        </script>
        ';
        }
        
    // ###### Include Generated Urls (* You Can Add More, If Needed) #########

    include "urls.php"; 

    // ############# Grab Existing Url Shortened Values In Array ############### 

    foreach($datas as $keys => $item){
        $key[$keys] = $item;
    }

    // ############# Check If The Value of GET Exist In Array Urls #############

        if(!array_key_exists($value, $key)){
            
            Redirect(__home__."/404-page", 0);
         return;
        }
      
        // ######## 301 Redirect To Endpoint Url ############
        header("Location: ".$key[$value]."/", true, 301);
        exit;
       
}

}



?>