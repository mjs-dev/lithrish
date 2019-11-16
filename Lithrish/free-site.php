<?php
if(isset($_POST['submit'])){
    $to = "contact@lithrish.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . "" . "\n\n" . $_POST['message'];
    $message2 = " " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->

	<title>Lithrish</title>
</head>
<body>
<header class="cd-auto-hide-header">

	<nav class="cd-primary-nav">
		<a href="#cd-navigation" class="nav-trigger">
			<span>
				<em aria-hidden="true"></em>
				Menu
			</span>
		</a> <!-- .nav-trigger -->
		<ul id="cd-navigation">
			<li><a class="active" href="index.html">Home</a></li>
			<li><a href="index.html#services">Services</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</nav> <!-- .cd-primary-nav -->
</header> <!-- .cd-auto-hide-header -->
<main class="cd-main-content sub-nav-hero">
	<div class="container">
		<br><br><br><br><br><br><br><br><br>
		<form action="" method="post">
		First Name: <input type="text" name="first_name"><br>
		Last Name: <input type="text" name="last_name"><br>
		Email: <input type="text" name="email"><br>
		Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
		<input type="submit" name="submit" value="Submit">
		</form>
	</div>

</main> <!-- .cd-main-content -->
<footer>
	<div class="footer" id="nav">
		<ul>
			<li> <a href="index.html">Home</a></li>
			<li><a href="index.html#services">Services</a></li>
			<li><a href="for-fun.html">For fun</a></li>
		</ul>
	</div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
	if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
</script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<script scr="js/games.js"></script>
</body>
</html>
