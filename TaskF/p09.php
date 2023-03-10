<?php
    $memoryBefore=memory_get_usage();
    echo("p09\n");
    $m=trim(fgets(STDIN));
    $data=array();
    for($i=0;$i<$m;$i++){
        $line=explode(" ",trim(fgets(STDIN)));
        $data[$line[0]]=array("cash_buy"=>$line[1],"cash_sell"=>$line[2],"spot_buy"=>$line[3],"spot_sell"=>$line[4]);
    }
    $n=trim(fgets(STDIN));
    for($i=0;$i<$n;$i++){
        $line=explode(" ",trim(fgets(STDIN)));
        $method=$line[0];
        $from=$line[1];
        $to=$line[2];
        $amount=$line[3];
        if($from=="TWD"){
            if($method=="A"){
                $result=$amount/$data[$to]["spot_sell"];
            }else{
                $result=$amount/$data[$to]["cash_sell"];
            }
        }elseif($to=="TWD"){
            if($method=="A"){
                $result=$amount*$data[$from]["spot_buy"];
            }else{
                $result=$amount*$data[$from]["cash_buy"];
            }
        }else{
            echo("至少要有個是TWD");
        }
        echo(sprintf("%.5f",$result)."\n");
    }
    echo("\n");
    $memoryAfter=memory_get_usage();
    $memoryDifference=$memoryAfter-$memoryBefore;
    echo("Memory used: ".($memoryDifference/1048576)."MB");
?>