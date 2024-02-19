<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];

    
    $to = "mercyoyewole48@gmail.com";
    // Email subject
    $subject = "New Form Submission";

   
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "The message I want to tell them is that they should try and do their best."; 

   
    if (mail($to, $subject, $message)) {
        echo "Thank you for contacting us, $name. We will get back to you shortly.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
       header("Location: index.html");
    exit;
}
?>