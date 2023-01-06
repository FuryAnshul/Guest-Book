<?php
//print_r($_POST);exit;
require_once('includes/config.php');
if(!isset($_SESSION['Auth']['id']))
{
	header("Location: index.html");
	exit;
}

	$guests = new guests;
	// $errors = array();
	if(isset($_POST['update']))
  	{
	 $errors = $guests->validate();
	 // print_r($errors);
	//	if(!count($errors))
	 // {
		 if(isset($_POST['hobbies']))
				$_POST['hobbies'] = implode(', ',$_POST['hobbies']);

			
			  $_POST['modified'] = date('Y-m-d h:m:s');
			  //print_r($_POST); exit;
			if($guests->save($guests->table,$_POST,"id=".$_POST['getid']))
		    {
			//echo "done";
				//$_SESSION['message'] = "Updated Successfully";
				header("Location: guests.html");
				//exit;
				
			}
	 // }
  }
  
  ?>