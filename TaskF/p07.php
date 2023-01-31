<?php
    $memoryBefore=memory_get_usage();
    echo("p07\n");
    $n=trim(fgets(STDIN));
    for($i=0;$i<$n;$i=$i+1){
        $num=trim(fgets(STDIN));
    }
    $memoryAfter=memory_get_usage();
    $memoryDifference=$memoryAfter-$memoryBefore;
    echo("Memory used: ".($memoryDifference/1048576)."MB");
?>