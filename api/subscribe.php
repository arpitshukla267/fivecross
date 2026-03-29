<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = sendEmail($email);
        if ($result) {
            echo 'success';
        } else {
            http_response_code(500);
            echo 'Error sending email';
        }
    } else {
        http_response_code(400);
        echo 'Invalid email address';
    }
}

function sendEmail($email) {
    $to = 'umair.makent@gmail.com';
    $subject = 'New Subscription';
    $message = '<p>New subscription from: ' . $email . '</p>';
    $headers = [
        'From' => 'tamir@nexgeno.in',
        'Reply-To' => 'tamir@nexgeno.in',
        'Content-Type' => 'text/html; charset=UTF-8'
    ];

    // Convert headers array to string
    $headers_str = '';
    foreach ($headers as $key => $value) {
        $headers_str .= $key . ': ' . $value . "\r\n";
    }

    // Send email using PHP's mail function
    $mail_result = mail($to, $subject, $message, $headers_str);

    if (!$mail_result) {
        error_log("Mail failed: to=$to, subject=$subject, headers=$headers_str");
    }

    return $mail_result;
}
?>
