<?php
    function login($email,$password){
        $curl=curl_init();//建立 cURL
        curl_setopt_array($curl,[
            CURLOPT_URL=>"http://localhost/api/user/login",//設定URL
            CURLOPT_RETURNTRANSFER=>true,// 設定回傳請求的結果
            // CURLOPT_ENCODING=>"",//設定接受的編碼類型
            // CURLOPT_MAXREDIRS=>10,//設定最多的重定向次數
            CURLOPT_TIMEOUT=>0,//設定請求的時間限制(s)
            // CURLOPT_FOLLOWLOCATION=>true,//設定是否跟隨重定向
            CURLOPT_HTTP_VERSION=>CURL_HTTP_VERSION_1_1,//HTTP 版本
            CURLOPT_CUSTOMREQUEST=>"POST",//HTTP 方式
            CURLOPT_POSTFIELDS=>["email"=>$email,"password"=>$password],// 設定請求的表單資料
            CURLOPT_HTTPHEADER =>["Content-Type:multipart/form-data"],//設定header
        ]);
        $response=curl_exec($curl);//執行 cURL
        curl_close($curl);//關閉 cURL
    }

    function signupapi(){
        $email=$_POST["email"];
        $password=$_POST["password"];
        $nickname=$_POST["nickname"];
        @$admin=$_POST["adminbox"];
        // $headpng=$_FILES["headpng"];
        $headpng=$_POST["headpng"];
        $curl=curl_init();//建立 cURL
        curl_setopt_array($curl,[
            CURLOPT_URL=>"http://web5.tw/TaskD/api/user/register.php",//設定URL
            CURLOPT_RETURNTRANSFER=>true,// 設定回傳請求的結果
            // CURLOPT_ENCODING=>"",//設定接受的編碼類型
            // CURLOPT_MAXREDIRS=>10,//設定最多的重定向次數
            CURLOPT_TIMEOUT=>0,//設定請求的時間限制(s)
            // CURLOPT_FOLLOWLOCATION=>true,//設定是否跟隨重定向
            CURLOPT_HTTP_VERSION=>CURL_HTTP_VERSION_1_1,//HTTP 版本
            CURLOPT_CUSTOMREQUEST=>"POST",//HTTP 方式
            CURLOPT_POSTFIELDS=>["email"=>$email,"password"=>$password,"nickname"=>$nickname,"admin"=>$admin,"headpng"=>$headpng],// 設定請求的表單資料
            CURLOPT_HTTPHEADER =>["Content-Type:multipart/form-data"],//設定header
        ]);
        $response=curl_exec($curl);//執行 cURL
        curl_close($curl);//關閉 cURL
        echo $response;
    }
?>