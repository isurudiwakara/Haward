<?php


$fname = $_POST["f"];
$lname = $_POST["l"];
$email = $_POST["e"];
$mobile = $_POST["m"];
$birthday = $_POST["b"];
$gender = $_POST["g"];
$course = $_POST["c"];


if ($gender == "1") {

    $gname = "Male";
} else {

    $gname = "Female";
}


if ($course == "1") {

    $cname = "Hotel";
} else if ($course == "2") {

    $cname = "Caregiving";
} else if ($course == "3") {

    $cname = "Car Detailing";
} else if ($course == "4") {

    $cname = "Hair and Beauty";
} else if ($course == "5") {

    $cname = "Welding";
} else if ($course == "6") {

    $cname = "Housemaid";
}

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;






$code = uniqid();


$mail = new PHPMailer;
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'lakbro100@gmail.com';
$mail->Password = 'cksclornwzvjbjvk';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('lakbro100@gmail.com', 'New Registraion');
$mail->addReplyTo('lakbro100@gmail.com', 'New Registraion');
$mail->addAddress("tharidu.java@gmail.com");
$mail->isHTML(true);
$mail->Subject = 'Harward College New Registration';
$bodyContent = '<!DOCTYPE html>

<head>
    <title>Email Template</title>
    <style>
        /* Reset some default styles */
        body, table {
            margin: 0;
            padding: 0;
            border: 0;
            outline: 0;
            font-size: 100%;
            font-family: Arial, sans-serif;
            line-height: 1.5;
        }

        /* Set the background color */
        body {
            background-color: #f4f4f4;
        }

        /* Main container */
        .container {
            width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Header */
        .header {
            background-color: #333333;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }

        /* Content */
        .content {
            padding: 20px;
        }

        /* Footer */
        .footer {
            background-color: #f9f9f9;
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #888888;
        }

        .highlight {
            font-weight: bold;
            color: #ff6600;
          }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Email Template</h1>
        </div>
        <div class="content">
            <p>This is the content of the email.</p>
        </div>

        <div class="container">
        <h1>Registration Details</h1>
        
        <p><span class="highlight">First Name:</span>' . $fname . '</p>
        <p><span class="highlight">Last Name:</span> ' . $lname . '</p>
        <p><span class="highlight">Email:</span> ' . $email . '</p>
        <p><span class="highlight">Mobile:</span>  ' . $mobile . '</p>
        <p><span class="highlight">Birthday:</span>  ' . $birthday . '</p>
        <p><span class="highlight">Gender:</span>  ' . $gname . '</p>
        <p><span class="highlight">Course:</span> ' . $cname . '</p>
      </div>

        <div class="footer">
            <p>&copy; 2023 Harward College. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
            ';
$mail->Body    = $bodyContent;

if (!$mail->send()) {
    echo ('Verification code sending failed');
} else {
    echo ('Success');
}
