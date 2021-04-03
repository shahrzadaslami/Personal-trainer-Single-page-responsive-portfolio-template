<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['email']) && $_POST['email'] != '') {
        if (isset($_POST['message']) && $_POST['message'] != '') {

            $email = $_POST['email'];
            $message = $_POST['message'];

            $mailTo = "YOUREMAIL@example.co";
            $headers = "From: " . $email;
            $txt = "YOU HAVE RECEIVED AN EMAIL" . "\r\n" . $message;

            mail($mailTo, $headers, $txt);



            echo "<script>alert('Thank you!');window.location='/';</script>";
        } else {

            echo "<script>alert('You forgot to write your message!');window.location='/';</script>";
        }
    } else {
        echo "<script>alert('Email is required!');window.location='/';</script>";
    }
}