<?php
include("db.php");

// Function to sanitize user inputs
function sanitize_input($input)
{
    return $input;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchInput = sanitize_input($_POST["searchInput"]);

    // Search for doctors based on specialization or location
    $sql = "SELECT * FROM doctor WHERE specialization LIKE '%$searchInput%' OR city LIKE '%$searchInput%'";
    $result = mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Search Doctor</title>
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

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #55b5a5;
            color: #fff;
            padding: 10px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #55b5a5;
            opacity: 70%;
        }

        .table-responsive {
            margin-top: 20px;
        }

        .table-bordered {
            border: 1px solid #ccc;
        }

        .table-bordered th,
        .table-bordered td {
            color: #55b5a5;
        }

        .mt-4 {
            margin-top: 4rem;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Search Doctor</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group">
            <label for="searchInput text-center">Search by Specialization or Location</label>
            <input type="text" name="searchInput" id="searchInput" class="form-control" required>
        </div>
        <div class="form-group text-center">
            <input type="submit" value="Search" class="btn btn-primary">
        </div>
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (mysqli_num_rows($result) > 0) {
        echo "<h3 class='text-center mt-4' style='color: #55b5a5;'>Search Results:</h3>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-bordered mt-3 text-center'>";
        echo "<tr><th>Name</th><th>Email</th><th>Specialization</th><th>Location</th><th>View Details</th></tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["specialization"] . "</td>";
            echo "<td>" . $row["city"] . "</td>";
            echo "<td><a href=\"doctor_details.php?id=" . $row["ID"] . "\">View Details</a></td>";
           

            echo "</tr>";
        }

        echo "</table>";
        echo "</div>";
    } else {
        echo "<p class='text-center mt-4' style='color: #55b5a5;'>No doctors found.</p>";
    }
}


?>


   
</body>
</html>
