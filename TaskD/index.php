<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Task D-圖片分享平台首頁</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <div class="head">
            <input type="button" id="view" value="瀏覽貼文" class="indexbutton">
            <input type="button" id="signup" value="註冊" class="indexbutton" onclick="loction.href='signup.php'">
            <input type="button" id="login" value="登入" class="indexbutton">
        </div>
        <div class="div" id="signupdiv">
            <div class="mask"></div>
            <div class="signupbody" class="indexdiv">
                <div>註冊帳號</div>
                <div class="signupdiv">
                    <form>
                        用戶帳號: <input type="text" class="input" name="username"><br><br>
                        密碼: <input type="text" class="input" name="code"><br><br>
                        用戶名: <input type="text" class="input" name="name"><br>
                        管理員權限: <input type="checkbox" name="adminbox"><br><br>
                        <input type="button" id="X" class="button" value="取消">
                        <input type="submit" class="button" value="送出">
                    </form>
                    <?php
                        include("api/link.php");
                    ?>
                </div>
            </div>
        </div>
        <div class="div" id="logindiv">
            <div class="mask"></div>
            <div class="loginbody" class="indexdiv">
                <?php session_start(); ?>
                <class class="indextitle">TODO工作管理系統</class><br>
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