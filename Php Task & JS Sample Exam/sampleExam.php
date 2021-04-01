<?php
$answer = "yes";
$ans = "no";
function whatAmIGame(){
    echo "Do you fly?";
    if($answer = "yes"){
        echo "<br>Yes";
        echo "<br>Are you wild?";
        if($ans = "yes"){
            echo "<br> Yes";
            echo "<br>You are an Eagle";
        }else{
            echo "<br>You are a Parrot";
        }
    }elseif($answer = "no"){
        echo "<br> No";
        echo "<br> Do you live under sea?";
        if($answer = yes){
            echo "<br> Yes";
            echo "<br> Are you wild?";
            if($answer = yes){
                echo "<br> Yes";
                echo "<br> You are a Shark";
            }else{
                echo "<br> You are a Dolphine";
            };
        }elseif($answer = no){
            echo "<br> No";
            echo "<br> Are you wild?";
            if($answer = yes){
                echo "<br> Yes";
                echo "<br> You are a Lion";
            }else{
                echo "<br> No";
                echo "<br> You are a Cat";
            };
        };
    };
};
echo whatAmIGame();
//========================================================================
