<?php 
include "koneksi.php";

header("refresh:5;url=index.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
    content="width=device-width, 
    initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="notification-container">
        <div class="cardnotif-container"> 
            <div class="notif-center">
                <div class="notifcenter-container">
                    <strong>Thank You</strong> 
                    <div class="text-website">
                        "Your message has been sent, please wait for our response on your email or WhatsApp."
                    </div>
                    <a href="index.php" class="button-link">
                        Close
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>