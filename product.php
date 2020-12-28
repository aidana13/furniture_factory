<?php
	require_once 'db.php';
	if($_SERVER['REQUEST_METHOD']=='POST')
        {
            if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['section']) && !empty($_POST['section']) && isset($_POST['cost']) && !empty($_POST['cost']) && isset($_FILES["image"]["name"]) && !empty($_FILES["image"]["name"]))
            {
               $target_dir = "images/";
               $target_file = $target_dir . basename($_FILES["image"]["name"]);
           
               move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
               addProduct($_POST['name'], $_POST['section'], $_POST['cost'],$target_file);
            }
        } 
	header("Location:profile.php");
?>