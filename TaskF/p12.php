<?php
    $memoryBefore=memory_get_usage();
    echo("p12\n");
    $input_lines=trim(fgets(STDIN));
    for ($i=0;$i<$input_lines;$i=$i+1){
        $n=trim(fgets(STDIN));
        $num=explode(" ",trim(fgets(STDIN)));
        sort($num);
        for($j=$n-1;$j>=0;$j--){
            if($num[$j] < 9) {
                $num[$j]++;
                for($k=$j+1;$k<$n;$k++) {
                    $num[$k]=0;
                }
                break;
            }
        }
        if($j<0) {
            echo "1";
            for ($k=0;$k<$n;$k++) {
                echo "0";
            }
        } else {
            echo implode("",$num);
        }
        echo "\n";
    }
    echo("\n");
    $memoryAfter=memory_get_usage();
    $memoryDifference=$memoryAfter-$memoryBefore;
    echo("Memory used: ".($memoryDifference/1048576)."MB");
?>