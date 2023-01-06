<?php 
//print_r($_POST); exit;
require_once("includes/config.php");
$errors=array();
$users=new users;
if(isset($_POST['name']))
{
	$errors = $users->validate_signup();
	if(!count($errors))
	{	
		$condition = "email_address='".$_POST['email_address']."'";
		
		$check = $users->select($users->table,'',$condition);
		//print_r($check[0]['id']);exit;	
		if(!empty($check))
		{
			echo "false";exit;
		}
		else
		{
			$_POST['password']=md5($_POST['password']);
			$sql = $users->save($users->table,$_POST);
			echo "true";exit;
		}
	}
	else
	{
		echo "false";exit;
	}
}
?>

