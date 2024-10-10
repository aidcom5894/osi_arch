<?php 

include('master_page.php');
include('config.php');


$fetchActiveUsers = mysqli_query($config,"SELECT * FROM credentials WHERE useremail = '{$_SESSION['activeUser']}'");
while($row = mysqli_fetch_assoc($fetchActiveUsers))
{
	$username = $row['username'];

}

?>

<div class="container mt-4">
	
	<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Sl. No</th>
                <th>Senders Name</th>
                <th>Receivers Name</th>
                <th>Message</th>
                <th>Encrypted Message</th>
                <th>Date</th>
            </tr>
        </thead>

        <tbody>
        	<?php 

        		$fetchReceivedMsg = mysqli_query($config,"SELECT * FROM message_sharing WHERE receivers_name = '$username'");
        		while($row = mysqli_fetch_assoc($fetchReceivedMsg)){ ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['senders_name']; ?></td>
                <td><?php echo $row['receivers_name']; ?></td>
                <td><?php echo $row['original_message']; ?></td>
                <td><?php echo $row['encrypted_message']; ?></td>
                <td><?php echo $row['message_date']; ?></td>                
            </tr>
        <?php } ?>
        </tbody>


        <tfoot>
             <tr>
                <th>Sl. No</th>
                <th>Senders Name</th>
                <th>Receivers Name</th>
                <th>Message</th>
                <th>Encrypted Message</th>
                <th>Date</th>
            </tr>
        </tfoot>
    </table>
</div>



<script type="text/javascript">
	new DataTable('#example');
</script>







<?php 

include('master_footer.php');

?>