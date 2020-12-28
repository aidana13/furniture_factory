<?php
    session_start();
    require_once "db.php";

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        if(isset($_POST['name'])&&!empty($_POST['name'])&&isset($_POST['surname'])&&!empty($_POST['surname'])
            &&isset($_POST['fname'])&&!empty($_POST['fname'])&&isset($_POST['city'])&&!empty($_POST['city']))
        {
                $found = getUserData($_SESSION['USER_DATA']['id']);
                if($found!=null)
                {
                    updateData($_SESSION['USER_DATA']['id'], $_POST['name'],$_POST['surname'],$_POST['fname'],$_POST['city']);
                    header('Location:profile.php');
                }
                else{
                    header('Location:update.php');
                }
        }
        else{
               header('Location:update.php');
            }
    }
?>