<!doctype html>

<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<style>
header {
  background-color:#f55c47;
  padding: 1rem;
}

nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
}

nav li {
  margin-right: 1rem;
}

nav li:last-child {
  margin-right: 0;
}

nav a {

  text-decoration: none;
  color: white;
  padding: 0.5rem;
  transition: all 0.3s ease-in-out;
}

nav a:hover {
  background-color: white;
  color: orange;
}

  </style>
<body>
<header>
  <nav>
    <ul>
    <li><a href="builderform2.php">Create New Resume</a></li>
      <li><a href="Home.html">Home</a></li>
      <li><a href="index.php">Go Back</a></li>
    
    </ul>
  </nav>
</header>

    <?php
// Include database connection file
include('db_connect.php');
//session_start();
// Replace with actual user ID
// $user_id =  $_SESSION['user_id'];
$user_id =1;
// Query to retrieve resume data for the user
$sql = "SELECT resume_id, name, city,Title FROM ResumeData WHERE user_id = $user_id";

// Execute the query and get the result set
$result = mysqli_query($conn, $sql);

?>


        <!-- <table>
            <thead>
                <tr>
                    <th>Resume ID</th>
                    <th>Name</th>
                    <th>Job Title</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table> -->



        <div class="container d-flex flex-row">
            <table>
                <thead>
                    <tr>
                        <th>Resume ID</th>
                        <th>Name</th>
                        <th>Job Title</th>
                        <th>Update</th>

                    </tr>
                </thead>
                <tbody>

                    <?php
					// Check if any rows were returned from the query
					if ($result && mysqli_num_rows($result) > 0) {
					  // Loop through each row of data
					  while ($row = mysqli_fetch_assoc($result)) {
						// Get the resume ID, name, and job title
						$resume_id = $row['resume_id'];
						$name = $row['name'];
						$job_title = $row['Title'];
				
						// Output a row in the HTML table for the current resume
						echo "<tr>";
						echo "<td ><a href='cvtemp.php?resume_id=$resume_id'>$resume_id</a></td>";
						echo "<td>$name</td>";
						echo "<td>$job_title</td>";
						
                    echo "<td ><a href='update_first.php?resume_id=$resume_id'>Update</a></td>";
                    echo "</tr>";
						
					  }
					} else {
					  // No rows were returned from the query
					  echo "<tr><td colspan='3'>No resumes found for this user</td></tr>";
					}
				
					// Free up the result set
					mysqli_free_result($result);
				
					// Close the database connection
					mysqli_close($conn);
					?>

                </tbody>
            </table>
        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<style>
    @import "bourbon";
    @import "https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:300,400";
    html,
    body {
        height: 100%;
    }
    
    body {
        margin: 0;
        font-family: sans-serif;
        color: #333;
        font-family: "Raleway";
        height: 100%;
        font-weight: 100;
    }
    
    .container {
        display: flex;
        flex-direction: row;
        margin-top: 7%;
        align-items: center;
        justify-content: center;
        background-color: #ff6839;
        padding: 50px;
        padding-bottom: 80px;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
        border-radius: 5px;
    }
    
    table {
        width: 800px;
        padding: 50px;
        padding-bottom: 80px;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
        border-radius: 5px;
        border-collapse: collapse;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    
    th,
    td {
        padding: 15px;
        background-color: rgba(255, 255, 255, 0.2);
        color: #fff;
    }
    
    th {
        text-align: left;
        color: #333;
    }
    
    thead th {
        background-color: #ffffff;
    }
    
    tbody tr:hover {
        background-color: rgba(255, 255, 255, 0.3);
    }
    
    tbody td {
        position: relative;
    }
    
    tbody td:hover:before {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        top: -9999px;
        bottom: -9999px;
        background-color: rgba(255, 255, 255, 0.2);
        z-index: -1;
    }
</style>

</html>