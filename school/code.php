<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $comment = $_POST["comment"];

    $to = "whatfaisal12ka4@gmail.com";
    $subject = "New Message From John Doe";
    $body = "abc";
    $header = "From: $name <$email>";

    $mail = mail($to, $subject, $body, $header);

    header("location:index.html");
?>
