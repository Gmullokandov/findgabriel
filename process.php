<?php
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $emailFrom = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        
        $to = "Gaby.Mullokandov36@qmail.cuny.edu";
        $headers = "From: ".$emailFrom;
        $subject = "Contact Form";
        $txt = "You have received an e-mail from ".$name."\nPhone: ".$phone."\nE-Mail: ".$emailFrom."\n\n".$message;
        
        mail($to, $subject, $txt, $headers);
        header("Location: index.html?mailsent");
    }
?>