
<?php
// Receive the form data via POST method
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$high_school = $_POST['high_school'];
$city = $_POST['city'];
$country = $_POST['country'];
$masters = $_POST['masters'];
$bachelors = $_POST['bachelors'];
$institution_ms = $_POST['institution_ms'];
$institution_bs = $_POST['institution_bs'];
$institution_hs = $_POST['institution_hs'];
$skills = $_POST['skills'];
$company_name = $_POST['company_name'];

// Print out the form data
echo "Name: " . $name . "<br>";
echo "Email: " . $email . "<br>";
echo "Message: " . $message . "<br>";
echo "High School: " . $high_school . "<br>";
echo "City: " . $city . "<br>";
echo "Country: " . $country . "<br>";
echo "Masters: " . $masters . "<br>";
echo "Bachelors: " . $bachelors . "<br>";
echo "Institution (Masters): " . $institution_ms . "<br>";
echo "Institution (Bachelors): " . $institution_bs . "<br>";
echo "Institution (High School): " . $institution_hs . "<br>";
echo "Skills: " . $skills . "<br>";
echo "Company Name: " . $company_name . "<br>";
?>
