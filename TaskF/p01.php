<?php
    $memoryBefore=memory_get_usage();
    echo("p01\n");
    $n=trim(fgets(STDIN));
    for($i=0;$i<$n;$i=$i+1){
        $arr=explode(" ",trim(fgets(STDIN)));
        $max=max($arr);
        $min=min($arr);
        echo $max+$min.PHP_EOL;
    }
    $memoryAfter=memory_get_usage();
    $memoryDifference=$memoryAfter-$memoryBefore;
    echo("Memory used: ".($memoryDifference/1048576)."MB");
?>