<?php
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $mobile = $_REQUEST["mobile"];
    $comment = $_REQUEST["comment"];

    $to = "whatfaisal12ka4@gmail.com";
    $subject = "New Message From John Doe";
    $body = "abc";
    $header = "From: $name <$email>";

    $mail = mail($to, $subject, $body, $header);

    header("location:index.html");
?>
