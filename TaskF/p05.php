<?php
    $memoryBefore=memory_get_usage();
    echo("p05\n");
    $matrix1=explode(" ",trim(fgets(STDIN)));
    $matrix2=explode(" ",trim(fgets(STDIN)));
    $len1=count($matrix1);
    $len2=count($matrix2);
    for($i=0;$i<max($len1, $len2);$i=$i+1){
        if(isset($matrix1[$i])){
            $sum[$i]=$matrix1[$i];
        }else{
            $sum[$i]=0;
        }
        if(isset($matrix2[$i])){
            $sum[$i]=$sum[$i]+$matrix2[$i];
        }else{
            $sum[$i]=$sum[$i]+0;
        }
    }

    echo(implode(" ",$sum));
    echo("\n");
    $memoryAfter=memory_get_usage();
    $memoryDifference=$memoryAfter-$memoryBefore;
    echo("Memory used: ".($memoryDifference/1048576)."MB");
?>
