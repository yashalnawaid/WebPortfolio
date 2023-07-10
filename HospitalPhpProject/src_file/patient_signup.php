<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];

    $sql = "INSERT INTO patient (name, email, password, address, phone) VALUES ('$name', '$email', '$password', '$address', '$phone')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Sign Up Successful!')</script>";
        exit();
    } else {
        $error = "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Sign Up</title>
</head>
<link href="css/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style>
    .{
        font-family: 'Nunito', sans-serif;
        color:#55b5a5;
    }
    label {
        font-family: 'Nunito', sans-serif;
        color:#21796c;
     
    }
    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type="submit"] {
      background-color:#55b5a5;
      color: #fff;
      padding: 10px 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color:#55b5a5;
        opacity: 70%;
    }
    form {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      background-color: #f2f2f2;
    }
  </style>
<body>
    <h2 class="text-center" style=" font-family: 'Nunito', sans-serif;
        color:#55b5a5; padding:40px;">User Sign Up</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" name="address" id="address" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="text" name="phone" id="phone" class="form-control" required>
    </div class="text-center">
    <div class="text-center"></div>
    <div class="text-center"> <!-- Center the button -->
      <input type="submit" value="Sign Up" class="btn btn-primary">
    </div>
  </form>
    <?php if(isset($error)) { echo $error; } ?>
</body>
</html>
