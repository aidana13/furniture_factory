<?php
    session_start();
    require_once "db.php";

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        if(isset($_POST['email'])&&!empty($_POST['email'])&&isset($_POST['password'])&&!empty($_POST['password'])&&isset($_POST['name'])&&isset($_POST['name'])&&!empty($_POST['surname'])&&!empty($_POST['surname'])
            &&isset($_POST['fname'])&&isset($_POST['city']))
        {
                $found = getUser($_POST['email']);
                if($found==null)
                {
                    addUser($_POST['email'], $_POST['password'], $_POST['name'],$_POST['surname'],$_POST['fname'],$_POST['city']);
                    header('Location:sign_in.php');
                }
                else{
                    header('Location:sign_up.php');
                }
        }
        else{
               header('Location:sign_up.php');
            }
    }
?>