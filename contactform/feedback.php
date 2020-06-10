<?php

$to = "gm@info-tk.com"; 
  $subject = "**Message From ALSAD ALAALY  website**";
  $message = "Name : " . $_POST['username'] . "\n";
  $message .= "Email : " . $_POST['email'] . "\n";
  $message .= "Phone : " . $_POST['phone'] . "\n";
  $message .= "Website : " . $_POST['website'] . "\n";
  $message .= "Message : " . "\r\n". $_POST['message'] ;


#Send email
mail($to, $subject, $message) or die("Error!");
echo "<script>
window.location.href='contact.html';
alert('Your message successfully sent');
</script>";

?>