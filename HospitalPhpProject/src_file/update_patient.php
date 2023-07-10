<?php
include("db.php");

session_start();
$patient_id = $_GET["id"];

//echo $patient_id;
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: patient_login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patient_id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    $sql = "UPDATE patient SET name = '$name', email = '$email', password = '$password', phone = '$phone', address = '$address' WHERE ID = '$patient_id'";

    if (mysqli_query($conn, $sql)) {
        $success = "Profile updated successfully.";
    } else {
        $error = "Error updating profile: " . mysqli_error($conn);
    }
} else {
    // $patient_id = $_SESSION["patient_id"];
    $sql = "SELECT * FROM patient WHERE ID = '$patient_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $name = $row["name"];
    $email = $row["email"];
    $password = $row["password"];
    $phone = $row["phone"];
    $address = $row["address"];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Patient Information</title>
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
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #f2f2f2;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        label {
            color: #21796c;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="submit"] {
            margin-top: 8px;
        }

        .success-message {
            color: #28a745;
            margin-top: 8px;
        }

        .error-message {
            color: #dc3545;
            margin-top: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Update Patient Information</h2>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $patient_id; ?>">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo $name; ?>" required class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>" required class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" value="<?php echo $password; ?>" required class="form-control">
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>" required class="form-control">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" value="<?php echo $address; ?>" required class="form-control">
            </div>
            <!-- <div class="form-group">
                <input type="submit" value="Update Profile" class="btn btn-primary">
            </div> -->

            <div class="row">
    <div class="col">
    <input type="submit" value="Update Profile" class="btn btn-primary">
    </div>
    <div class="col">
        <a href="delete_patient.php?id=<?php echo $doctor_id; ?>" class="btn btn-danger">Delete</a>
    </div>
</div>


        </form>
        <?php if(isset($success)) { echo "<p class='success-message'>$success</p>"; } ?>
        <?php if(isset($error)) { echo "<p class='error-message'>$error</p>"; } ?>
    </div>
</body>
</html>
