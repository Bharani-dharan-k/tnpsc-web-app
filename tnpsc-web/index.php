<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<style>
/* Custom styles */
body {
  font-family: 'Arial', sans-serif;
  color: #333; /* Dark gray color */
}




.carousel-item img {
  border-radius: 10px; /* Adjust the value as needed */
}
.footer {
      background-color: #333;
      color: #fff;
      padding: 20px 0;
    }
    .social-icons a {
      color: #fff;
      font-size: 24px;
      margin-right: 10px;
    }
    .google-drive-link {
  margin-top: 20px;
}
.google-drive-link a {
  text-decoration: none;
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
  padding: 10px 20px;
  border-radius: 5px;
  transition: all 0.3s ease;
}
.google-drive-link a:hover {
  background-color: #0056b3;
  border-color: #0056b3;
}

</style>

  
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="0" >
<div class="container-fluid p-3 bg-dark text-white text-center">
    <nav class="navbar-expand-sm bg- navbar-white">
        <div class="container-fluid">
            <img src="logo.png" alt="Logo" style="width:100px;" class="rounded-pill">
          </a>
        </div>
      </nav>
  <h1><i><b>Tamilnadu Public Service Commisson</b></i></h1>
  <h2><b><marquee> தமிழ்நாடு அரசுப் பணியாளர் தேர்வாணையம்</marquee></b></h2>
</div>
<div class="container mt-2">
  <div class="row">
  </div>
</div>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="Tnpsc2.html">HOME</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="tn4.php">FORM REGISTRATION</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">GROUPS</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="group1.php">GROUP 1</a></li>
              <li><a class="dropdown-item" href="group2.php">GROUP 2</a></li>
              <li><a class="dropdown-item" href="group3.php">GROUP 2a</a></li>
              <li><a class="dropdown-item" href="group4.php">GROUP 4</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">LOGIN IN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signup.php">SIGN UP</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="text" placeholder="Search">
          <button class="btn btn-primary" type="button">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>
    
    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="1a.jpg" alt="Los Angeles" class="d-block"  width="100%" height="300">
      </div>
      <div class="carousel-item">
        <img src="2a.jpg" alt="Chicago" class="d-block"  width="100%" height="300">
      </div>
      <div class="carousel-item">
        <img src="3a.jpg" alt="New York" class="d-block"  width="100%" height="300">
      </div>
    </div>
    
    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-8">
        <h2 id="about"><i class="bi bi-info-circle icon"></i> TNPSC REFORMS</h2>
        <p>Tamil Nadu Public Service Commission has introduced a series of reforms to ensure free and fair recruitment process with the highest level of transparency in each stage of selection.Chief Minister Edappadi K. Palaniswami has made the announcements during zero hour in the Assembly on 1 June 2018. The upper age limit for those who appear for the examinations being conducted by the Tamil Nadu Public Service Commission for the</p>
      </div>
      <div class="col-md-4">
        
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="1.jpeg" class="d-block w-100" alt="Image 1">
              
            </div>
            <div class="carousel-item">
              <img src="2.jpg" class="d-block w-100" alt="Image 2">
              
            </div>
            <div class="carousel-item">
              <img src="4a.jpeg" class="d-block w-100" alt="Image 3">
              
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <img src="group 1.png" alt="Image 1" width="400" height="300">
      </div>
      <div class="col-md-4">
        <img src="group 2.png" alt="Image 2" width="400" height="300">
      </div>
    </div>
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
          <table class="table table-primary table-hover">
    <thead>
      <tr>
        <th>Post code</th>
        <th>Group 1</th>
        <th>no of vacancy</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1001</td>
        <td>DSP</td>
        <td>100</td>
      </tr>
      <tr>
        <td>1002</td>
        <td>ASP</td>
        <td>200</td>
      </tr>
      <tr>
        <td>1003</td>
        <td>IAS</td>
        <td>20</td>
      </tr>
    </tbody>
  </table>
      </div>
      <div class="col-md-4">
          <table class="table table-danger table-hover">
    <thead>
      <tr>
        <th>Post category</th>
        <th>vacancy(2023)</th>
        <th>vacancy(2024)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>01</td>
        <td>10</td>
        <td>3</td>
      </tr>
      <tr>
        <td>02</td>
        <td>14</td>
        <td>30</td>
      </tr>
      <tr>
        <td>03</td>
        <td>20</td>
        <td>20</td>
      </tr>
    </tbody>
  </table>
      </div>
    </div>
  </div><br>
  <div class="container">
  <h2><i>     TNPSC GROUP MODEL QUESTION PAPERS    </i></h2>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-3">
        <div class="google-drive-link">
          <a href="https://drive.google.com/file/d/1e6Fr2_eH3AovsNOugg_lIg7-L8ulkTEW/view?usp=drive_link" class="btn btn-primary">GROUP 1</a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="google-drive-link">
          <a href="https://drive.google.com/file/d/1dJcyviiMlitR4EIA4H_1Yr5BnwfdovJz/view?usp=drive_link" class="btn btn-primary">GROUP 2</a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="google-drive-link">
          <a href="https://drive.google.com/file/d/1GoAK1CYvSvXhX6a1Sa1PyIi879NkfftA/view?usp=drive_link" class="btn btn-primary">GROUP 2a</a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="google-drive-link">
          <a href="https://drive.google.com/file/d/1_bT2wV7k_Sdkko-NM1ZnmW37gCtrLRTx/view?usp=drive_link" class="btn btn-primary">GROUP 4</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container mt-5">
  <footer class="footer">
    <div class="container text-center">
      <div class="social-icons">
      <p>Follows on</p>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <!-- Add more social media icons as needed -->
      </div>
      <p>&copy; www.tnpscexamination.com</p>
      <p>Copyright © 2024 tamilnadu, Bharani & Co. Ltd. All rights reserved. For reprint rights: Tnpsc examination</p>
   
    </div>
  </footer>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
