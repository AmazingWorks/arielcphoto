<?php
$sendto   = "info@capoeira-schule.de";
$usermail = $_POST['email'];
$username = $_POST['name'];
$content  = nl2br($_POST['msg']);

$subject  = "Anfrage von $_POST[name]";
$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";



$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'> Neue Anfrage</h2>\r\n";
$msg .= "<p><strong>Gesendet von:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Nachricht:</strong> ".$content."</p>\r\n";
$msg .= "</body></html>";


if(@mail($sendto, $subject, $msg, $headers)) {
	echo "true";
} else {
	echo "false";
}

?>