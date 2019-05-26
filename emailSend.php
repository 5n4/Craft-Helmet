<?php
	$nameContact=$_POST["nameContact"];
	$emailContact=$_POST["emailContact"];
	$affairContact=$_POST["affairContact"];
	$commentsContact=$_POST["commentsContact"];
	$headers="MIME-Version: 1.0\r\n";
	$headers.="Content-type: text/html; charset=iso-8859-1\r\n";
	$headers.="From: ".$nameContact."< ".$emailContact." >\r\n";
	$success = mail("carlosalfredovega23@gmail.com", $affairContact, $commentsContact, $headers);
	header("location:mailAnswer.php?success=".$success);
?>