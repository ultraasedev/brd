<?php

    // youremail here
    $to = "contact@braizerecords.fr";
    $from = 'email';
    $name = 'nom';
    $headers = "de: $from";
    $subject = "Vous Avez Un Message";
    

    $fields = array();
    $fields{"email"} = "Ton Adresse Email";

    $body = "Voici ce que vius avez recu, de 'BraizeRecords - NEWSLETTER ':\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s:%s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>
