<?php



$host = 'localhost';
$username = 'root';
$password = '';
$database = 'CvBuilder';
$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$resume_id = 0; // replace with the actual resume_id you want to retrieve

$select_query = "SELECT * FROM ResumeData WHERE resume_id = '$resume_id'";
$result = mysqli_query($conn, $select_query);

if (mysqli_num_rows($result) == 1) {
    // Resume data found, store it in variables
    $row = mysqli_fetch_assoc($result);
    $user_id = $row['user_id'];
    $name = $row['Name'];
    $email = $row['Email'];
    $job = $row['title'];
    $city = $row['city'];
    $bachelors = $row['bachelors_degree_title'];
    $institution_bs = $row['bachelors_institution'];
    $masters = $row['masters_degree_title'];
    $institution_ms = $row['masters_institution'];
    $objective = $row['objective'];
    $skills = $row['skills'];
    $company_name = $row['previous_company'];
    $position = $row['position'];
    $kr1 = $row['key_responsibility_1'];
    $kr2 = $row['key_responsibility_2'];
    
    // Do something with the variables, perhaps display them
    echo "User ID: " . $user_id . "<br>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Title: " . $job . "<br>";
    echo "City: " . $city . "<br>";
    echo "Bachelors Degree Title: " . $bachelors . "<br>";
    echo "Bachelors Institution: " . $institution_bs . "<br>";
    echo "Masters Degree Title: " . $masters . "<br>";
    echo "Masters Institution: " . $institution_ms . "<br>";    echo "Objective: " . $objective . "<br>";
    echo "Skills: " . $skills . "<br>";
    echo "Previous Company: " . $company_name . "<br>";
    echo "Position: " . $position . "<br>";
    echo "Key Responsibility 1: " . $kr1 . "<br>";
    echo "Key Responsibility 2: " . $kr2 . "<br>";
} else {
    echo "Resume not found.";
}

mysqli_close($conn);
?>