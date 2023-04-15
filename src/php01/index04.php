<?php
$a=7;

if($a===5){
    echo"\$aは５です";
}elseif($a===7){
    echo "\$aは７です";
}else{
    echo"\$aは５と７以外です";
}
echo"<br/>";

$people="Saburo";

switch($people){
    case"Taro":
        echo"太郎です";
        break;
    case"jiro":
        echo"次郎です";
        break;
    case"Saburo":
        echo"三郎です";
        break;
}
echo"<br/>";

$a=7;
$b=($a>5)?"true":"FALSE";
echo $b;