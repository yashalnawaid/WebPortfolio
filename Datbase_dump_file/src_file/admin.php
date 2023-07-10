<?php
include("db.php");

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $option = $_POST["option"];

    if ($option == "users") {
        $sql = "SELECT * FROM patient";
        $result = mysqli_query($conn, $sql);
    } elseif ($option == "doctors") {
        $sql = "SELECT * FROM doctor";
        $result = mysqli_query($conn, $sql);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User and Doctor Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 20px;
        }

        .form-group {
            text-align: left;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 8px;
            border: 1px solid #ccc;
        }

        table th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>User and Doctor Information</h2>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="option">Select an option:</label>
                <select name="option" id="option">
                    <option value="users">Users</option>
                    <option value="doctors">Doctors</option>
                </select>
            </div>
            <input type="submit" value="Show Information">
        </form>

        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($result)) {
        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Address</th><th>Phone</th><th>Action</th></tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["ID"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["address"] . "</td>";
                echo "<td>" . $row["phone"] . "</td>";
                // echo "<td>" . $row["specialization"] . "</td>";
                // echo "<td>" . $row["location"] . "</td>";
                if ($option == "users") {
                    echo "<td><a href='update_patient.php?id=" . $row["ID"] . "'>View Profile</a></td>";
                } elseif ($option == "doctors") {
                    echo "<td><a href='update_doctor.php?id=" . $row["ID"] . "'>View Profile</a></td>";
                }
                 // Add a hyperlink to the profile.php page with the ID as a parameter
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<p>No records found.</p>";
        }
    }
?>

            </div>
            
            </body>
            </html>