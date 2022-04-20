<?php

// $message_sent = false;
if (isset($_POST['submit'])) {
    if ($_POST['name'] != '' || $_POST['email'] != '') {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $service = $_POST['service'];

            $subject = 'FORM SUBMISSION';

            $mailTo = 'mina@live.com';
            $headers = 'From: ' . $email;
            $txt =
                'You have received an e-mail from ' .
                $name .
                ".\n\n" .
                'For ' .
                $service .
                'service' .
                ".\n\n" .
                $message;

            // $message_sent = true;
            mail($mailTo, $subject, $txt, $headers);
            header('Location: index?mailsend');
        } else {
            $invalid_class_name = 'form-invalid';
        }
    }
}
?>
