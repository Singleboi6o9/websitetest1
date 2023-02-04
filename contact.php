<?php
// Check if the form has been submitted
if(isset($_POST['contact-submit'])) {
  // Retrieve the form data
  $name = $_POST['contact-name'];
  $email = $_POST['contact-email'];
  $message = $_POST['contact-project'];

  // Your email address where the form submissions will be sent to
  $to = 'nirajankadariya@gmail.com';

  // Subject of the email
  $subject = 'New contact form submission';

  // Message body
  $body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

  // Additional headers
  $headers = "From: $name <$email>";

  // Send the email
  if(mail($to, $subject, $body, $headers)) {
    // Redirect to success page
    header('Location: success.html');
    exit;
  } else {
    // Redirect to error page
    header('Location: error.html');
    exit;
  }
}
?>
