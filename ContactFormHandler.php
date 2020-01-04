<?php

  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

  $email_from = '$visitor_email';

  $email_subject = $_POST['subject'];

  $email_body = "Full Name: $name.\n".
                  "Email Adress: $visitor_email.\n".
                    "Message: $message.\n";

  $to = "bendimarco20@gmail.com"

  $headers = "From: $email_from \r\n";

  $headers = "Reply-To: $visitor_email \r\n";

  mail($to, $email_subject, $email_body, $headers);

  header("Location: PersonalSite-ContacyMe.html");

?>
