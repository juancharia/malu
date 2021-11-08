<?php 

if (isset($_POST['enviar'])) {
	if (!empty($_POST['name']) && !empty($_POST['asunto']) && !empty($_POST['msg']) && !empty($_POST['eemail'])) { 
		$name = $_POST['name'];
		$asunto = $_POST['asunto'];
		$msg = $_POST['msg'];
		$eemail = $_POST['eemail'];
		$header = "From: noreply@example.com" . "\r\n";
		$header.= "Reply-to: noreply@example.com" . "\r\n";
		$header.= "X-Mailer: PHP/" . phpversion();
		$mail = @mail($eemail,$asunto,$msg,$header); 
		if ($mail) {
			echo "<h4>MASTER TU CORREO HA SIDO ENVIADO<h4>";
			}
		}
	}


?>