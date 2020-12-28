<?php
    session_start();   
    require_once "db.php";

    if($_SERVER['REQUEST_METHOD']=='POST'){
      if(isset($_POST['review'])&&!empty($_POST['review'])){

        addReview($_SESSION['USER_DATA']['id'], $_POST['post_id'], $_POST['review']);
        
      header("Location:page.php");
    }
}
?>