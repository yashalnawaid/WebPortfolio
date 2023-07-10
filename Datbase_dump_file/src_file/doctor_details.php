<?php
include("db.php");

session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    // Redirect to the login page if the user is not logged in
    header("Location: patient_signin.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $doctor_id = $_GET["id"];
    $patient_id = $_SESSION["patient_id"];
    $appointment_date = $_POST["appointment_date"];

    // Insert the appointment into the doctor_info table
    $sql = "INSERT INTO doctor_info (doctor_id, patient_id, appointment_date) VALUES ('$doctor_id', '$patient_id', '$appointment_date')";

    if (mysqli_query($conn, $sql)) {
        $success = "Appointment created successfully.";
    } else {
        $error = "Error creating appointment: " . mysqli_error($conn);
    }
}

if (isset($_GET["id"])) {
    $doctor_id = $_GET["id"];

    // Fetch the doctor's information from the database
    $sql = "SELECT * FROM doctor WHERE ID = '$doctor_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $name = $row["name"];
    $email = $row["email"];
    $specialization = $row["specialization"];
    $city = $row["city"];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Doctor Details</title>
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
        }

        input[type="date"],
        input[type="submit"] {
            margin-top: 8px;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <h2 class="mt-4">Doctor Details</h2>
        <h3>Name: <?php echo $name; ?></h3>
        <p>Email: <?php echo $email; ?></p>
        <p>Specialization: <?php echo $specialization; ?></p>
        <p>City: <?php echo $city; ?></p>

        <h3 class="mt-4">Create Appointment</h3>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . "?id=" . $doctor_id; ?>">
            <div class="form-group">
                <label for="appointment_date">Appointment Date:</label>
                <input type="date" name="appointment_date" id="appointment_date" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Create Appointment" class="btn btn-primary">
            </div>
        </form>

        <?php if(isset($success)) { echo $success; } ?>
        <?php if(isset($error)) { echo $error; } ?>
    </div>
</body>
</html>
