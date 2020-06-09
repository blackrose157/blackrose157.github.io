<?php
$to = "gm@info-tk.com"; 
  $subject = "**Message From ALSAD ALAALY  website**";
  $message = "Name : " . $_POST['username'] . "\n";
  $message .= "Email : " . $_POST['email'] . "\n";
  $message .= "Phone : " . $_POST['phone'] . "\n";
  $message .= "Website : " . $_POST['Website'] . "\n";
  $message .= "Message : " . "\r\n". $_POST['message'] ;
mail($to, $subject, $message);

?>