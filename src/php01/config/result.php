<?php
$companyname = htmlspecialchars($_POST['companyname'], ENT_QUOTES);
print "私の名前は、" . $companyname . "です" . "<br>";

$shouhin = htmlspecialchars($_POST['shouhin'], ENT_QUOTES);
print "ご希望の商品は、" . $shouhin . "です" . "<br>";

$number = htmlspecialchars($_POST['number'], ENT_QUOTES);
print "注文数は、" . $number . "<br>";