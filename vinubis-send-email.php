<?php if(!defined('ABSPATH')) exit; ?>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);

        if (empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }

        $recipient = "wordpress@vinubis.com";
        $subject = "New Message from Vinubis WP Plugin";
        $email_content = "You received a new message from the Feedback Form on the Vinubis WP Plugin. Here are the details:\n\n";
        $email_content .= "Email: $email\n";
        $email_content .= "Message: $message\n";
        $email_headers = "From: <".$email.">";

        if (wp_mail($recipient, $subject, $email_content, $email_headers)) {
            echo "Thank You! Your message has been sent.";
        } else {
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

    } else {
        echo "There was a problem with your submission, please try again.";
    }

?>