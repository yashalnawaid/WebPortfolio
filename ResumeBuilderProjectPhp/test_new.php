<?php
session_start();

$user_id = $_SESSION['user_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$city = $_POST['city'];

$country = $_POST['country'];
$masters = $_POST['masters'];
$bachelors = $_POST['bachelors'];
$institution_ms = $_POST['institution_ms'];
$institution_bs = $_POST['institution_bs'];

$skills = $_POST['skills'];
$company_name = "Astera";
$job = $_POST['job'];
$start = $_POST['start'];
$end = $_POST['end'];
$kr1 = $_POST['kr1'];
$kr2 = $_POST['kr2'];

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'CvBuilder';
$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$insert_query = "INSERT INTO ResumeData (user_id, Name, Email, title, city, bachelors_degree_title, bachelors_institution, masters_degree_title, masters_institution, objective, skills, previous_company, position, key_responsibility_1, key_responsibility_2) VALUES ('$user_id','$name', '$email', '$job', '$city', '$bachelors', '$institution_bs', '$masters', '$institution_ms', '$kr1', '$skills', '$company_name', '$job', '$kr1', '$kr2')";

mysqli_query($conn, $insert_query);

if (mysqli_affected_rows($conn) > 0) {
    echo "Data inserted successfully.";
    header("Location: allresume.php");
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
