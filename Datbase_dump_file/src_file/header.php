<!DOCTYPE html>
<html>
<head>
  <title>Navbar Example</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    .nav_search-btn {
      margin-left: 10px;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index.php">Hospital Website</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="doctor_signin.php"> Doctor Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="patient_signin.php">Patient Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="doctors.html">Admin Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact Us</a>
          </li>
        </ul>
        <form class="form-inline ml-auto">
          <button class="btn btn-light my-2 my-sm-0 nav_search-btn" type="submit">
            <i class="fa fa-search" aria-hidden="true"></i>
          </button>
        </form>
      </div>
    </div>
  </nav>
 
</body>
</html>
