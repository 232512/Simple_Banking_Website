<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title></title>
	<link rel="icon" type="image/png" href="dist/img/mm.png">
	<link rel="stylesheet" href="dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="dist/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="dist/css/owl.carousel.min.css">
	<link rel="stylesheet" href="dist/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="dist/css/animate.css">
	<link rel="stylesheet" href="dist/css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Exo+2:400,500,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>
	<div class="header">
		<div class="container" style="background-color:whitesmoke">
			<div class="row">
				<div class="col-3">
					<div class="logo">
							<img src="img/bank_PNG26.png " style="width:50px; height:50px;"></img>
					</div>
				</div>
				<div class="col-9">
					<div class="header-right">
						<ul>
							<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
							<li><a href=""><i class="fab fa-twitter"></i></a></li>
							<li><a href=""><i class="fab fa-linkedin"></i></a></li>
							<li><a href="index.php">Home</a></li>
						</ul>		
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="contactinfo">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="left">
						<h3>Send Us a Message</h3>
						<form action="" method="post">
							<input type="text" placeholder="Your Name" name="name" required>
							<input type="email" placeholder="Your E-mail" name="email" required>
							<input type="digit" placeholder="Phone Number" name="phone" pattern="[7-9]{1}[0-9]{9}" max="10" title="eg.91+10 digit number" required >
							<textarea placeholder="Your Message" id="" cols="60" rows="5" name="message" required></textarea>
							<input type="submit" value="SEND A MESSAGE" name="submit">
						</form>
					</div>
				</div>
				<div class="col-md-6">
					<div class="right">
						<h3>Contact Info</h3>
						<p>Our Management Training Programmes can be tailored as in-house programmes to address specific issues within your own company.We figure that most people who end up managing other people never really set off to do that in the first place.</p>

						<div class="box">
							<p><i class="fas fa-home"></i><span> R/A 14 #48 Sonadanga 2nd phase</span></p>
							<p><i class="far fa-envelope"></i><span> utterpompously@gmail.com</span></p>
							<p><i class="fas fa-phone"></i><span> (+1)23 254 4578</span></p>
							<p>(+1)23 254 4545</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="map-responsive mapw">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8032363639727!2d103.77347321409187!3d1.292472362118758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da1a558f37cec3%3A0x3fb858b191c21b0f!2sThe%20Sparks%20Foundation!5e0!3m2!1sen!2sin!4v1662919412859!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
    

	<script src="dist/js/jquery-2.2.4.min.js"></script>
	<script src="dist/js/bootstrap.min.js"></script>
	<script src="dist/js/owl.carousel.min.js"></script>
	<script src="dist/js/owl.animate.js"></script>
	<script src="dist/js/superfish.js"></script>
	<script src="dist/js/waypoints.min.js"></script>
	<script src="dist/js/jquery.counterup.min.js"></script>
	<script src="dist/js/custom.js"></script>
</body>
</html>
<?php 
if(isset($_POST['submit'])){
//$connection = mysqli_connect("localhost","root","");
//$db = mysqli_select_db($connection,"banking_system");
include 'config.php';
$date=date("y-m-d");
$query = "insert into contact values(null,'$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[message]','$date')";
$query_run = mysqli_query($conn,$query);
if($query_run){
	?>
	<script type="text/javascript">
	    alert("Message Send Successfully..You may contact very soon!")
		window.location.href = "contact.php";
     </script>
	 <?php
}
else{
	?>
	<script type="text/javascript">
	    alert("Message Does not Send...")
		window.location.href = "contact.php";
     </script>
	 <?php
}
}

?>