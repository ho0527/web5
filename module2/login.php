<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Shanghai Battle!</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <img src="logo.png" class="logo">
        <div class="head">
            <form>
                <input type="button" id="index" value="玩家留言" class="indexbutton" onclick="location.href='index.php'">
                <input type="button" id="view" value="玩家參賽" class="indexbutton" onclick="location.href='post.php'">
                <input type="button" id="signup" value="網站管理" class="indexbutton selectbut" onclick="location.href='login.php'">
                <input type="submit" id="loggout-button" class="indexbutton" name="logout" value="登出">
            </form>
        </div>
        <?php
            include("link.php");
            if(isset($_SESSION["data"])){
                ?>
                <div class="loginhead">
                    <button class="button2 selectbut" onclick="location.href='login.php'">留言管理</button>
                    <button class="button2" onclick="location.href='comp.php'">賽制管理</button>
                </div>
                <?php
            }else{
                ?>
                <div class="indexdiv">
                    <form>
                        <class class="indextitle">Shanghai Battle!</class><br>
                        <div class="text">
                            帳號: <input type="text" name="username" id="username" value="<?= @$_SESSION["username"] ?>" class="input"><br>
                        </div>
                        <div class="text">
                            密碼: <input type="password" name="code" id="code" value="<?= @$_SESSION["password"] ?>" class="input"><br>
                        </div>
                        <div class="text">
                            驗證碼: <input type="text" name="verify" id="code" value="<?= @$_SESSION["verify"] ?>" class="input"><br>
                        </div>
                        <class class="text">驗證碼:</class>
                        <?php
                            $a="";
                            for($i=0;$i<4;$i=$i+1){
                                $str=range("0","9");
                                $finalStr = $str[rand(0,9)];
                                $a=$a.$finalStr;
                            }
                        ?>
                        <input type="hidden" name="verifyans" id="code" value="<?= $a ?>" class="input">
                        <div class="verifybox" id="dragbox">
                            <?php echo($a); ?>
                        </div>
                        <input type="submit" name="reflashpng" value="重新產生" class="button"><br>
                        <input type="submit" value="清除" name="clear" class="button">
                        <button type="submit" class="button" name="login" id="login">登入</button><br><br>
                        <?php
                            if(isset($_GET["reflashpng"])){
                                @$_SESSION["username"]=$_GET["username"];
                                @$_SESSION["password"]=$_GET["code"];
                                @$_SESSION["verify"]=$_GET["verify"];
                                header("location:login.php");
                            }
                            if(isset($_GET["clear"])){
                                session_unset();
                                header('location:login.php');
                            }
                            if(isset($_GET["login"])){
                                $username=$_GET['username'];
                                $code=$_GET['code'];
                                $_SESSION["username"]=$username;
                                $_SESSION["password"]=$code;
                                $verify=$_GET["verify"];
                                $ans=$_GET["verifyans"];
                                $user=mysqli_query($db,"SELECT*FROM `user` WHERE `username`='$username'");
                                if($row=mysqli_fetch_row($user)){
                                    if($row[2]==$code){
                                        if($ans==$verify){
                                            ?><script>alert("登入成功");location.href="login.php"</script><?php
                                            $_SESSION["data"]=$username;
                                        }else{
                                            ?><script>alert("圖形驗證碼有誤");location.href="login.php"</script><?php
                                        }
                                    }else{
                                        ?><script>alert("密碼有誤");location.href="login.php"</script><?php
                                    }
                                }else{
                                    ?><script>alert("帳號有誤");location.href="login.php"</script><?php
                                }
                            }
                        ?>
                    </form>
                </div>
                <?php
            }
            if(isset($_GET["logout"])){
                if(isset($_SESSION["data"])){
                    ?><script>alert("登出成功!");location.href="login.php"</script><?php
                    session_unset();
                }else{
                    ?><script>alert("請先登入!");location.href="login.php"</script><?php
                    session_unset();
                }
            }
        ?>
        <script src="index.js"></script>
    </body>
</html>