<?php
$title = "Contact Us";
$desc = "";
include("includes/header.php"); ?>

<main role="main">
	<div class="pagetitle">
		<h1>Contact</h1>
	</div>
	<section class="content contact">
		<section class="contentleft">
			<p><strong>Email –</strong> <a href="info@davisbrook.co.uk">info@davisbrook.co.uk</a></p>
			<p><strong>Office –</strong> <a href="tel:01614397510">0161 439 7510</a></p>
			<p><strong>Mobile –</strong> <a href="tel:07879495614">07879 495614</a></p>
			<a href="info@davisbrook.co.uk"><img src="images/email.png" alt="Email Davisbrook Ltd" /></a>
			<a href="01614397510"><img src="images/phone64.png" alt="Phone Davisbrook Office" /></a>
			<a href="07879495614"><img src="images/mobile64.png" alt="Phone Davisbrook Mobile" /></a>
		</section>
		<section class="contentright">
			<div class="contactform">
				<form id="contactform" name="contact" method="post" action="process.php" onSubmit="alert('Message Successfully Sent!')">
				    <input type="text" name="Name" id="Name" size="30" placeholder="Name" required=""> 
				    <input type="text" name="Email" id="Email" size="30" placeholder="Email" required=""> 
				    <textarea name="Message" id="Message" placeholder="Message" required></textarea>
				    <input id="submit" type="submit" name="submit" value="Send" />  
				</form>
			</div>
		</section>
	</section>
</main>


<?php include("includes/footer.php"); ?>