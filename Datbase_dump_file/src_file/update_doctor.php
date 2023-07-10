<?php
include("db.php");

session_start();
$doctor_id = $_GET["id"];
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: doctor_login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $doctor_id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $specialization = $_POST["specialization"];
    $availability = $_POST["availability"];
    $city = $_POST["city"];

    $sql = "UPDATE doctor SET name = '$name', email = '$email', password = '$password', phone = '$phone', address = '$address', specialization = '$specialization', availability = '$availability', city = '$city' WHERE ID = '$doctor_id'";

    if (mysqli_query($conn, $sql)) {
        $success = "Profile updated successfully.";
    } else {
        $error = "Error updating profile: " . mysqli_error($conn);
    }
} else {
    // $doctor_id = $_SESSION["doctor_id"];
    $sql = "SELECT * FROM doctor WHERE ID = '$doctor_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $name = $row["name"];
    $email = $row["email"];
    $password = $row["password"];
    $phone = $row["phone"];
    $address = $row["address"];
    $specialization = $row["specialization"];
    $availability = $row["availability"];
    $city = $row["city"];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Doctor Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        h2 {
            color: #55b5a5;
            text-align: center;
            margin-top: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #f2f2f2;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        label {
            color: #21796c;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            margin-top: 8px;
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            margin-top: 16px;
            width: 100%;
            padding: 8px;
            background-color: #55b5a5;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #439489;
        }

        .success-message {
            color: #55b5a5;
            margin-top: 16px;
        }

        .error-message {
            color: #e74c3c;
            margin-top: 16px;
        }
        .button-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 10px;
}

    </style>
</head>
<body>
    <h2>Update Doctor Information</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $doctor_id; ?>">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo $name; ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" value="<?php echo $email; ?>" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control" value="<?php echo $password; ?>" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone" class="form-control" value="<?php echo $phone; ?>" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" class="form-control" value="<?php echo $address; ?>" required>
        </div>
        <div class="form-group">
    <label for="specialization">Specialization:</label>
    <input type="text" name="specialization" id="specialization" class="form-control" value="<?php echo $specialization; ?>" required>
</div>
<div class="form-group">
    <label for="availability">Availability:</label>
    <input type="text" name="availability" id="availability" class="form-control" value="<?php echo $availability; ?>" required>
</div>
<div class="form-group">
    <label for="city">City:</label>
    <input type="text" name="city" id="city" class="form-control" value="<?php echo $city; ?>" required>
</div>
<div class="row">
    <div class="col">
        <input type="submit" value="Update Profile" class="btn btn-primary">
    </div>
    <div class="col">
        <a href="delete_doctor.php?id=<?php echo $doctor_id; ?>" class="btn btn-danger">Delete</a>
    </div>
</div>


</form>
<?php if(isset($success)) { echo '<div class="success-message">' . $success . '</div>'; } ?>
<?php if(isset($error)) { echo '<div class="error-message">' . $error . '</div>'; } ?>
</body>
</html>