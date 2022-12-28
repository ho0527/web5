<?php
    session_start();
    $captchacode="";
    $characters = array_merge(range('A', 'Z'), range(2, 9));
    for($i=0;$i<4;$i++){
        $captchacode=$captchacode.$characters[array_rand($characters)];
    }
    $_SESSION['captcha_code'] = $captchacode;
    $canva=imagecreate(150,70);
    imagecolorallocate($canva,255,255,255); 
    $paint=imagecolorallocate($canva,255,0,0);
    $angle=rand(-15,15);
    $y=rand(25,45);
    $font=__DIR__."/font.TTF";
    imagettftext($canva,30,$angle,20,$y,$paint,$font,$captchacode);
    for($i=0;$i<3;$i++){
        $color=imagecolorallocate($canva,rand(0,255),rand(0,255),rand(0,255));
        imageline($canva,rand(0,150),rand(0,50),rand(0,150),rand(0,50),$color);
    }
    header("Content-Type:image/jpeg");
    imagejpeg($canva);
    imagedestroy($canva);
?>