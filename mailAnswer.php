<html>
	<head>
		<title>Craft-Helmet</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/mystyle.css">
	</head>
	<body>
		<!--head-->
		<?php require 'header.php';?>
		<!--body-->
		<div class="contactPage">
			<?php
				$success=$_GET["success"];
				if($success){
					echo "<p>Thank you for your comments, <br>you will receive an answer as soon as possible.</p>";
				}else{
					echo "<p>Sorry, <br>there was an error sending your comments</p>";
				}	
			?>
		</div>
		<!--footer-->
		<?php include 'footer.php';?>
	</body>
</html>