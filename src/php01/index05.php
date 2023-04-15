<?php
$Fizz="Fizz";
$Buzz="Buzz";
$FizzBuzz="FizzBuzz";

for($i=1; $i<=50; $i++){
    if($i%15==0){
        echo$FizzBuzz;
    }elseif($i%3==0){
        echo$Buzz;
    }elseif($i%5==0){
        echo$Fizz;
    }else{
        echo$i;
    }
    echo"<br/>";
}

for ($i = 1; $i < 6; $i++) {
    for ($j = 1; $j < 6; $j++){
    echo "●";
    }
  echo "<br />";
}
