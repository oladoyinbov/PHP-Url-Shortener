<div class="p-5 my-5 bg-primary text-white bg-font"><h1><?=Text::print("Contact Us")?></h1></div>
<div class="my-3 p-5">
<form action="<?=__home__?>/contact.php" method="POST">

<label for="name" class="form-label">Full Name:</label>
<input type="text" placeholder="Enter Name" name="name" class="form-control" required/>

<label for="email" class="form-label">Email:</label>
<input type="text" placeholder="Enter Email" name="to" class="form-control" required/>

<label for="subject" class="form-label">Subject:</label>
<input type="text" placeholder="Enter Subject" name="subject" class="form-control" required/>

<label for="message">Message:</label>
<textarea class="form-control" rows="5" id="comment" name="message" required></textarea>

<input class="btn btn-primary mt-2" type="submit"/>
</form>
</div>
<div class="p-5 bg-warning container">
<?=Text::print("Contact Us:".__phone__)?>

<div class="mt-4">Follow Us: <a href="<?=__facebook__?>"><i class="fa fa-facebook fa-brands fa-2x text-dark"></i></a>  <a href="<?=__twitter__?>"><i class="fa fa-twitter fa-brands text-dark fa-2x"></i></a> <a href="<?=__instagram__?>"><i class="fa fa-instagram fa-brands fa-2x text-dark"></i></a>  <a href="<?=__snapchat__?>"><i class="fa fa-snapchat fa-brands fa-2x text-dark"></i></a></div>
</div>