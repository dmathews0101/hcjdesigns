<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = "Subject : Email from website http://www.hgsdesigns.myfavouritee.com";
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "contact@myfavouritee.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    // header("Location: index.php?mailsent");
    header("Location: http://hcjdesigns.myfavouritee.com/?mailsent");
}