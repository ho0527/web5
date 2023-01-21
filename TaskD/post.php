<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>一般會員專區</title>
        <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
        <link href="index.css" rel="stylesheet">
    </head>
    <body>
        <div class="head">
            <input type="button" id="index" value="首頁" class="indexbutton" onclick="location.href='index.php'">
            <input type="button" id="view" value="瀏覽貼文" class="indexbutton" onclick="location.href='post.php'">
            <input type="button" id="signup" value="註冊" class="indexbutton">
            <input type="button" id="login" value="登入" class="indexbutton">
        </div>
        <?php
            include("link.php");
            loginlightbox();
        ?><br>
        <table class="main-table">
            <tr>
                <td class="user-table2">
                </td>
                <td class="user-table2">
                </td>
            </tr>
        </table>
        <script src="index.js"></script>
    </body>
</html>