
<!doctype html>

<html lang="en">
<?php

//connect to database
include('db_connect.php');
//Delete Action
if(isset($_POST['delete']) && isset($_POST['resume_id'])) {
    $resume_id = $_POST['resume_id'];
    $sql = "DELETE FROM ResumeData WHERE resume_id = $resume_id";
    mysqli_query($conn, $sql);
}

$user_id = $_GET['user_id'];
//$user_id = 3; //change 1 
$sql = "SELECT * FROM ResumeData WHERE user_id = $user_id";
$result = mysqli_query($conn, $sql);?>
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

  


      
        <div class="container d-flex flex-row">
            <table class="container-fluid">
                <thead >    
                    <tr>     
                      <th>Resume ID</th>
                      <th>Name</th>
                      <th>Job Title</th>
                      <th>Email</th>
                      <th>Position</th>
                      <th>Address</th>
                      <th>Education</th>
                      <th>Work Experience</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                <tbody>

                <?php

if ($result && mysqli_num_rows($result) > 0) {

  while ($row = mysqli_fetch_assoc($result)) {

    $resume_id = $row['resume_id'];
    $name = $row['Name'];
    $job_title = $row['Title'];
    $email = $row['Email'];
    $position = $row['position'];
    $bachelors= $row['bachelors_institution'];
    $city = $row['city'];
   // $education = $row['education'];
    $work_experience = $row['previous_company'];

    echo "<tr>
            <td>{$resume_id}</td>
            <td>{$name}</td>
            <td>{$job_title}</td>
            <td>{$email}</td>
            <td>{$position}</td>
           
            
            
            <td>{$city}</td>
            <td>{$bachelors}</td>
            <td>{$work_experience}</td>
          
           
            
            <td>
              <form method='POST'>
                <input type='hidden' name='resume_id' value='{$resume_id}' />
                <input type='hidden' name='delete' value='true' />
                <button type='submit'>Delete</button>
              </form>
            </td>
          </tr>";
  }
} else {
  echo "<tr><td colspan='9'>No resume data found for user id {$user_id}</td></tr>";
}
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