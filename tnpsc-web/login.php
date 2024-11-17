
<?php
$logged=0;
$invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST')
{
  include 'server.php';
  $name=$_POST['username'];
  $password=$_POST['password'];
  $sql="SELECT * FROM tab WHERE username ='$name' AND password='$password'";
  $result=mysqli_query($con, $sql);
  if($result)
  {
    $num=mysqli_num_rows($result);
    if($num>0)
    {
      $logged=1;
      session_start();
      $_SESSION['username']=$name;
      $row = mysqli_fetch_assoc($result);
      $_SESSION['email']=$row['email'];
      $_SESSION['gender']=$row['gender'];
      $_SESSION['exam']=$row['exam'];
      
      header('location:Home.php');
    }
    else{
      $invalid=1;
      echo "Invalid username /passcode";
    }
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  
<!-- Bootstrap JS and jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body {
      background-image: url('login1.jpg');
      background-size: cover;
      background-position: center;
      height: 100vh;
    }
    .card {
      margin-top: 100px;
      border: none;
    }
    .card-header {
      background-color: rgba(96, 14, 14, 0);
      color: rgb(146, 13, 13);
    }
  </style>
  <script>
     function validateForm() {
    let username = document.forms["login"]["username"].value;
    let password = document.forms["login"]["password"].value;
    if (username == "") {
        alert("Please enter your name.");
        return false;
    }
    if (password == "") {
        alert("Please enter a password.");
        return false;
    }
}
</script>
</head>
<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          Login Form
        </div>
        <div class="card-body">
        <?php
    if ($invalid) {
    echo '<div class="alert alert-danger" role="button">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>FAILED!</strong><p>Incorrect password</p>
  </div>';
  }
  ?>
          <form action="login.php" method="post" name="login" onclick="validateForm()>
            <div class="form-group">
              <label for="username">USERNAME</label>
              <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control"  name="password" id="password" placeholder="Enter password">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="rememberMe">
              <label class="form-check-label" for="rememberMe">Remember me</label>
            </div>
            <div class="form-group">
              <a href="#" class="forgot-password">Forgot Password?</a>
            </div>
            <button type="submit" class="btn btn-primary btn-block" onclick="validateForm()">Login</button><br><br>
            <div class=""m_register-link>  
              <p>Dont have an account? <a href="signup.php" target="_blank" rel="noreferrer">Register</a></p>
        </div>
            <a href="index.php" class="btn btn-primary">BACK</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
