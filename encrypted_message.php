<?php 

include('config.php');
include('master_page.php');

?>

<div class="container mt-4">

	<form method="POST">

	  <div class="mb-3">
	    <label class="form-label">Write a Message</label>
	    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
	  </div>

	  <div class="mb-3">
	    <label class="form-label">Encrypted Message</label>
	    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
	  </div>

	  <div class="mb-3">
	    <label class="form-label">Send Message To:</label>
	    
	    <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon">
	    	<option value="1">-- Choose User ---</option>
	    	<?php 
	    $fetchOtherUsers = mysqli_query($config,"SELECT * FROM credentials WHERE useremail != '{$_SESSION['activeUser']}'");
	    while ($row = mysqli_fetch_assoc($fetchOtherUsers)) { ?>

		   
		    <option value="1"><?php echo $row['username']; ?></option>
		   <?php } ?>
		  </select>

		
	  </div>

	  

	  <button type="submit" class="btn btn-primary mt-3">Submit</button>
	</form>

</div>









<?php 

include('master_footer.php');

?>