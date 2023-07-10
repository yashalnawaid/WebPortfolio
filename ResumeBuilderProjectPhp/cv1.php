
<?php


include('db_connect.php');


$resume_id = $_GET['resume_id'];
//$user_id = $_Session['user_id']; // Replace with actual user ID
$user_id = $_SESSION['user_id'];


$sql = "SELECT name, phone, city, country, institution_highschool, institution_bachelors, institution_masters, Company_name, exp_start_date, exp_end_date, skills, job_title FROM resume_data WHERE resume_id=".$resume_id." AND user_id=".$user_id;
$result = mysqli_query($conn, $sql);


if ($result && mysqli_num_rows($result) > 0) {  while ($row = mysqli_fetch_assoc($result)) {
    $name = $row['name'];
    $phone = $row['phone'];
    $city = $row['city'];
    $country = $row['country'];
    $institution_highschool = $row['institution_highschool'];
    $institution_bachelors = $row['institution_bachelors'];
    $institution_masters = $row['institution_masters'];
    $Company_name = $row['Company_name'];
    $exp_start_date = $row['exp_start_date'];
    $exp_end_date = $row['exp_end_date'];
    $skills = $row['skills'];
    $job_title = $row['job_title'];
  }
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
	<title>My Resume</title>
	<link href="style.css" rel="stylesheet">
</head>
<style>
    /* Set the font family and size for the entire page */
body {
  font-family: Arial, sans-serif;
  font-size: 16px;
}

/* Style the page container */
.page {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
}

/* Style the top bar */
.top-bar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}

/* Style the name */
.name div {
  font-size: 32px;
  font-weight: bold;
  margin-bottom: 10px;
}

/* Style the side bar */
.side-bar {
  display: flex;
  align-items: center;
}

/* Style the mugshot */
.mugshot img {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  margin-right: 10px;
}

/* Style the social icons */
.social {
  display: inline-block;
  width: 30px;
  height: 30px;
  margin-right: 10px;
  background-size: cover;
}

.twitter {
  background-image: url('https://i.imgur.com/v6c13Uf.png');
}

.pinterest {
  background-image: url('https://i.imgur.com/TwH4CLa.png');
}

.linked-in {
  background-image: url('https://i.imgur.com/DK29a6d.png');
}

/* Style the content container */
.content-container {
  margin-bottom: 20px;
}

/* Style the headings */
.caps {
  text-transform: uppercase;
  margin-bottom: 10px;
}

.justified {
  text-align: justify;
}

/* Style the list items */
.list-thing {
  margin-bottom: 20px;
}

.list-thing h3 {
  margin-bottom: 10px;
}

.light {
  font-weight: 300;
  line-height: 1.5;
}

.long-margin {
  margin-top: 10px;
}

/* Style the separator */
.separator {
  height: 1px;
  background-color: #ccc;
  margin: 20px 0;
}

/* Style the skills list */
ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

ul li {
  margin-bottom: 10px;
  padding-left: 20px;
  position: relative;
}

ul li:before {
  content: '';
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background-color: #333;
  position: absolute;
  top: 6px;
  left: 0;
}

    </style>
<body>
	<div class="page">
		<div class="top-bar">
			<div class="name">
				<div><?php echo $name;?></div>
			</div>
			<div class="side-bar">
				<div class="mugshot">
					<img src="https://i.imgur.com/PmFX78Y.png" alt="Mugshot">
				</div>
				
		</div>
		<div class="content-container">
			<h2 class="caps justified">Objective</h2>
			<p class="light">I am an experienced software engineer with a passion for developing clean and efficient code. I have worked on several projects that have required me to collaborate with other engineers, project managers, and stakeholders. I am always eager to learn new technologies and techniques to improve my skills and contribute to the success of the team.</p>
			<h2 class="caps justified">Education</h2>
			<div class="list-thing">
				<h3>Master of Science in Computer Science</h3>
				<p class="light"><?php echo $institution_masters;?></p>
				<p class="light">Graduated: June 2020</p>
			</div>
			<div class="list-thing">
				<h3>Bachelor of Science in Computer Engineering</h3>
				<p class="light"><?php echo $institution_bachelors;?></p>
				<p class="light">Graduated: June 2017</p>
			</div>
			<h2 class="caps justified">Work Experience</h2>
			<div class="list-thing">
				<h3>Software Engineer</h3>
				<p class="light"><?php echo $Company_name;?></p>
				<p class="light"><?php echo $exp_start_date."-". $exp_end_date;?></p>
				<p class="long-margin">Develop and maintain complex software systems using the latest technologies and programming languages. Collaborate with cross-functional teams to ensure successful project delivery and implementation.</p>
			</div>
			<div class="list-thing">
				<h3>Software Engineer Intern</h3>
				<p class="light">Amazon Web Services</p>
				<p class="light">June 2019 - September 2019</p>
				<p class="long-margin">Worked on a team that developed a new feature for Amazon's cloud computing platform. Contributed to the design, implementation, and testing of the feature. Improved my skills in software development and team collaboration.</p>
			</div>
			<h2 class="caps justified">Skills</h2>
			<div class="separator"></div>
			<ul class="light">
            <?php

$skill_list = explode(' ', $skills);
foreach($skill_list as $skill) {
   echo "<li>{$skill}</li>";
}
?>
</ul>



</body>
</html>