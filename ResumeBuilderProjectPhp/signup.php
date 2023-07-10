<!DOCTYPE html>
<html>
<head>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">




    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="https://mobirise.com/extensions/careerm5/online-mentorship-program/assets/images/logo.png" type="image/x-icon">
    <meta name="description" content="">


    <title>Resume Maker</title>
    <link rel="stylesheet" href="./Online Mentorship Program_files/mobirise2.css">
    <link rel="stylesheet" href="./Online Mentorship Program_files/mobirise-icons-bold.css">
    <link rel="stylesheet" href="./Online Mentorship Program_files/bootstrap.min.css">
    <link rel="stylesheet" href="./Online Mentorship Program_files/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./Online Mentorship Program_files/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="./Online Mentorship Program_files/style.css">
    <link rel="stylesheet" href="./Online Mentorship Program_files/styles.css">
    <link rel="stylesheet" href="./Online Mentorship Program_files/style(1).css">
    <link rel="stylesheet" href="./Online Mentorship Program_files/recaptcha.css">

    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:100,200,300,400,500,600,700,800,900&display=swap"></noscript>
    <link rel="preload" as="style" href="./Online Mentorship Program_files/mbr-additional.css">
    <link rel="stylesheet" href="./Online Mentorship Program_files/mbr-additional.css" type="text/css">


    <style>
header {
  background-color:#f55c47;
  padding: 1rem;
}

nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
}

nav li {
  margin-right: 1rem;
}

nav li:last-child {
  margin-right: 0;
}

nav a {

  text-decoration: none;
  color: white;
  padding: 0.5rem;
  transition: all 0.3s ease-in-out;
}

nav a:hover {
  background-color: white;
  color: orange;
}

  </style>

</head>
<header>
  <nav>
    <ul>
    <li><a href="home.html">Home</a></li>
      <li><a href="signin.php">Sign In</a></li>
      
    
    </ul>
  </nav>
</header>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
       
        * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  background-color: #f7f7f7;
}

.form-container {
  max-width: 400px;
  margin: 50px auto;
  padding: 20px;
  border-radius: 10px;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

h1 {
  text-align: center;
  margin-bottom: 20px;
  color: #f55c47;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  font-size: 16px;
  font-weight: bold;
  margin-bottom: 5px;
  color: #555;
}

input {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ddd;
  font-size: 16px;
  color: #333;
margin-bottom:20px;

}

button {
  display: block;
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: none;
  background-color: #f55c47;
  color: #fff;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #e74c3c;
}
</style>
<body>


 

    <?php
    // Connect to the database
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'CvBuilder';
    $conn = mysqli_connect($host, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Validate input data
        if (empty($name) || empty($email) || empty($password)) {
            echo "<p>Please fill in all fields.</p>";
        } else {
            // Insert user data into the database table
            $sql = "INSERT INTO user_info (Name, Email, Password) VALUES ('$name', '$email', '$password')";

            if (mysqli_query($conn, $sql)) {
                // echo "<p>Thanks for signing up, $name!</p>";

                //session_start();
                $_SESSION['signedup']='yes';
                header("Location: signin2.php");
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }

    // Close the database connection
    mysqli_close($conn);
    ?>
    <div class="form-container">
    <form method="post">
    <h1>Sign Up</h1>
      <label for="name">Name</label>
      <input type="name" id="name" name="name" required>
   
            <label for="email">Email:</label>
            <input type="email" class="form" id="email" name="email"> 
            <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>
    <div class="mbr-section-btn  ">
    <input  class="btn btn-secondary-outline display-4" type="submit" value="Sign Up">
                        </div>
 
  </form>


  <!-- <form method="post">
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
    </div>
    <div class="mbr-section-btn">
    
            <input  class="btn btn-secondary-outline display-4" type="submit" value="Sign In">
                         
                        </div>
 
  </form> -->

</div>
</body>
</html>