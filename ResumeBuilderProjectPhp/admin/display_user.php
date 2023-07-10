<?php

//connect to database
include('db_connect.php');
//Delete Action
if(isset($_POST['delete']) && isset($_POST['resume_id'])) {
    $resume_id = $_POST['resume_id'];
    $sql = "DELETE FROM resume_data WHERE resume_id = $resume_id";
    mysqli_query($conn, $sql);
}

$user_id = $_GET['user_id'];
//$user_id = 3; //change 1 
$sql = "SELECT * FROM resume_data WHERE user_id = $user_id";
$result = mysqli_query($conn, $sql);?><table> <thead>    <tr>     <th>Resume ID</th>
      <th>Name</th>
      <th>Job Title</th>
      <th>Email</th>
      <th>Phone Number</th>
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
        $name = $row['name'];
        $job_title = $row['Title'];
        $email = $row['Email'];
        $phone_number = $row['phone'];
        $city = $row['city'];
       // $education = $row['education'];
        //$work_experience = $row['Company_name'];

        echo "<tr>
                <td>{$resume_id}</td>
                <td>{$name}</td>
                <td>{ $job_title}</td>
                <td>{ $email}</td>
                <td>{$phone_number}</td>
                <td>{$city}</td>
               
                
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

<?php

mysqli_close($conn);
?>
