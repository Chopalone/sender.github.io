<?php
// Email parameters
$to = "melanieguesdon89@gmail.com";
$subject = "This is fake!";

// Sender details
$sender_name = " Fake Blockchain";
$sender_email = "ksmith@blockchain-kyc.com";

// Email headers
$headers = "From: $sender_name <$sender_email>\r\n";
$headers .= "Reply-To: $sender_name <$sender_email>\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Email content (HTML)
$message = '
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Email Template</title>
<style>
    /* Add your styles here */
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
        color: #333333;
    }
    p {
        color: #666666;
    }
</style>
</head>
<body>
<div class="container">
    <h1>Your Email Heading</h1>
    <p>Hello Jennifer, </p>
    <p>This is how fake emails are sent.</p>
    <p>Regards,<br>
    Haris</p>
</div>
</body>
</html>
';

// Send email
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Email sending failed.";
}
?>
