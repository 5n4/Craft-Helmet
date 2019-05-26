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
			<form name="contactForm" action="emailSend.php" method="post">
				<p>Enter your data:</p>
				<table class="contactTable">
					<tr>
						<td>
							<br><label for="name">Name: *</label>
						</td>
						<td>
							<br><input type="text" name="nameContact" required>
						</td>
					</tr>
					<tr>
						<td>
							<br><label for="email">E-mail: *</label>
						</td>
						<td>
							<br><input type="text" name="emailContact" required>
						</td>
					</tr>
					<tr>
						<td>
							<br><label for="affair">Affair: *</label>
						</td>
						<td>
							<br><input type="text" name="affairContact" required>
						</td>
					</tr>
					<tr>
						<td>
							<br><label for="comments">Comments: *</label>
						</td>
						<td>
							<br><textarea name="commentsContact" maxlength="500" cols="30" rows="5" required></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2" class="tdSend">
							<br><input type="submit" value="Send">
						</td>
					</tr>
				</table>
			</form>
		</div>
		<!--footer-->
		<?php include 'footer.php';?>
	</body>
</html>