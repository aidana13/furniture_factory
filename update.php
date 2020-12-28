<?php
    session_start();
    require_once "db.php";
    $_REQUEST['user_data']=getUserData($_SESSION['USER_DATA']['id']);
    $result = $_REQUEST['user_data'];
    $id=$result['user_id'];
?>
<html>
    <head>
        <title>Редактировать</title>
        <meta charset="utf-8">
    	<link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="stylesheet" type="text/css" href="signUpStyle.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" 
                integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" 
                crossorigin="anonymous">
        </script>
    </head>
    
    <body bgcolor=#FFF8DC text=#8B4513>
    <?php require_once "header2.php"; ?>
    <br><br><br>
    <div class="container">
            <h2>Редактировать</h2>
        <form method="post" action="update1.php?id=<?php echo $id;?>">
            <table>
                <tr>
                    <td><i>Имя:</i></td>
                    <td><input type="text" name="name" id="name" size=20 value="<?php echo $result['name'];?>" maxlength=20></td>
                </tr>
                <tr>
                    <td><i>Фамилия:</i></td>
                    <td><input type="text" name="surname" id="surname" size=20 value="<?php echo $result['surname'];?>" maxlength=20></td>
                </tr>
                <tr>
                    <td><i>Отчество:</i></td>
                    <td><input type="text" name="fname" id="fname" size=20 value="<?php echo $result['fname'];?>" maxlength=20></td>
                </tr>
                <tr>
                    <td><i>Город:</i></td>
                    <td>
                        <select id="city" name="city" value="<?php echo $result['city'];?>">
                            <option>Алматы</option>
                            <option>Астана</option>
                            <option>Шымкент</option>
                            <option>Уральск</option>
                            <option>Актобе</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td><td><button type="submit">Редактировать</button></td>
                </tr>
                <br><br>
            </table>
        </form>
            <a href="profile.php"><h3>назад</h3></a>
        </div>

        <?php require_once "footer.php"; ?>

    </body>
</html>