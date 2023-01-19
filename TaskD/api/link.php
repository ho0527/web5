<?php
    function signupapi($email,$name,$password){
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://localhost/api/user/signup",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => array("email" => $email, "nickname" => $name, "password" => $password, "profile_image" => new \CURLFile("path/to/image.jpg", "image/jpeg", "image.jpg")),
        CURLOPT_HTTPHEADER => array(
            "Content-Type:multipart/form-data"
        ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
    }
?>