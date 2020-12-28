<?php
    session_start();
        $conn = new PDO('mysql:host=localhost;dbname=webclass', 'root', '');

        $sql1 = "
               DELETE FROM user_data
               WHERE user_id = :user_id
        ";

        $query = $conn->prepare($sql1);
        $query->execute(["user_id"=>$_SESSION['USER_DATA']['id']]);

        $sql2 = "
               DELETE FROM users
               WHERE id = :id
        ";
        $query = $conn->prepare($sql2);
        $query->execute(["id"=>$_SESSION['USER_DATA']['id']]);
        session_destroy();

        header("Location:main.php");
?>