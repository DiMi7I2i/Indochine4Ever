<?php
// Inclusion du header
include 'ini.php';

$to = "dimitri.fernandez@gmail.com";
$subject = $_POST['txtSubject'];
$from = $_POST['txtMail'];
$name = $_POST['txtName'];
$message = $_POST['txtMessage'];
$content="
		<html>
			<head></head>
			<body>
				<table border=0>
					<tr>
						<td>Nom: </td><td>".$name."</td>
					</tr>
					<tr>			
						<td>Mail:</td><td>".$from."</td>
					</tr>
					<tr>
						<td>Message:</td><td>".$message."</td>
					</tr>
				</table>
			</body>
		</html>";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


try {
	if (mail($to, $subject, $content, $headers)){
		echo("<p>Message successfully sent!</p>");
	} else {
		echo("<p>Message delivery failed...</p>");
	}
	
} catch (Exception $e) {
	echo 'Erreur: '.$e;
}


?>