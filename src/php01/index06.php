<?php
function gokaku($score1,$score2,$score3){$sum = $score1 + $score2 + $score3 ;
if($sum>210){echo "合格点は".$sum."なので合格です";}else{echo "合格点は".$sum."なので不合格です";}}
echo (gokaku(80,20,20));

