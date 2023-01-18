/*
 * Follow Me On Twitter - @wildfoster.
 *
 * (c) Oladoyinbo Vincent <support@digitalpoint.com.ng>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/* Get Form Submission Result */
const text = document.getElementById("link");

/* Then Run Copy() To Create A Working Copy To Clipboard Function */
function Copy(){
    text.select();
    text.setSelectionRange(0, 99999); 
    navigator.clipboard.writeText(text.value);

// If Function Result is Successfull, Create a Pop-up alert
    $(".ch").attr("title").text("Copied!");
}


/*  Bootstrap ToolTip JS Code  */
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-tool="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
});



$(document).ready(function(){


    /* Validate Input Value Length When Form is Focused */

    $("#url").keyup(function(){
       
    const urlinput = $(this).val();

        if(urlinput.length < 8){
       $(this).addClass("is-invalid");
        }else{
            $(this).removeClass("is-invalid");
        }
    });


    /* Function to get the BaseName Of The User Input Url */

    function filename(path){
    path = path.substring(path.lastIndexOf("/")+ 1);
    return (path.match(/[^.]+(\.[^?#]+)?/) || [])[0];
}




/* Run Function, If The Url Form Is Submitted */

$(document).on("submit", "#shorten", function(e){

const urldata = $("#url").val();
const firstval = filename(urldata.toLowerCase());
$("#firstval").text(firstval);

/* Post All Data to Process.php, Then Get a Result Feedback */

$.post("Process", {url: urldata}, function(result){


    /* Check If Process Result is 200 */

    if(result == 200){
        $(".err").css("display", "block");
        $(".result").css("display","none");
$("#err_text").html('<h4><i class="fa-solid fa-square-exclamation fa-flip" style="color:red;"></i> Empty Input!</h4>');
return 0;
    }

    /* Check If Process Result is 202 */
    if(result == 202){
        $(".err").css("display", "block");
        $(".result").css("display","none");
$("#err_text").text("Invalid Url");
return 0;
    }

    /* Check If Process Result is 202 */

    if(result == 202){
        $(".err").css("display", "block");
        $(".result").css("display","none");
$("#err_text").text("Invalid Url");
return 0;
    }
    




    /*  Display Result In Respective Fields, If All Validation Is Cleared  */
    $(".err").css("display", "none");
    $(".result").css("display","block");
    $("#resultvisible").text(result);

    //Change ResultvisisbleLink Href Attribute
    var les = $("#resultvisiblelink").attr("href", result);

    // Set Copy Button Attribute Value
    $("#link").val(result);

   
   
    
});



return false;
})
});
  
