<?php
    $memoryBefore=memory_get_usage();
    echo("p03\n");
    $k=readline();
    $cipher=readline();
    $plain="";
    for($i=0;$i<strlen($cipher);$i=$i+1){
        $plain=$plain.chr((ord($cipher[$i])-$k+26)%26+ord("a"));
    }
    echo($plain);
    $memoryAfter=memory_get_usage();
    $memoryDifference=$memoryAfter-$memoryBefore;
    echo("Memory used: ".($memoryDifference/1048576)."MB");
    /*
    這段程式碼讀取兩行輸入，第一行為加密的整數 K，第二行為要解密的字串。接著，使用迴圈對每個字元進行解密：

    使用 ord 函數將字元轉換為 ASCII 碼。
    將 ASCII 碼減去 K。
    加上 26 將結果限制在 ASCII 碼中可列印的範圍內。
    使用 chr 函數將結果轉換回字元。
    將解密後的字元附加到空字串中。
    */
?>