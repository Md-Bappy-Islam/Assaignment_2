<?php
//For loop............

function evenNumberByLoop()
{
    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 == 0)
            echo $i .",";
            if($i==20){
                echo $i .".";
            }
    }
}
evenNumberByLoop();
echo "\n";

//While loop..........

function callEvenNumberByDoLoop(){
    $i=1;
    while($i<=20){
        if($i % 2==0)
        echo $i,",";
        if($i==20){
            echo $i .".";
        }
        $i++;
    }
}
callEvenNumberByDoLoop();
echo "\n";

// Do while loop............
function callEvenNumberByDoWhileLoop(){
    $i=1;
    do{
        if($i % 2 ==0)
        echo $i. ",";
        if($i==20){
            echo $i .".";
        }
        $i++;
    }while($i<=20);
}
callEvenNumberByDoWhileLoop();

