<?php
function gokaku($score1, $score2, $score3)
{
    $sum = $score1 + $score2 + $score3;
    if ($sum > 210) {
        echo "合格点は" . $sum . "なので合格です";
    } else {
        echo "合格点は" . $sum . "なので不合格です";
    }
}
echo gokaku(80, 150, 20);

echo "<br>";

function triangle($score1, $score2)
{
    $area = $score1 * $score2 / 2;
    return $area;
}

echo triangle(3, 5);

echo "<br>";

function rectangle($score1, $score2)
{
    $area = $score1 * $score2;
    return $area;
}

echo rectangle(3, 5);

echo "<br>";

function daikei($score1, $score2, $score3)
{
    $area = ($score1 + $score2) * $score3 / 2;
    return $area;
}

echo daikei(2, 3, 5);