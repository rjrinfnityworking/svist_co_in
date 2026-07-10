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


    $subject = "Admissions Open 2026";
    
        $wbjeeRow = '';
        
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
        <title>Admissions Open 2026</title>
    </head>
    <body>

    <h2>Admissions Open 2026</h2>

    <table border='1' cellpadding='8' cellspacing='0' style='border-collapse:collapse;'>

        <tr><td><strong>Name</strong></td><td>{$name}</td></tr>
        <tr><td><strong>Phone</strong></td><td>{$phone}</td></tr>
        <tr><td><strong>Course</strong></td><td>{$course}</td></tr>
        {$wbjeeRow}

    </table>

    </body>
    </html>";

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html;charset=UTF-8\r\n";
$headers .= "From: SVIST Website <noreply@svist.co.in>\r\n";

if (!empty($email)) {
    $headers .= "Reply-To: {$email}\r\n";
}
if ($formType == "application") {
//$secret = "6LdkkUstAAAAAMdUKSgPmxekvOee3e-DGvL_eKJK";
$secret = "6Ld_jUstAAAAAAOuwJpkGso528txSvW4MO5EdoqM";
$captcha = $_POST['g-recaptcha-response'] ?? '';

$verify = file_get_contents(
    "https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$captcha}"
);

$response = json_decode($verify);

if (!$response->success) {

    $_SESSION['error'] = "Please complete the Google reCAPTCHA.";

    header("Location: index.php");
    exit;
}
}

if (mail($to, $subject, $message, $headers)) {
    $_SESSION['success'] = "Thank you! Your enquiry has been submitted successfully.";
    //header("Location: index.php");
    header("Location: thank-you.php");
    exit;
}