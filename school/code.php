<?php
if (isset($_POST["submit-contact"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $comment = $_POST["comment"];

    $to = "whatfaisal12ka4@gmail.com";
    $subject = "New Message From John Doe";
    $body = "<b>Name</b>: $name \n <b>Email</b>: $email \n <b>Mobile No.</b>: $mobile \n <b>Message</b>: $message";
    $header = "From: $name <$email>";

    $mail = mail($to, $subject, $body, $header);

    header("location:index.html");
}
