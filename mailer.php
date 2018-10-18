<?php

$mailSum = $_REQUEST['mailSum'];


$wiggle = strrpos($mailSum, '~');
$star = strrpos($mailSum, '*');

$email = substr($mailSum, 0, $wiggle);
$subject_line = substr($mailSum, ($wiggle+1), ($star - $wiggle - 1));
$emailBody = substr($mailSum, ($star+1), (strlen($mailSum)- $star - 1));

$emailBody_edit = ''

for ($i=0 ; $i<strlen($emailBody); $i++){
    if ($emailBody[i] !== ','){
        $emailBody_edit = $emailBody_edit + $emailBody[i];
    }
}


$rec_mail = 'shivangjoshis4@gmail.com';#$_REQUEST['recMail'];
$subject = 'testing' ; # $_REQUEST['subject'];
$mailBody = $emailBody_edit ;#$_REQUEST['body'];
  
mail($email, "$subject_line", $mailBody);
  
?>
