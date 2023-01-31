<?php
    $memoryBefore=memory_get_usage();
    echo("p13\n");
    $n=intval(fgets(STDIN));
    for($i=0;$i<$n;$i++){
        $hash_value=0;
        $str=trim(fgets(STDIN));
        for($j=0;$j<strlen($str);$j++){
            $hash_value=$hash_value*31+ord($str[$j]);
            $hash_value=($hash_value&0x7FFFFFFF)+($hash_value>>31&0x7FFFFFFF);
            echo($hash_value."\n");
        }
    }
    echo("\n");
    $memoryAfter=memory_get_usage();
    $memoryDifference=$memoryAfter-$memoryBefore;
    echo("Memory used: ".($memoryDifference/1048576)."MB");
?>