<?php

session_start();
require_once('recaptchalib.php');
$privatekey = "6LdzBwoTAAAAAE4OJKraxTQdnLVKGplmoRx0AfwK";
$resp = recaptcha_check_answer ($privatekey,
    $_SERVER["REMOTE_ADDR"],
    $_POST["recaptcha_challenge_field"],
    $_POST["recaptcha_response_field"]);


if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    $_SESSION['form'] = $_POST;
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
        "(reCAPTCHA said: " . $resp->error . ")");
} else {
    // Your code here to handle a successful verification
    $name = $_POST['name'];
    $to = 'kmaillette@gmail.com';
    $subject = 'New Customer ';

    $message = "Name: $name\n";
    $message .= 'Email: ' . $_POST['email'] . "\n";
    $message .= 'City: ' . $_POST['city'] . "\n";
    $message .= 'State: ' . $_POST['state'] . "\n";
    $message .= 'Phone: ' . $_POST['phone'] . "\n";
    $message .= 'Docks: ' . $_POST['docks'] . "\n";
    $message .= 'Lifts: ' . $_POST['boat_lifts'] . "\n";
    $message .= 'Used Docks: ' . $_POST['used_docks'] . "\n";
    $message .= 'Used Lifts: ' . $_POST['used_lifts'] . "\n";
    $message .= 'Services: ' . $_POST['services'] . "\n";
    $message .= 'Welding/Fabrication: ' . $_POST['welding_fabrication'] . "\n";
    $message .= 'Other: ' . $_POST['other'] . "\n";
    $message .= 'Other Information: ' . $_POST['other_info'] . "\n";
    $message .= "\n";


    $headers = 'From: <' . $_POST['email'] . '> ' . $name . "\r\n" .
        'Reply-To: <' . $_POST['email'] . '> ' . $name . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
    header('location: http://www.walkadock.com/thankyou.php');
}

?>
