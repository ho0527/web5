<?php
    $memoryBefore=memory_get_usage();
    echo("p06\n");

    function gcd($a, $b) {
        if ($b == 0) {
            return $a;
        } else {
            return gcd($b, $a % $b);
        }
    }

    $n = trim(fgets(STDIN));
    for ($i = 1; $i < $n; $i++) {
        $numbers = explode("\n", trim(fgets(STDIN)));
        $result = $numbers[0];
        $result = gcd($result, $numbers[$i]);
    }

    echo $result;

    echo("\n");
    $memoryAfter=memory_get_usage();
    $memoryDifference=$memoryAfter-$memoryBefore;
    echo("Memory used: ".($memoryDifference/1048576)."MB");
?>