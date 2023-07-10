<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
            margin-top: 50px;
        }
        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.3);
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border-radius: 3px;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0069d9;
        }
    </style>
</head>
<body>
    <h1>Sign Up</h1>
    <?php
   include('db_connect.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

       
        if (empty($name) || empty($email) || empty($password)) {
            echo "<p>Please fill in all fields.</p>";
        } else {
            // Insert user data into the database table
            $sql = "INSERT INTO admin_info (Name, Email, Password) VALUES ('$name', '$email', '$password')";

            if (mysqli_query($conn, $sql)) {
                echo "<p>Thanks for signing up, $name!</p>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }

    // Close the database connection
    mysqli_close($conn);
    ?>
    <form method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form" id="email" name="email"> 
            <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>

        <input type="submit" value="Sign Up">
    </form>
</body>
</html>