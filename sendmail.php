<?php
if (isset($_SESSION['simpleCaptchaAnswer']) && $_POST['captchaSelection'] == $_SESSION['simpleCaptchaAnswer']) {
    // They're human! Continue processing the rest of the form

    $name = $_POST['name'];


    $to = 'walkadock@q.com';
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