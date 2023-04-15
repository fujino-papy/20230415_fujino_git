<?php
function text($score1,$score2,$score3)
{
    $total=$score1+$score2+$score3;
    if($total>210){
        echo$total."点なので合格です";
    }else{
        echo$total."点なので不合格です";
    }
}
$total=(text(80,90,60));

function squere($base,$hight)
{
    return $base*$hight;
}
function triangle($base,$hight)
{
    return $base*$hight/2;
}
function daikei($upperbase,$lowbase,$hight)
{
    return ($upperbase+$lowbase)*$hight/2;
}
echo squere(5,5);
echo"<br/>";
echo triangle(7,8);
echo"<br/>";
echo daikei(4,5,4);