<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <header>
  <nav>
    <ul>
        
    <li><a href="home.html">Home</a></li>
      <li><a href="signup.php">Create new Account</a></li>
      
    
    </ul>
  </nav>
</header>
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




    <?php
    if(isset($_POST['destroy-session-btn'])) {
        // Destroy the session
        session_destroy();
        header("Location: signin.php");
        echo "logged out";
      
        exit;
      }
session_start();
if(isset($_SESSION['user_id']) && isset($_SESSION['user_name'])) {
    $user_id = $_SESSION['user_id'];
    $name = $_SESSION['user_name'];
    echo "name=" . $name . " user_id=" . $user_id; ?>
 
        <style>
            .panel {
                padding: 50px;
                padding-bottom: 80px;
                box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
                border-radius: 5px;
            }
        </style>
        <div class=panel>
            <div class="row d-flex flex-row align-content-around">

                <div class="card-hover m-3">
                    <div class="card-hover__content">
                        <h3 class="card-hover__title">
                            Make your <span>Resume</span> right now!
                        </h3>
                        <a href="builderform2.php" class="card-hover__link">
                            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
</svg>
                        </a>
                    </div>
                    <img src="https://images.unsplash.com/photo-1602407294553-6ac9170b3ed0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" alt="">
                </div>
                <div class="card-hover m-3">
                    <div class="card-hover__content">
                        <h3 class="card-hover__title">
                            View <span>Saved</span> Resumes!
                        </h3>
                        <a href="allresume.php" class="card-hover__link">
                            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
</svg>
                        </a>
                    </div>
                    <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80" alt="">
                </div>
            </div>


        </div>

        <form method="post" action="">
            <button class=" btn btn-" type="submit" name="destroy-session-btn">Log Out</button>
        </form>
        </div>

        <?php


?>

</body>
<style>
    @import "bourbon";
    @import "https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:300,400";
    @import url("https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;600&display=swap");
    html {
        box-sizing: border-box;
        font-size: 100%;
    }
    
    html,
    body {
        height: 100%;
    }
    
    *,
    *:before,
    *:after {
        box-sizing: inherit;
    }
    
    img {
        max-width: 100%;
        height: auto;
    }
    
    body {
        -webkit-text-size-adjust: 100%;
        font-variant-ligatures: none;
        text-rendering: optimizeLegibility;
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        font-size: 100%;
        font-family: "Raleway";
    }
    
    h1,
    h2,
    h3,
    h4,
    h5 {
        font-weight: 800;
        margin-top: 0;
        margin-bottom: 0;
    }
    
    body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin: 0;
        padding: 0;
        height: 100vh;
        color: #f2f2f2;
        background-color: #ffffff;
    }
    
    .card-hover {
        border-radius: 15px;
        width: 360px;
        height: 500px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 0 32px -10px rgba(0, 0, 0, 0.08);
    }
    
    .card-hover:has(.card-hover__link:hover) .card-hover__extra {
        transform: translateY(0);
        transition: transform 0.35s;
    }
    
    .card-hover:hover .card-hover__content {
        background-color: #636363;
        bottom: 100%;
        transform: translateY(100%);
        padding: 50px 60px;
        transition: all 0.35s cubic-bezier(0.1, 0.72, 0.4, 0.97);
    }
    
    .card-hover:hover .card-hover__link {
        opacity: 1;
        transform: translate(-50%, 0);
        transition: all 0.3s 0.35s cubic-bezier(0.1, 0.72, 0.4, 0.97);
    }
    
    .card-hover:hover img {
        transform: scale(1);
        transition: 0.35s 0.1s transform cubic-bezier(0.1, 0.72, 0.4, 0.97);
    }
    
    .card-hover__content {
        width: 100%;
        text-align: center;
        background-color: #ff6839;
        padding: 0 60px 50px;
        position: absolute;
        bottom: 0;
        left: 0;
        transform: translateY(0);
        transition: all 0.35s 0.35s cubic-bezier(0.1, 0.72, 0.4, 0.97);
        will-change: bottom, background-color, transform, padding;
        z-index: 1;
    }
    
    .card-hover__content::before,
    .card-hover__content::after {
        content: "";
        width: 100%;
        height: 120px;
        background-color: inherit;
        position: absolute;
        left: 0;
        z-index: -1;
    }
    
    .card-hover__content::before {
        top: -80px;
        -webkit-clip-path: ellipse(60% 80px at bottom center);
        clip-path: ellipse(60% 80px at bottom center);
    }
    
    .card-hover__content::after {
        bottom: -80px;
        -webkit-clip-path: ellipse(60% 80px at top center);
        clip-path: ellipse(60% 80px at top center);
    }
    
    .card-hover__title {
        font-size: 1.5rem;
        margin-bottom: 1em;
    }
    
    .card-hover__title span {
        color: #ffe228;
    }
    
    .card-hover__text {
        font-size: 0.75rem;
    }
    
    .card-hover__link {
        position: absolute;
        bottom: 1rem;
        left: 50%;
        transform: translate(-50%, 10%);
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        text-decoration: none;
        color: #DEE8C2;
        opacity: 0;
        padding: 10px;
        transition: all 0.35s;
    }
    
    .card-hover__link:hover svg {
        transform: translateX(4px);
    }
    
    .card-hover__link svg {
        width: 18px;
        margin-left: 4px;
        transition: transform 0.3s;
    }
    
    .card-hover__extra {
        height: 50%;
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        width: 100%;
        font-size: 1.5rem;
        text-align: center;
        background-color: #3f3f3f;
        padding: 80px;
        bottom: 0;
        z-index: 0;
        color: #777777;
        transform: translateY(100%);
        will-change: transform;
        transition: transform 0.35s;
    }
    
    .card-hover__extra span {
        color: #626262;
    }
    
    .card-hover img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        -o-object-position: center;
        object-position: center;
        z-index: -1;
        transform: scale(1.2);
        transition: 0.35s 0.35s transform cubic-bezier(0.1, 0.72, 0.4, 0.97);
    }
</style>

</html>
<?php
  } else {
    // echo "User not logged in";
    ?>
    <style>
        .head {
  text-align: center;
  margin-bottom: 20px;
  color: #f55c47;
}
        </style>
        <h1 class="head">User Not Logged In <a href="signin.php">Sign In </a></h1>
    <?php
  }
?>