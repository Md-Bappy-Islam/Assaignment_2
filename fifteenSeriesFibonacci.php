    <?php


    function fibonassiBreakSreatment($first=0,$second=1,$new=1){
  
        for($i=0;$i<=15;$i++){
            echo $i . "- " . $first . ", \n" ;
            $second=$new;
            $new=$first+$second;
            $first=$second;
        }
    }
    fibonassiBreakSreatment(0,1,1,);