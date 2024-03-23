<?php
$people = array("Taro", "Jiro", "Saburo");
var_dump($people);

echo "<br>";


$people = ["Taro", "Jiro", "Saburo"];
var_dump($people);


echo "<br>";

$people = [["Taro","25歳","men"],["Jiro","20歳","men"],["Hanako","16歳","women"]];

foreach($people as $person){print $person[0]."(".$person[1].$person[2].")";}
