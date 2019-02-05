<?php
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email;']
    $phonenumber = $_POST['phonenumber'];
    $message = $_POST['message'];

    $email_from ='NvisibleFokus';
    $email_subject = 'New Message from NvisFokus'
    $email_body = "Name: $name.\n".
                  "LastName: $lastname.\n".
                  "Email: $email.\n".
                  "PhoneNumber: $phonenumber.\n".
                  "Message: $message.\n";
    
    $to ="andrewschrumpf@gmail.com";
    $headers = "from: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers)

    header("loaction: index.html");
                

?>