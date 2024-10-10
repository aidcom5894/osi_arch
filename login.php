<?php 

include('config.php');

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <div class="container mt-4">
    	<form method="POST">
		  
		  <div class="mb-3">
		    <label class="form-label">Email</label>
		    <input type="email" class="form-control" name="email">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Password</label>
		    <input type="password" class="form-control" name="userpassword">
		  </div>

		  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
		</form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>

<?php 

$email = $_POST['email'];
$password = $_POST['userpassword'];

$matchCredentials = mysqli_query($config,"SELECT * FROM credentials WHERE useremail='$email' AND password='$password'");

if(isset($_POST['submit']))
{
	if(mysqli_num_rows($matchCredentials)>0)
	{
		session_start();
		$_SESSION['activeUser'] = $email;
		echo "<script>alert('Login Successful');window.location.href='message.php'</script>";

	}
}


?>