<?php
include("db.php");

session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    // Redirect to the login page if the user is not logged in
    header("Location: patient_signin.php");
    exit();
}

if (isset($_SESSION["doctor_id"])) {
    $doctor_id = $_SESSION["doctor_id"];

    // Fetch the doctor's information from the database
    $sql = "SELECT * FROM doctor WHERE ID = '$doctor_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $name = $row["name"];
    $email = $row["email"];
    $specialization = $row["specialization"];
    $city = $row["city"];

    // Fetch the doctor's appointments from the doctor_info table
    $sql = "SELECT * FROM doctor_info WHERE doctor_id = '$doctor_id'";
    $appointments_result = mysqli_query($conn, $sql);
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

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .appointment-table {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mt-4">Doctor Details</h2>
        <h3>Name: <?php echo $name; ?></h3>
        <p>Email: <?php echo $email; ?></p>
        <p>Specialization: <?php echo $specialization; ?></p>
        <p>City: <?php echo $city; ?></p>

        <h3 class="mt-4">Appointments</h3>
        <table class="table appointment-table">
            <thead>
                <tr>
                    <th>Appointment Date</th>
                    <th>Patient Name</th>
                    <th>Patient Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($appointments_result) > 0) {
                    while ($appointment_row = mysqli_fetch_assoc($appointments_result)) {
                        $appointment_date = $appointment_row["appointment_date"];
                        $patient_id = $appointment_row["patient_id"];

                        // Fetch the patient's information from the database
                        $sql = "SELECT * FROM patient WHERE ID = '$patient_id'";
                        $patient_result = mysqli_query($conn, $sql);
                        $patient_row = mysqli_fetch_assoc($patient_result);

                        $patient_name = $patient_row["name"];
                        $patient_email = $patient_row["email"];

                        echo "<tr>";
                        echo "<td>$appointment_date</td>";
                        echo "<td>$patient_name</td>";
                        echo "<td>$patient_email</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No appointments found.</td></tr>";
                }
                ?>
            </tbody>
            </body>
            </html>
       
