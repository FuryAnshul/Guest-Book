<?php
	//print_r($_POST);
	require_once('includes/config.php');
	if(!isset($_SESSION['Auth']['id']))
	{
		header("Location: index.html");
		exit;
	}

	$errors = array();
	$users=new users;
	
	if(isset($_POST['oldpassword']))
	{
		//$errors =$users->validate_password();
		
		//if(!count($errors))
		//{ 
			$condition ="password ='".md5($_POST['oldpassword'])."'";
			//print_r($getdata);exit;
			$getdata = $users->select($users->table,'password',$condition);
			
			if(($getdata[0]['password'] == md5($_POST['oldpassword'])) && ($_POST['newpassword']== $_POST['confirmpassword']))
			{
				$_POST['password']= md5($_POST['newpassword']);
				if($users->save($users->table,$_POST,$condition))
       			 {
        			//$result = "successfully done";
					echo "true";
					exit;
        		}
				else
				{
				    //$result = "not done";
					echo "false";
				}
			//}
		}
	}	
?>

