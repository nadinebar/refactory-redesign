<?php
$success_variables = '?type=success&message=Ihre Nachricht wurde erfolgreich versendet. Wir werden uns bald bei Ihnen melden!';
$failed_variables = '?type=failed&message=Es ist ein Fehler aufgetreten. Bitte versuchen Sie es erneut oder schreiben Sie uns eine E-Mail an info@refactory.de.';

if(isset($_POST['submit'])){
    $to = "mail@nadinebaruth.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Form submission";
    // $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
   //  $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    // $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender

    header('Location: /thank-you' . $success_variables);
} else {
    header("Location: /thank-you" . $failed_variables);
}
?>