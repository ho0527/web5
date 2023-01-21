<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>TaskD-圖片分享平台首頁</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <div class="head">
            <input type="button" id="view" value="瀏覽貼文" class="indexbutton">
            <input type="button" id="signup" value="註冊" class="indexbutton">
            <input type="button" id="login" value="登入" class="indexbutton">
        </div>
        <div class="div" id="signupdiv">
            <div class="mask"></div>
            <div class="signupbody" class="indexdiv">
                <div>註冊帳號</div>
                <div class="signupdiv">
                    <form method="post">
                        用戶帳號: <input type="text" class="input" name="email"><br><br>
                        密碼: <input type="text" class="input" name="password"><br><br>
                        用戶名: <input type="text" class="input" name="nickname"><br><br>
                        頭像:<input type="file" style="width:175px;" name="headpng"><br>
                        管理員權限: <input type="checkbox" name="adminbox"><br>
                        <input type="button" id="X" class="button" value="取消">
                        <input type="submit" name="enter" class="button" value="送出">
                    </form>
                    <?php
                        include("link.php");
                        if(isset($_POST["enter"])){
                            signupapi();
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="div" id="logindiv">
            <div class="mask"></div>
            <div class="loginbody" class="indexdiv">
                <?php session_start(); ?>
                <class class="indextitle">登入</class><br>
                <div class="text">
                    帳號: <input type="text" name="username" id="username" class="input"><br>
                </div>
                <div class="text">
                    密碼: <input type="password" name="password" id="password" class="input"><br>
                </div>
                <input type="button" id="X" class="button" value="取消">
                <input type="submit" value="清除" name="clear" class="button">
                <button type="button" class="button" onclick="loginclick(<?= $key ?>)" id="login">登入</button><br><br>
            </div>
        </div>
        <script src="index.js"></script>
    </body>
</html>