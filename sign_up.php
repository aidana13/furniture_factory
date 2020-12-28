<?php
  session_start();
  require_once "db.php";
?>
<html>
    <head>
        <title>Регистрация</title>
        <meta charset="utf-8">
    	<link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="stylesheet" type="text/css" href="signUpStyle.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" 
                integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" 
                crossorigin="anonymous">
        </script>
    </head>
    
    <body bgcolor=#FFF8DC text=#8B4513>

        <?php require_once "header.php"; ?>
        <br><br><br>
    <div class="container">
            <h2>Регистрация</h2>
        <form method="post" action="sign_up1.php">
            <table>
                <tr>
                    <td><i>Имя:</i></td>
                    <td><input type="text" name="name" id="name" size=20 maxlength=20></td>
                </tr>
                <tr>
                    <td><i>Фамилия:</i></td>
                    <td><input type="text" name="surname" id="surname" size=20 maxlength=20></td>
                </tr>
                <tr>
                    <td><i>Отчество:</i></td>
                    <td><input type="text" name="fname" id="fname" size=20 maxlength=20></td>
                </tr>
                <tr>
                    <td><i>Город:</i></td>
                    <td>
                        <select id="city" name="city">
                            <option>Алматы</option>
                            <option>Астана</option>
                            <option>Шымкент</option>
                            <option>Уральск</option>
                            <option>Актобе</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><i>Эл. адрес:</i></td>
                    <td><input type="email" id="login" name="email" size="20" maxlength="25"></td>
                </tr>
                <tr>
                    <td><i>Пароль:</i></td>
                    <td><input type="password" id="password" name="password" size="20" maxlength="20"></td>
                </tr>
                <br><br>
                <tr>
                    <td></td><td><button type="submit" onclick="signUp()">Зарегистрироваться</button></td>
                </tr>
            </table>
        </form>
            <a href="sign_in.php" target="2"><h3>назад</h3></a>
        </div>

        <?php require_once "footer.php"; ?>

    </body>
</html>