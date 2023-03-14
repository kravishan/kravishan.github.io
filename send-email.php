<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $to = 'ravishankavindu@gmail.com';
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $headers = "From: " . $_POST['name'] . " <" . $_POST['email'] . ">";

  if (mail($to, $subject, $message, $headers)) {
    echo "Your message has been sent.";
  } else {
    echo "There was a problem sending your message.";
  }
}
?>
