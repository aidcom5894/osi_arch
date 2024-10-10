<?php 

include('master_page.php');

$fetchActiveUsers = mysqli_query($config,"SELECT * FROM credentials WHERE useremail = '{$_SESSION['activeUser']}'");
while($row = mysqli_fetch_assoc($fetchActiveUsers))
{
	$sendersName = $row['username'];
}


include('config.php');

?>

<div class="container mt-4">

	<form method="POST">

	<?php 
	  $fetchMsg = $_POST['writeMsg'];
	  $encryptedMsg = md5($fetchMsg);

	?>

	  <div class="mb-3">
	    <label class="form-label">Write a Message</label>
	    <textarea class="form-control" name="writeMsg" rows="3" ><?php echo $fetchMsg; ?></textarea>
	  </div>

	  <button type="submit" class="btn btn-success mt-2" name="encryptValue">Encrypt My Message</button>


	  <div class="mb-3">
	    <label class="form-label mt-4">Encrypted Message</label>
	    <textarea class="form-control" name="encryptMsg" rows="3" readonly><?php if(isset($_POST['encryptValue'])){echo $encryptedMsg; } ?></textarea>
	  </div>

	  <div class="mb-3">
	    <label class="form-label">Send Message To:</label>
	    
	    <select class="form-select" name="sendersName" aria-label="Example select with button addon">
	    	<option >-- Choose User ---</option>
	    	<?php 
	    $fetchOtherUsers = mysqli_query($config,"SELECT * FROM credentials WHERE useremail != '{$_SESSION['activeUser']}'");
	    while ($row = mysqli_fetch_assoc($fetchOtherUsers)) { ?>

		   
		    <option value="<?php echo $row['username']; ?>"><?php echo $row['username']; ?></option>
		   <?php } ?>
		  </select>

		
	  </div>

	  

	  <button type="submit" class="btn btn-primary mt-3" name="shareMsg">Send Message</button>
	</form>

</div>


<?php 

$fetchMsg = $_POST['writeMsg'];
$encryptedMsg = $_POST['encryptMsg'];
$receiversName = $_POST['sendersName'];

if(isset($_POST['shareMsg'])) 
{
  mysqli_query($config,"INSERT INTO message_sharing (senders_name,receivers_name,original_message,encrypted_message)VALUES('$sendersName','$receiversName','$fetchMsg','$encryptedMsg')");
  echo "<script>alert('Messages Sent to ".$receiversName."')</script>";
}


?>





<?php 

include('master_footer.php');

?>