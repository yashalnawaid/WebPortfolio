<?php
include("db.php");

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    
    $sql = "SELECT * FROM doctor WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    
if ($result) {
    $count = mysqli_num_rows($result);
    
    if ($count == 1) {
        $row = mysqli_fetch_assoc($result);
        $doctor_id = $row["ID"];
        
      
        $_SESSION["doctor_id"] = $doctor_id;
        $_SESSION["loggedin"] = true;}
    //echo $doctor_id;

    if ($count == 1) {
   
        //$_SESSION["doctor_id"] = $row["doctor_id"];
        //$_SESSION["loggedin"] = true;

       
        //header("Location: doctor_dashboard.php");
        echo "<script>alert('Login Successful!')</script>";
        echo "<script>window.location.href='update_doctor.php'</script>";
        exit();
    } else {
        $error = "Invalid email or password.";
    }
}
}
?>
 <!-- <?php include('header.php')?> -->
<!DOCTYPE html>
<html>
<head>
    <title>Doctor Sign In</title>
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
        }

        .container {
            font-family: 'Nunito', sans-serif;
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-family: 'Nunito', sans-serif;
            margin-bottom: 20px;
            color:#55b5a5;
        }

        label {
            font-weight: bold;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            font-family: 'Nunito', sans-serif;
            width: 100%;
            padding: 10px;
            background-color: #55b5a5;
            border: none;
            color: #fff;
            cursor: pointer;
            border-radius: 4px;
        }

        input[type="submit"]:hover {
            background-color: #91cdc3;
            /* opacity: 50%; */
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>




    <div class="container">
        <h2>Doctor Sign In</h2>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            
            <div class="form-group">
                <input type="submit" value="Sign In" class="btn btn-primary">
            </div>
        </form>
        <?php if(isset($error)) { echo "<p class='error-message'>$error</p>"; } ?>
    </div>
</body>
</html>


