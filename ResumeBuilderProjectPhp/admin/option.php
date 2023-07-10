<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
    h1 {
  text-align: center;
  margin-bottom: 20px;
  color: #f55c47;
}
a {
    text-align: center;
  margin-bottom: 20px;
  color: #f55c47;
}


.button {
  display: flex;
  justify-content: center;
  width: 20%;
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
    </style>
<body>
    <?php  
    session_start();    //$admin_name= $_SESSION['admin_name'];
    //$user_id =  $_SESSION['user_id'];
     $name=  $_SESSION['user_name'];
    // echo $name;
   
    ?>
    <h1> You are Signed in, <?php echo $name; ?> </h1>
    <!-- <form method="post" method="display_usr.php">
    
    
            <input  class="btn btn-secondary-outline display-4 button d-flex justify-content-center" type="submit" value="View user data">
                            
                        </div>
 
  </form> -->
    <h1><a href="display_usr_dt.php">Display User Data</a></h1>
</body>
</html>