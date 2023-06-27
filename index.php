<?php
$pagename="Welcome Page"; //assign pagename to a variable
echo "<title>".$pagename."</title>"; //display name of the page in window 
echo "<body>";


echo"<!DOCTYPE html>
<html>
	<head>
		<!-- link to Bootstrap minified css-->
		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>
		<!-- link to Jquery minified-->
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
		<!-- link to Bootstrap JS -->
		<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin='anonymous'></script>
		<style>
		#banner-image {
			padding-top: 125px;
			padding-bottom: 50px;
			text-align: center;
			color: #f8f8f8;
			background: url('images/banner.jpg');
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover; 
		}
		#banner_content {
			position: relative;
			padding-top: 6%;
			padding-bottom: 6%;
			margin: 12% auto;
			font-family: 'Century Gothic';
			background-color: rgba(68, 76, 83, 0.7);
			max-width: 660px;
		}
		button {
			background-color: white;
			color: #FF0066;
			padding: 16px 40px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 12px;
			margin: 8px 4px;
			-webkit-transition-duration: 0.5s;
			transition-duration: 0.5s;
			cursor: pointer;
			border: 2px solid #48494a;
			border-radius: 20px;
		}
		button:hover{
			background-color: #48494a;
			color: #f2f2f2;
		}
		</style>
	</head>
	<body>
		<div id='banner-image'>
			<div class='container'>
				<div id='banner_content'>
					<h1 >Welcome to Girlyy!!</h1><br><br>
					<a href='home.php'>
						<button>Shop Now</button>
					</a>
				</div>
			</div>
		</div>
	</body>
</html>";

echo "</body>";
?>