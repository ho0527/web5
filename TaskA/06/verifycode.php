<?php
    session_start();//開始session
    $captchacode="";//定訂字串
    $characters=array_merge(range('A','Z'),range(2,9));//A~Z/2~9
    for($i=0;$i<4;$i++){//4碼驗證
        $captchacode=$captchacode.$characters[array_rand($characters)];//將文字加入字串
    }
    $_SESSION['captcha_code']=$captchacode;
    $canva=imagecreate(150,70);//創建畫布
    imagecolorallocate($canva,255,255,255);//創建背景顏色
    $paint=imagecolorallocate($canva,255,0,0);//創建畫筆顏色
    $angle=rand(-15,15);//傾斜角度(隨機)
    $y=rand(25,45);//y軸(隨機)
    $font=__DIR__."/font.TTF";//TTF檔
    imagettftext($canva,30,$angle,20,$y,$paint,$font,$captchacode);
    for($i=0;$i<3;$i++){//3條線線
        $color=imagecolorallocate($canva,rand(0,255),rand(0,255),rand(0,255));//隨機顏色
        imageline($canva,rand(0,150),rand(0,50),rand(0,150),rand(0,50),$color);//隨機位置(x1,y1,x2,y2)
    }
    header("Content-Type:image/jpeg");//header宣告為jpeg
    imagejpeg($canva);//創建畫布
    imagedestroy($canva);//清除畫布
?>