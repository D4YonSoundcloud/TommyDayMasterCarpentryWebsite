<?php

if (isset($_POST['submit'])) {
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $textarea = $_POST['textarea']; 

    $mailTo = 'mattd4y@gmail.com';
    $headers = 'From: '.$mailFrom;
    $txt = 'You have recieved an e-mail from '.$mailFrom.".\n\n".$textarea;

    

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");

}

