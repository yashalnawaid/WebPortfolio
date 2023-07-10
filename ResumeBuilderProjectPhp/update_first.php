<?php
session_start();

//$user_id = $_SESSION['user_id'];
$resume_id = $_GET['resume_id'];
$_SESSION['resume_id']=$resume_id;


$host = 'localhost';
$username = 'root';
$password = '';
$database = 'CvBuilder';
$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch existing data for the user
$select_query = "SELECT * FROM ResumeData WHERE resume_id='$resume_id'";
$result = mysqli_query($conn, $select_query);
$row = mysqli_fetch_assoc($result);

// Show all fields to the user and allow them to edit
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<style>
    /* Override Bootstrap styling for labels */
    label {
        font-weight: bold;
        color: #f55c47;
    }

    /* Style the form fields */
    input[type="text"], input[type="email"], input[type="date"] {
        width: 100%;
        padding: 0.5rem;
        border: none;
        border-bottom: 1px solid #ddd;
        font-size: 1rem;
        margin-bottom: 1rem;
    }

    /* Style the submit button */
    input[type="submit"] {
        background-color: #f55c47;
        color: #fff;
        padding: 0.5rem 1rem;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #e44a35;
    }
</style>
<form class="container" method="post" action="update.php">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" value="<?php echo $row['Name']; ?>">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" value="<?php echo $row['Email']; ?>">
    </div>

    <div class="form-group">
        <label for="city">City</label>
        <input type="text" class="form-control" name="city" value="<?php echo $row['city']; ?>">
    </div>

   

    <div class="form-group">
        <label for="masters">Masters Degree Title</label>
        <input type="text" class="form-control" name="masters" value="<?php echo $row['masters_degree_title']; ?>">
    </div>

    <div class="form-group">
        <label for="bachelors">Bachelors Degree Title</label>
        <input type="text" class="form-control" name="bachelors" value="<?php echo $row['bachelors_degree_title']; ?>">
    </div>

    <div class="form-group">
        <label for="institution_ms">Masters Institution</label>
        <input type="text" class="form-control" name="institution_ms" value="<?php echo $row['masters_institution']; ?>">
    </div>

    <div class="form-group">
        <label for="institution_bs">Bachelors Institution</label>
        <input type="text" class="form-control" name="institution_bs" value="<?php echo $row['bachelors_institution']; ?>">
    </div>

    <div class="form-group">
        <label for="skills">Skills</label>
        <input type="text" class="form-control" name="skills" value="<?php echo $row['skills']; ?>">
    </div>

    <div class="form-group">
        <label for="job">Job</label>
        <input type="text" class="form-control" name="job" value="<?php echo $row['Title']; ?>">

  
    <label for="kr1">Key Responsibility 1</label>
    <input type="text" name="kr1" value="<?php echo $row['key_responsibility_1']; ?>"><br>

    <label for="kr2">Key Responsibility 2</label>
    <input type="text" name="kr2" value="<?php echo $row['key_responsibility_2']; ?>"><br>

    <input type="submit" value="Update">
</form>

