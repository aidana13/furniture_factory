<?php
  session_start();
    require_once "db.php";

    if(isset($_POST['id'])&& !empty($_POST['id']))
    {
        $found = getCard($_SESSION['USER_DATA']['id'], $_POST['id']);
        //die;
        if($found==null){
            addCard($_SESSION['USER_DATA']['id'], $_POST['id']);
        }else{
            delCard($_SESSION['USER_DATA']['id'], $_POST['id']);
        }
    }
    header("Location:page.php?id=".$_POST['id']);
?>