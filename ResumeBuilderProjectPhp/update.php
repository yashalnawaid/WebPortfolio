<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
$resume_id = $_SESSION['resume_id'];
//$user_id = $_SESSION['user_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$city = $_POST['city'];

$masters = $_POST['masters'];
$bachelors = $_POST['bachelors'];
$institution_ms = $_POST['institution_ms'];
$institution_bs = $_POST['institution_bs'];
$skills = $_POST['skills'];
$job = $_POST['job'];

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

// Update the data in the database
$update_query = "UPDATE ResumeData SET Name='$name', Email='$email', city='$city', masters_degree_title='$masters', bachelors_degree_title='$bachelors', masters_institution='$institution_ms', bachelors_institution='$institution_bs', skills='$skills', position='$job', key_responsibility_1='$kr1', key_responsibility_2='$kr2', Title='$job' WHERE resume_id='$resume_id'";

mysqli_query($conn, $update_query);

if (mysqli_affected_rows($conn) > 0) {
    echo "Data updated successfully.";
    unset($_SESSION['resume_id']);
    header("Location: allresume.php");
} else {
    // echo "Error: " . mysqli_error($conn);
    echo "error". mysqli_error($conn);
}

mysqli_close($conn);
?>
