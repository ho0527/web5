<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>模組 E - 學生資料管理系統</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <div class="all">
            <div class="left">
                <div id="addsut" class="addsut">建立學生</div>
            </div>
            <div class="right">
            </div>
        </div>
        <div class="div" id="div">
            <div class="mask"></div>
            <div class="body">
                <form>
                    <class class="stu">建立學生</class><br><br><br>
                    <textarea name="stutends" class="stutext"></textarea>
                    <div class="button">
                        <button type="button" id="X" class="buttoncel">取消</button>
                        <button type="submit" id="enter" name="enter" class="buttonent">確定</button>
                    </div>
                </form>
            </div>
        </div>
        <script src="index.js"></script>
        <?php
            include("link.php");
            if(isset($_GET["enter"])){
                $stuname=$_GET["stutends"];
                $data=mysqli_query($db,"SELECT*FROM `taske` WHERE `stuname`='$stuname'");
                if($row=mysqli_fetch_row($data)){
                    ?><script>alert("帳號已被註冊");location.href="index.php"</script><?php
                }elseif($stuname==""){
                    ?><script>alert("未輸入帳號");location.href="index.php"</script><?php
                }else{
                    mysqli_query($db,"INSERT INTO `taske`(`stuname`)VALUE('$stuname')");
                    ?><script>alert("註冊成功");location.href="index.php"</script><?php
                }
            }
        ?>
    </body>
</html>