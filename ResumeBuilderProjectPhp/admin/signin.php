<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">




<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<link rel="shortcut icon" href="https://mobirise.com/extensions/careerm5/online-mentorship-program/assets/images/logo.png" type="image/x-icon">
<meta name="description" content="">


<title>Resume Maker</title>
<link rel="stylesheet" href="./Online Mentorship Program_files/mobirise2.css">
<link rel="stylesheet" href="./Online Mentorship Program_files/mobirise-icons-bold.css">
<link rel="stylesheet" href="./Online Mentorship Program_files/bootstrap.min.css">
<link rel="stylesheet" href="./Online Mentorship Program_files/bootstrap-grid.min.css">
<link rel="stylesheet" href="./Online Mentorship Program_files/bootstrap-reboot.min.css">
<link rel="stylesheet" href="./Online Mentorship Program_files/style.css">
<link rel="stylesheet" href="./Online Mentorship Program_files/styles.css">
<link rel="stylesheet" href="./Online Mentorship Program_files/style(1).css">
<link rel="stylesheet" href="./Online Mentorship Program_files/recaptcha.css">

<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:100,200,300,400,500,600,700,800,900&display=swap"></noscript>
<link rel="preload" as="style" href="./Online Mentorship Program_files/mbr-additional.css">
<link rel="stylesheet" href="./Online Mentorship Program_files/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
          <style>
       
       * {
 box-sizing: border-box;
 margin: 0;
 padding: 0;
}

body {
 background-color: #f7f7f7;
}

.form-container {
 max-width: 400px;
 margin: 50px auto;
 padding: 20px;
 border-radius: 10px;
 background-color: #fff;
 box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

h1 {
 text-align: center;
 margin-bottom: 20px;
 color: #f55c47;
}

.form-group {
 margin-bottom: 20px;
}

label {
 display: block;
 font-size: 16px;
 font-weight: bold;
 margin-bottom: 5px;
 color: #555;
}

input {
 width: 100%;
 padding: 10px;
 border-radius: 5px;
 border: 1px solid #ddd;
 font-size: 16px;
 color: #333;
}

button {
 display: block;
 width: 100%;
 padding: 10px;
 border-radius: 5px;
 border: none;
 background-color: #f55c47;
 color: #fff;
 font-size: 16px;
 font-weight: bold;
 cursor: pointer;
 transition: background-color 0.3s ease;
}

button:hover {
 background-color: #e74c3c;
}
    </style>
</head>
<body>
    <h1>Sign In</h1>
    <?php

    include('db_connect.php');
     $user_id=""; 
     $name=""; 
     session_start();
 



    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        
        if (empty($email) || empty($password)) {
            echo "<p>Please fill in all fields.</p>";
        } else {
          
            $sql = "SELECT * FROM admin_info WHERE Email='$email' AND Password='$password'";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) == 1) {
                echo"<h1>Signed in successfully</h1>";
               
              
                
          
                while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
                  
                    $user_id = $row['ID'];
                    $name = $row['Name'];
                    
                    
                   
                    $_SESSION['admin_id'] = $user_id;
                    $_SESSION['admin_name'] = $name;
                    //echo $name;

                }
                header("Location: option.php");
             
            } 
               
          
            else {
                echo "<p>Invalid email or password.</p>";
            }
          

                
            
             exit();
        }
    }

   
    mysqli_close($conn);
    ?>
        <h1>Sign In</h1>
    <form method="post">
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
    </div>
    <div class="mbr-section-btn">
    
            <input  class="btn btn-secondary-outline display-4" type="submit" value="Sign In">
                            <!-- <a class="btn btn-secondary-outline display-4" href="">
                            Sign In</a> -->
                        </div>
 
  </form>
</div>

</body>
</html>
