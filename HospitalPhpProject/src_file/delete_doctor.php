<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["id"])) {
        $doctor_id = $_GET["id"];

        $sql = "DELETE FROM doctor WHERE ID = '$doctor_id'";

        if (mysqli_query($conn, $sql)) {
            $success = "Doctor deleted successfully.";
        } else {
            $error = "Error deleting doctor: " . mysqli_error($conn);
        }
    } else {
        $error = "Invalid doctor ID.";
    }
} else {
    $error = "Invalid request method.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Doctor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #f2f2f2;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
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
        <h2>Delete Doctor</h2>
        <?php if(isset($success)) { echo "<p class='success-message'>$success</p>"; } ?>
        <?php if(isset($error)) { echo "<p class='error-message'>$error</p>"; } ?>
    </div>
</body>
</html>
