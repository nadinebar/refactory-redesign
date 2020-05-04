<?php

    if(isset($_POST['confirmation'])) {
        header("Location: /");
    }

    $success_variables = '?type=success&message=Danke für Ihr Vertrauen und Interesse an Refactory. Wir melden uns bei Ihnen sobald Refactory 1.0 kurz vor der Veröffentlichung steht.';
    $failed_variables = '?type=failed&message=Bitte versuchen Sie sich mit ihrer E-Mail Adresse erneut einzutragen oder kontaktieren Sie uns manuell unter contact@refactoryapp.com.';

    $subscription_email = $_POST['email'];

    if(isset($subscription_email)) {
        try {
            file_put_contents('../subscriptions/emails/' . md5($subscription_email), $subscription_email);
        } catch(Exception $e) {
            error_log('Error (save email and/or subscription date to file): ' . $e->getMessage(), 0);
            header("Location: /thank-you" . $failed_variables);
        }

        header("Location: /thank-you" . $success_variables);
    }
    else {
        header("Location: /thank-you" . $failed_variables);
    }

?>
