<?php 

if (isset($_POST['submit'])) {
    $to = "wisha.jamil13@gmail.com";
    $subject = $_POST['name'];
    $message = "Form submission";
    $from = "WPSummer@cs.gsu.edu";
    $headers = "From:" . $from;

    if (mail($to, $subject, $message, $headers)) {
        echo "Mail Sent.";
    }
    else {
        echo "failed";
    }
}

?>