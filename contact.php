<?php
$title = "Contact Us";
$desc = "";
include("includes/header.php"); ?>

<main role="main">
	<div class="pagetitle">
		<h1>Contact</h1>
	</div>
	<section class="contact">
		<a href="mailto:info@davisbrook.co.uk">
		<div class="contactarea"><img src="images/emailcircle.png" alt="Email - Davisbrook Ltd" />
		<h2>Email</h2>
		<h5>info@davisbrook.co.uk</h5>
		</div>
		</a>
		<a href="tel:01614397510">
		<div class="contactarea"><img src="images/phonecircle.png" alt="Phone Office - Davisbrook Ltd" />
		<h2>Phone</h2>
		<h5>01614 397510</h5>
		</div>
		</a>
		<a href="tel:07879495614">
		<div class="contactarea"><img src="images/mobilecircle.png" alt="Phone Mobile - Davisbrook Ltd" />
		<h2>Mobile</h2>
		<h5>07879 495614</h5>
		</div>
		</a>
		<a href="https://maps.google.com/maps?ll=53.477584,-2.503399&z=11&t=m&hl=en-GB&gl=GB&mapclient=embed">
		<div class="contactarea"><img src="images/mapcircle.png" alt="Phone Mobile - Davisbrook Ltd" />
		<h2>Address</h2>
		<h5>Manchester, United Kingdom</h5>
		</div>
		</a>
	</section>
	<section class="contactform">
		<form id="contactform" name="contact" method="post" action="process.php" onSubmit="alert('Message Successfully Sent!')">
		    <input type="text" name="Name" id="Name" size="30" placeholder="Name" required=""> 
			<input type="text" name="Email" id="Email" size="30" placeholder="Email" required=""> 
			<textarea name="Message" id="Message" placeholder="Message" required></textarea>
			<input id="submit" type="submit" name="submit" value="Send" />  
		</form>
	</section>
	
	
</main>


<?php include("includes/footer.php"); ?>