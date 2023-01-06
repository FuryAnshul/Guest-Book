<?php require_once('includes/config.php');
	require_once('models/db.php');

	if(!isset($_SESSION['Auth']['id'])) 
  	{
	 	header('Location: index.html');
	 	exit;
  	}
  	else
  	{
 		$guests = new guests;
 		$result = $guests->select($guests->table,'',"user_id='".$_SESSION['Auth']['id']."'");
  	}
?>

<!-- /<?php
	//if(!isset($_GET['page']))
	{ 
		$page = 1; 
	} 
	//else 
	{ 
		//$page = $_GET['page']; 
	} 
    //$guests=new guests;
	$max_results = 3; 
	$from = (($page * $max_results) - $max_results);  

	//$sql = mysqli_query($guests->db,"SELECT * FROM  guests LIMIT $from, $max_results");
	//$total_results = mysqli_result(mysqli_query($guests->db,"SELECT count(*) as Num FROM guests"));
	//$total_pages = ceil($total_results / $max_results); 
?> -->
<style> 
     .pagination
      {
    	margin: 3px;
    	padding: 3px;
		float:left;
       }
	 .pagination .current {
    	background: none repeat scroll 0 0 #E11B1B;
    	border: 0 solid #0085C3;
    	color: #FFFFFF;
    	font-family: Verdana;
    	font-size: 8pt;
    	font-weight: bold;
    	margin: 2px;
    	padding: 5px;
	  }
	 .pagination a {
    	background: none repeat scroll 0 0 #D6D5D5;
    	border: 0 solid #F6F5F5;
    	color: #000000;
    	font-family: Verdana;
    	font-size: 8pt;
    	font-weight: normal;
    	margin: 2px;
    	padding: 5px;
    	text-decoration: none;
	  }
</style>
				
<form action="destory.php" method="post"  >
    <table class="table">
        <tr>
          <th class="first"></th>
          <th>Sr. No.</th>
          <th>Name</th>
          <th>Email Id</th>
          <th>Phone No.</th>
          <th class="last">&nbsp;</th>
        </tr>
	<?php
	  $srno = 1;
		foreach($result as $row)
		{		
	?>
        <tr class="odd">
          <td><input name="selector[]" type="checkbox" value="<?php echo $row['id']; ?>"/></td>
		  <td><?php echo $srno; ?></td>
		  <td><?php echo $row['name']; ?></td>
		  <td><?php echo $row['email_address']; ?></td>
		  <td><?php echo $row['phone']; ?></td>
		  <td class="last"><a href="view.html?id=<?php echo $row['id']; ?>">View</a> | <a href="edit.html?id=<?php echo $row['id']; ?>">Edit</a> | <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Do u want to delete this guest?');">Delete</a></td>
        </tr>
    <?php
	  $srno++;	  
	} ?>
	</table>
	<div class="actions-bar wat-cf">
       <div class="actions">
          <button class="button" type="submit" value="Delete" name="delete">
             <img src="images/icons/cross.png" alt="Delete"/>Delete</a>
          </button>
        </div>
		<div class="pagination">
    <!-- <?php
	  //Paging info
	  //echo "Page ";
	  //for($i = 1; $i <= $total_pages; $i++)
	  { 
		//if(($page) == $i){ 
		  //echo "<span class=\"current\">$i</span>"; 
        } //else { 
		  //echo "&nbsp;<a href=\"guests.html?page=$i\" class=mypagination>$i</a> "; 
		
	  
	  //echo " of ". $total_pages ; 
      // Build Previous Link 
	  //if($page > 1){ 
	    //$prev = ($page - 1); 
		//echo "Page &nbsp;<a href=\"".$_SERVER['PHP_SELF']."?page=$prev\"><<Previous</a> "; 
		//echo "&nbsp;<a href=\"guests.html?page=$prev\" class=mypagination> Previous</a> |&nbsp;";
	  
	  // Build Next Link 
	  //if($page < $total_pages){ 
		 //$next = ($page + 1); 
			//echo  "&nbsp;<a href=\"guests.html?page=$next\" class=mypagination>Next</a>"; 
	
	?> -->
 </div>
</form>