<?php

$score = 0 ;


if($score >=90 && $score <=100){
    echo "A"."<br>";
    if($score ==100){
        echo "Congrats";
    }
}else if($score >=80 && $score <=89){
    echo "B";
}else if($score >=70 && $score <=79){
    echo "C";
}else if($score >=60 && $score <=69){
    echo "D";
}else if($score >=50 && $score <=59){
    echo "E";
}else {
    echo "不合格"."<br>";
    if($score <0){
        echo "Invalid Input"."<br>";
    }else {
            echo "Very bad";
        }
    
}




?>






