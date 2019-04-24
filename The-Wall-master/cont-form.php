<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['mail'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mailTo = "Blen2001@outlook.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have recieved an E-mail from ".$name.".\n\n".$message ;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: header.php?mailsend");
}




 ?>
