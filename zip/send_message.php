<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);


    $to = "ianabungana5@gmail.com";

   
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

 
    $email_body = "You have received a new message from the contact form on your website.\n\n";
    $email_body .= "Full Name: $fullname\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Phone Number: $phone\n";
    $email_body .= "Subject: $subject\n";
    $email_body .= "Message:\n$message\n";

   
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again later.";
    }
} else {
    echo "Invalid request method.";
}
?>