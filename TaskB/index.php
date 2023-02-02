<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>高美濕地旅遊網站首頁</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <img src="web00_1.jpg" class="logo"></img>
        <div class="navigationbar">
            <button class="button"></button>
            <button class="button"></button>
            <button class="button"></button>
            <button class="button"></button>
            <button class="button"></button>
        </div>
        <?php
            $a=[];
            $count=0;
            while($count<7){
                $num=rand(1,50);
                array_push($a,$num);
                if($count>0){
                    for($i=0;$i<=$count;$i=$i+1){;
                        // if($a[$i]==$num){
                        //     array_pop($a);
                        //     $count=$count-1;
                        // }
                    }
                }
                $count++;
            }
            for($i=0;$i<count($a);$i++){
                echo($a[$i]." ");
            }
        ?>
    </body>
</html>