<?php 

	session_start();
	include('config.php');

	if(!isset($_SESSION['activeUser']))
	{
		session_start();
		session_unset();
		unset($_SESSION['activeUser']);
		session_destroy();
		header('Location:login.php');
	}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>


    <title>Hello, world!</title>
  </head>
  <body>
  	<?php 

  		$findsession = mysqli_query($config,"SELECT * FROM credentials WHERE useremail='{$_SESSION['activeUser']}'");
  		while($row = mysqli_fetch_assoc($findsession))
  		{
  			$fetchUser = $row['username'];
  		}


  	?>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="message.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="encrypted_message.php">Write Message</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            View Message
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="see_all_message.php">Check</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><?php echo $fetchUser; ?></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="logout.php" tabindex="-1">Logout</a>
        </li>

        
      </ul>
     
    </div>
  </div>
</nav>

