<?php
session_start();

$formType = $_POST['form_type'] ?? 'enquiry';

$name   = trim($_POST['form_name'] ?? '');
$phone  = trim($_POST['form_phone'] ?? '');
$email  = trim($_POST['form_email'] ?? '');
$course = trim($_POST['form_course'] ?? '');

if (empty($name) || empty($phone) || empty($course)) {
    die("Please fill all required fields.");
}

$to = "admin@busketbell.com";

if ($formType == "application") {

    $subject = "New Admission Application";

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

    </table>

    </body>
    </html>";

} else {

    $subject = "New Admission Enquiry";

    $message = "
    <html>
    <head>
        <title>New Admission Enquiry</title>
    </head>
    <body>

    <h2>New Admission Enquiry</h2>

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
            <td><strong>Course</strong></td>
            <td>{$course}</td>
        </tr>

    </table>

    </body>
    </html>";
}

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html;charset=UTF-8\r\n";
$headers .= "From: SVIST Website <noreply@svist.co.in>\r\n";

if (!empty($email)) {
    $headers .= "Reply-To: {$email}\r\n";
}

if (mail($to, $subject, $message, $headers)) {
    $_SESSION['success'] = "Thank you! Your enquiry has been submitted successfully.";
    header("Location: index.php");
    exit;
}