<?php
        session_start();

        include("funcs.php");

// LOGINチェック
sschk();
        $auth_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

        ?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>衛生管理</title>
        <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
        <style>div{padding: 10px;font-size:16px;}</style>
    </head>
    <body>

        <!-- Head[Start] -->
        <header>
        <?php include("menu.php");?>
            <!-- <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
                </div>
            </nav> -->
        </header>
        <!-- Head[End] -->

        <!-- Main[Start] -->
        <div class="main">
            <form method="POST" action="member_insert.php">
                <div class="jumbotron">
                    <fieldset>
                        <legend>従業員登録</legend>
                        <!-- 隠しフィールドにユーザーIDを追加 -->
                        <input type="hidden" name="auth_id" value="<?= $auth_id ?>">
                        <label>名前：<input type="text" name="name"></label><br>
                        <label>Email：<input type="text" name="email"></label><br>
                        <!-- <label>年齢：<input type="text" name="age"></label><br> -->
                        <label><textArea name="content" rows="4" cols="40"></textArea></label><br>
                        <input type="submit" value="送信">
                    </fieldset>
                </div>
            </form>
        </div>
        <!-- Main[End] -->

    </body>
</html>
