<?php

//Q1:

    function checkPalindrome($input){
        $reverse = strrev($input);
        if($input == $reverse){
            echo $input .' is a palindrome';
        }else{
            echo $input .' is not a palindrome';
        }
    }

    checkPalindrome(1234321);
//===============================================================
//Q2:

    $string="welcome";
    $vowels = array('a','e','i','o','u');
    $len = strlen($string);
    $num = 0;

    for($i=0; $i<$len; $i++){
        if(in_array($string[$i], $vowels)){
            $num++;
        }
    };
echo "<br> $num <br>";
//================================================================
//Q3:

    for($number = 1; $number <= 15; $number++){
        if($number % 15 === 0){
            echo " FizzBuzz ";
        }elseif($number % 3 === 0){
            echo " Fizz ";
        }elseif($number % 5 ===0){
            echo " Buzz ";
        }else{
            echo $number;
        }
    };
//==================================================================
//Q4:

    $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
    asort($ceu);
    foreach($ceu as $key => $capital){
        echo "<br>" . $key . " => " . $capital;
    }
//===================================================================
//Q5:

    $cols = 10;
    $rows = 10;
    echo "<br> <table border=\"1\">";

    for ($r =1; $r <= $rows; $r++){

        echo('<tr>');

        for ($c = 1; $c <= $cols; $c++)
            echo( '<td>' .$c*$r.'</td>');

            echo('</tr>');

    }

    echo("</table>");
//==================================================================
//Q6:

    //$cars = array('mercedes' , 'BMW' , 'kia' , 'Fiat');
    function checkLowercase($str){
        if(ctype_lower($str)){
            echo " <br> Yes string is all lowercase";
        }else{
            echo "<br> No string is not all lowercase";
        }
    }
    checkLowercase("string");
//==================================================================
//Q7:

    function isPrime($numb){
        for($n = 2; $n < $numb;$n++){
            if($numb % $n ==0){
                return 0;
            }else{
                return 1;
            }
        }
    }
    $checkPrime = isPrime(47);
    if($checkPrime == 1){
        echo "<br> It is a prime number";
    }else{
        echo "<br> It is not a prime number";
    }
//=================================================================
//Q8:

    $checkNumbers = array(1,2,3,4,5,6,7,8,9,10);
    foreach($checkNumbers as $nums){
        if(($nums % 2)== 0){
            echo "<br>" . $nums . " is even";
        }else{
            echo "<br>" . $nums . " is odd";
        }
    }
//=================================================================
//Q9:

    function isAnagram($str1 ,$str2){
        if(count_chars($str1,1) == count_chars($str2,1)){
            echo "<br> Yes they are Anagram";
        }else{
            echo "<br> No they are not Anagram";
        }
    }
    isAnagram("iceman","cinema");
//=================================================================
//Q10:

    echo "<br>" . strrev("welcome");