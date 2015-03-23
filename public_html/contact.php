<?php

	if ($_POST["submit"]) {


		if(!$_POST['name']) {

			$error="<br/>Please enter your name";
		}
		if(!$_POST['email']) {

			$error.="<br/>Please enter your email";
		}
		if(!$_POST['phone']) {

			$error.="<br/>Please enter your phone#";
		}
		if(!$_POST['message']) {

			$error.="<br/>Please enter your message";
		}

		if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { 
			
			$error.="<br/>Please enter a valid email address";
		}

		if ($error){
			$result = '<div class="alert alert-danger">There were errors in your submission:
			'.$error.'</div>';
		} else{

		if (mail("info@cottonwoodcompost.com", "Comment from website", "Name: ".
	$_POST['name']."

			Email:".$_POST['email']."

			Phone:".$_POST['phone']."

			Message: ".$_POST['message'])) {


			$result = '<div class="alert alert-success">Thank you! We will get in touch!</div>';
			
		} else{
		 
			$result = '<div class="alert alert-danger">Sorry!There was error in sending. Please try again later.</div>';	

		}

	
	}

	} 

?>




<!DOCTYPE html>

<html>
<head>
		<title>CottonWood Compost</title>
		
		<meta charset="utf-8"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!--link rel="stylesheet" href="main.css" type="text/css"/-->
		<link rel="stylesheet" href="main.css" type="text/css"/>
		<link rel="stylesheet" href="contact.css" type="text/css"/>

		<!-- Latest compiled and minified CSS -->
<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"-->


<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css"-->


		
		<link rel="stylesheet" href="bootstrap.css"/>
		<!-- Latest compiled and minified CSS -->
		<!--link rel="stylesheet" href="normalize.css"/-->
		<script src="http://code.jquery.com/jquery-2.1.3.js"></script>
		<script src="main.js"></script>
		

		
		<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>


</head>
<body>
<!-- Menu Bar -->
<?php include 'menubar.php' ?>
<!-- End of Menu Bar -->


<video autoplay loop>
	<source src="video.mov">
	<source src="video.webm"/>

</video>

<section>

<div class="container">
	<div class="row">

		<div class="col-md-6 col-md-offset-3 contactform">
			<h1>Get in touch with us</h1>
			
		<p class="lead"> We'll be right back with you.</p>	
			<?php echo $result; ?>


	<form method="post">

		<div class="form-group">

		<label for="name">NAME:
		<span>
		<input type="text" name="name" placeholder="John Smith" value="<?php echo $_POST['name']; ?>"/>
		</span>
		</label>


		</div>

		<div class="form-group">

		<label for ="email">EMAIL:</label>
		<input type="email" name="email" placeholder="JohnSmith@gmail.com" value="<?php echo $_POST['email']; ?>"/>

		</div>
		<div class="form-group">

		<label for="phone">PHONE:</label>
		<input type="text" name="phone" placeholder="(XXX)-XXX-XXXX"  value="<?php echo $_POST['phone']; ?>"/>

		</div>
		<div class="form-group">

		<label for="message">MESSAGE:</label>
		<textarea  type="text" name="message" class="textarea" placeholder="Feel free to make it lengthy!"  value=" <?php echo $_POST['message']; ?> "></textarea>

		</div>
		<input type="submit" name="submit" class= "btn pull-right" placeholder="" value="submit" style="color:rgba(0,0,0,0)"/>
		
	</form>
	<script type="javascript/css">

		$('input').click(function(){
			$(this).css('width','10px');
		});


	</script>
		
	</div>
	
	</div>

	</div>

</section>


<!---footer-->
<?php include('footer.php') ?>
<!-- End footer-->

<!-- Latest compiled and minified JavaScript -->
<!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script-->



</body>
</html>