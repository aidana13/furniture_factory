<?php
  session_start();
  require_once "db.php";
?>
<html>
    <head>
        <title>Вход</title>
        <meta charset="utf-8">
    	<link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="stylesheet" type="text/css" href="signInStyle.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <style type="text/css">
            #top { float:left; width: 100%; height: 9%; }
            #center { background-color: #F5DEB3; float:left; width: 100%; height: 91%; } 
            #bottom { float:left; width: 100%; }
        </style>
    </head>
    
    <body bgcolor=#FFF8DC text=#8B4513>
<div id="top">
        <?php require_once "header.php"; ?>
</div>
<div id="center">
    <br><br>
    <div align="center">
            <h2>Вход</h2>
            <br>
        <form method="post" action="sign_in1.php">
            <label for="email"><b>Логин</b></label>
            <input type="text" id="login" placeholder="Enter email address" name="email" required>
            <br>
            <label for="psw"><b>Пароль</b></label>
            <input type="password" id="password" placeholder="Enter Password" name="password" required><br>
            <button type="submit" onclick="signIn()">Войти</button>
        </form>
            <br><br>
            <b>Если у вас нет аккаунта, то вы можете<b> <a href="sign_up.php">Зарегистрироваться</a>
                <br><br>
            </div>
</div>
<div id="bottom">
        <?php require_once "footer.php"; ?>
</div>
    </body>
</html>