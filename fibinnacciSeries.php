<?php

//without function...........

$first=0;
    $second=1;
    $new=1;
    for($i=0;$i<=15;$i++){
        echo $first. ",";
        $second=$new;
        $new=$first+$second;
        $first=$second;
        if($first>=100)
        break;

    }


    //with function............


    function fibonassiBreakSreatment(){
        $first=0;
        $second=1;
        $new=1;
        for($i=0;$i<=15;$i++){
            echo $first. ",";
            $second=$new;
            $new=$first+$second;
            $first=$second;
            if($first>=100)
            break;
    
        }
    }
    fibonassiBreakSreatment();