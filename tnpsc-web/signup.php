
<?php
$registered=0;
$userexists=0;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'server.php';
    $name=$_POST['username'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $password=$_POST['password'];
    $exam=$_POST['exam'];
    $sql="SELECT * FROM tab WHERE username='$name'";
    $result=mysqli_query($con, $sql);
    if($result)
    {
        $num=mysqli_num_rows($result);
        if($num>0)
        {
            echo "User already exists!";
            $userexists=1;
        }
        else
        {
            $sql="INSERT INTO tab (username,email,gender,dob,password,exam) VALUES ('$name', '$email', '$gender', '$dob', '$password','$exam')";
            $result=mysqli_query($con, $sql);
            if($result)
            {
                echo "Registered successfully!";
                $registered=1;
                header("Location: index.php");
            }
            else{
                die(mysqli_error($con));
            }
        }
    }
}
if($userexists)
  {
    echo '<div class="alert alert-danger" role="button">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>FAILED!</strong><p>User Already exists...</p>
  </div>';
  }
  if($registered){
    echo '<div class="alert alert-success" role="button">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Success!</strong><p>SUCCESFULLY CREATED</p>
  </div>';
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup Form</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script>
     function validateForm() {
    let username=document.forms["signup"]["username"].value;
    let email=document.forms["signup"]["email"].value;
    let gender=document.forms["signup"]["gender"].value;
    let dob=document.forms["signup"]["dob"].value;
    let password=document.forms["signup"]["password"].value;
    let exam=document.forms["signup"]["exam"].value;

    if (username == "") {
        alert("Please enter your name.");
        return false;
    }

    if (email == "") {
        alert("Please enter a valid email address.");
        return false;
    }

    if (gender == "") {
        alert("Please enter your phone number.");
        return false;
    }

    if (dob == "") {
        alert("Please enter a dob.");
        return false;
    }

    if (password == "") {
        alert("Please select your password.");
        return false;
    }

    if (exam == "") {
        alert("Please enter the type of exam you want to write.");
        return false;
    }
}
</script>
<style>
    body {
      background-image: url('back2.jpg');
      background-size: cover; /* Adjust as needed */
      background-position: center; /* Adjust as needed */
    }
  
    .card {
      background-color: rgba(231, 221, 221, 0.973);
    }
    .form-control {
      color: rgb(238, 16, 16);
    }
    .form-control::placeholder {
      color: rgb(0, 0, 0);
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Signup Form
        </div>
        <div class="card-body">
          <form action="signup.php" method="post" name="signup" onsubmit="return validateForm()">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="gender">Gender</label>
              <select class="form-control" name="gender" id="gender">
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
              </select>
            </div>
            <div class="form-group">
              <label for="dob">Date of Birth</label>
              <input type="date" class="form-control" name="dob" id="dob">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
            </div>
            <div class="form-group">
                          <label for="examCenter">GROUP TYPES</label>
                          <select class="form-control" id="exam" name="exam">
                              <option value="group 1">group 1</option>
                              <option value="group 2">group 2</option>
                              <option value="group 3">group 2a</option>
                              <option value="group 4">group 4</option>
                              <!-- Add more options as needed -->
                          </select>
                      </div>
            <button type="submit" class="btn btn-primary" onclick="validateForm()">Signup</button>
            <a href="index.php" class="btn btn-primary">BACK</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS and jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>


