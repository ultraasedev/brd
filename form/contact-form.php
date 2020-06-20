<?php

    // youremail here
    $to = "contact@braizerecords.fr";
    $from = 'email';
    $name = 'nom';
    $headers = "de: $from";
    $subject = "Vous Avez Un Message";

    $fields = array();
    $fields{"name"} = "Tu T'appelle ? ";
    $fields{"email"} = "Adresse Email";
    $fields{"phone"} = "Numero de Telephone";
    $fields{"message"} = "Ecrire un  Message....";

    $body = "Voici le message que vous avez recu':\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s:%s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>
