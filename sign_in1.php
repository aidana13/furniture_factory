<?php
	session_start();
	require_once "db.php";
	
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		if( isset($_POST['email'])&&!empty($_POST['email'])
			&&isset($_POST['password']) && !empty($_POST['password']))
		{
			$user = getUser($_POST['email']);
			$main = getMain($_POST['email']);
			if( ($user!=null || $main!=null) && 
				($user['password']===$_POST['password'] || $main['password']===$_POST['password']) )
			{
				session_start();
				$_SESSION['USER_DATA'] = $user;
				$_SESSION['MAIN_DATA'] = $main;
				header('Location:main.php');
			
			}
			else
			{
				header('Location:sign_in.php');
			}
		}
		else
			{
				header('Location:sign_in.php');
			}
	}
?>