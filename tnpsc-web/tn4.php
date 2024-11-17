<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      background-image: url('back4.jpg');
      background-size: cover; /* Adjust as needed */
      background-position: center; /* Adjust as needed */
    }
    
    .card {
      background-color: rgba(255, 255, 255, 0.1);
    }
    .form-control {
      color: rgb(0, 0, 0);
    }
    .form-control::placeholder {
      color: rgb(239, 12, 12);
    }
  </style>
</head>
<body>
  <div class="container mt-5">
  <div class="row justify-content-center">
      <div class="col-md-6">
          <div class="card">
              <div class="card-header bg-succes text-white">
                  <h4 class="mb-0">TNPSC Exam Registration</h4>
              </div>
              <div class="card-body">
                  <form id="tnpscRegistrationForm">
                      <div class="form-group">
                          <label for="fullName">Full Name</label>
                          <input type="text" class="form-control" id="fullName" name="fullName" required>
                      </div>
                      <div class="form-group">
                          <label for="email">Email Address</label>
                          <input type="email" class="form-control" id="email" name="email" required>
                      </div>
                      <div class="form-group">
                          <label for="phoneNumber">Phone Number</label>
                          <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required>
                      </div>
                      <div class="form-group">
                          <label for="dob">Date of Birth</label>
                          <input type="date" class="form-control" id="dob" name="dob" required>
                      </div>
                      <div class="form-group">
                          <label for="address">Address</label>
                          <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                      </div>
                      <!-- Additional Options -->
                      <div class="form-group">
                          <label for="qualification">Qualification</label>
                          <input type="text" class="form-control" id="qualification" name="qualification">
                      </div>
                      <div class="form-group">
                          <label for="examCenter">Preferred Exam Center</label>
                          <select class="form-control" id="examCenter" name="examCenter">
                              <option value="center1">ERODE</option>
                              <option value="center2">CHENNAI</option>
                              <option value="center3">KARUR</option>
                              <!-- Add more options as needed -->
                          </select>
                      </div><br><br>
                      <!-- End of Additional Options -->
                      <a href="register.php" class="btn btn-primary">SUMBIT</a>
                      <a href="index.php" class="btn btn-primary">BACK</a>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
</body>
</html>