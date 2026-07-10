<?php
session_start();

$name   = trim($_POST['form_name'] ?? '');
$phone  = trim($_POST['form_phone'] ?? '');
$email  = trim($_POST['form_email'] ?? '');
$course = trim($_POST['form_course'] ?? '');
$wbjee = trim($_POST['form_wbjee'] ?? '');

if (empty($name) || empty($phone) || empty($course)) {
    die("Please fill all required fields.");
}

  //$to = "admin@busketbell.com";

   $to = "arindam.paul@svist.co.in";


    $subject = "New Admission Application";
            if (!empty($wbjee)) {
                $wbjeeRow = "
                <tr>
                    <td><strong>WBJEE Score</strong></td>
                    <td>{$wbjee}</td>
                </tr>";
            }
    $message = "
    <html>
    <head>
        <title>New Admission Application</title>
    </head>
    <body>

    <h2>New Admission Application</h2>

    <table border='1' cellpadding='8' cellspacing='0' style='border-collapse:collapse;'>

        <tr>
            <td><strong>Name</strong></td>
            <td>{$name}</td>
        </tr>

        <tr>
            <td><strong>Phone</strong></td>
            <td>{$phone}</td>
        </tr>

        <tr>
            <td><strong>Email</strong></td>
            <td>{$email}</td>
        </tr>

        <tr>
            <td><strong>Course</strong></td>
            <td>{$course}</td>
        </tr>
        
        {$wbjeeRow}

    </table>

    </body>
    </html>";

    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8\r\n";
    $headers .= "From: SVIST Website <noreply@svist.co.in>\r\n";
    
    if (mail($to, $subject, $message, $headers)) {
        $_SESSION['success'] = "Thank you! Your enquiry has been submitted successfully.";
        //header("Location: index.php");
        header("Location: thank-you.php");
        exit;
    }