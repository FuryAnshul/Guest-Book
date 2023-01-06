<?php
if (isset($_POST['delete']))
{
$id=$_POST['selector'];
print_r($id);exit;
$N = count($id);
//print_r($N);exit;
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($this->db,"DELETE FROM users where id='$id[$i]'");
}
}
?>
<div class="actions">
  <button class="button" type="button" name="submit" id="submit">
     <img src="images/icons/cross.png" alt="Delete" /><a href="delete.php"> Delete</a>
  </button>
</div>
<div class="pagination">
  <span class="disabled prev_page">� Previous</span>
  <span class="current">1</span>
  <a rel="next" href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">7</a>
  <a href="#">8</a>
  <a href="#">9</a>
  <a href="#">10</a>
  <a href="#">11</a>
  <a rel="next" class="next_page" href="#">Next �</a>
</div>