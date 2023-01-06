<?php
  //print_r($_POST); exit;
  require_once('includes/config.php');
 
  $errors = array();
  $users = new users;
  if(isset($_POST['email_address']))
  {
   	  $errors = $users->validate_login();
   	
   	  if(!count($errors))
   	  {
   	  	 //print_r($errors);exit;
   	  	$condition = "email_address='".$_POST['email_address']."' and password='".md5($_POST['password'])."'";
   	  	$check = $users->select($users->table,'',$condition);
   	  	//print_r($condition);exit;
   	  	if(!empty($check))
   	  	{
			$_SESSION['Auth'] = $check[0];
			unset($check[0]['password']);
			echo "true";exit;	
   	  	}
   	  	else
   	  	{
			echo "false";exit;
   	  	}
   	  }
   }
 ?>