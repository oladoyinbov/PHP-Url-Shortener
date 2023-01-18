<div class="p-5 my-5 bg-primary text-white ">
<div class="d-flex justify-content-between">
  <div><?php Text::print("Generate Shorten URLs. ", "h4", "bg-font"); ?></div> <div><img src="storage/link2.svg" width="200px" height="200px"/></div>
 </div>
 <div class="d-flex justify-content-center"><i class="fa-duotone fa-chevrons-down fa-fade fa-2x"></i></div>
 </div>

<div class="container">
<form id="shorten">
<div class="mb-3">
<label class="form-label"><?php Text::print("Enter Long Url:", "p"); ?> </label>
<input type="url" placeholder="Enter Link" name="url" id="url" class="form-control"/>
</div>
<input type="submit" value="SHORTEN.." class="btn btn-primary"/>
</form>

</div><br/>

<div class="container err">
<div class="alert alert-danger">
<div id="err_text"></div>
</div>
</div>

<div class="container result">
<div class="alert alert-success d-flex justify-content-between flex-wrap">
    <div id="firstval"></div><div><input type="text" id="link" value="NEW LINK2" readonly/> <a href="/jsjs" id="resultvisiblelink"><span id="resultvisible"></span></a>  <div class="p-2 btn btn-primary ch" onclick="Copy()" data-bs-toggle="modal" data-bs-tool="tooltip" data-bs-target="#myModal" title="Copy!"><i class="fad fa-copy"></i> <?php Text::print("Copy"); ?></div></div>
</div>
</div>

<section>
<div class="p-5  bg-warning">

<h2 class="d-flex justify-content-center bg-font m-2 text-black"><?php Text::print("Frequently Asked Questions (FAQ)"); ?></h2>
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
      <?php Text::print("What Is A Url Shortner?"); ?>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><?php Text::print("A URL shortener, also known as a link shortener, seems like a simple tool, but it is a service that can have a dramatic impact on your marketing efforts"); ?></div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      <?php Text::print("Benefit Of Shortened Links?"); ?>
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><?php Text::print("a short URL is also easier to incorporate into your collateral – whether you’re looking to engage with your customers offline or online.
      our platform was built to help you make every point of connection between your content and your audience ignite action."); ?>
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
      <?php Text::print("Is My Data Safe?"); ?>
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
    <div class="accordion-body"><?php Text::print("Yes it's 100% safe, we value privacy more than anything."); ?></div>
    </div>
  </div>
</div><br/>

<div class="d-flex justify-content-center"><a href="pages/contact"><div class="btn btn-primary m-1 bg-font"><?php Text::print("Contact Us", "h5"); ?></div></a> <a href="pages/privacy-policy"><div class="btn btn-primary m-1 bg-font"><?php Text::print("Privacy Policy", "h5");  ?></div></a></div>
</div>

</section>
