<?php

$message1 = "0@sn9sirppa@#?ia'jgtvryko1";
$message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
$message3 = "aopi?sgnirts@#?sedhtg+p9l!";

$lenght1 = strlen($message1)/2;
$message1 = substr ( $message1,5,$lenght1);
$message1 = str_replace('@','', $message1);
$message1 = str_replace('#','', $message1);
$message1 = str_replace('?','', $message1);
$message1 = strrev($message1);

$lenght2 = strlen($message2)/2;
$message2 = substr ( $message2,5,$lenght2);
$message2 = str_replace('@','', $message2);
$message2 = str_replace('#','', $message2);
$message2 = str_replace('?','', $message2);
$message2 = strrev($message2);

$lenght3 = strlen($message3)/2;
$message3 = substr ( $message3,5,$lenght3);
$message3 = str_replace('@','', $message3);
$message3 = str_replace('#','', $message3);
$message3 = str_replace('?','', $message3);
$message3 = strrev($message3);

echo $message1 ." ". $message2 ." ". $message3;
?>

Retour final : j'aiappris touteslesficelles desstrings
