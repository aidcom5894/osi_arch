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
            <label class="form-label">User Email</label>
            <input type="email" class="form-control" name="useremail">
           </div>

            <div class="mb-3">
            <label class="form-label">User Name</label>
            <input type="text" class="form-control" name="dusername">
           </div>

          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" value="1234" name="password">
          </div>
         
          <button type="submit" name="registeruser" class="btn btn-primary">Submit</button>
        </form>

      </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>


<?php 

$username = $_POST['dusername'];
$useremail = $_POST['useremail'];
$password = $_POST['password'];

if(isset($_POST['registeruser']))
{
  mysqli_query($config,"INSERT INTO credentials(username,useremail,password)VALUES('$username','$useremail','$password')");

  echo "<script>alert('Data Inserted Successfully')</script>";
}

?>