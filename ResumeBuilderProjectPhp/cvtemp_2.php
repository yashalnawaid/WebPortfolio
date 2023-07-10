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

    <body>
        <!-- FONTS -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

        <!-- PAGE STUFF -->
        <div class="rela-block page container-fluid">
            <div class="rela-block top-bar">
                <div class="caps name">
                    <div class="abs-center">
                        <?php echo $name;?> NAme Test
                    </div>
                </div>
            </div>
            <div class="side-bar mb-4 ">
                <div class="mugshot">
                    <div class="logo">
                        <svg viewbox="0 0 80 80" class="rela-block logo-svg">
                    <path d="M 10 10 L 52 10 L 72 30 L 72 70 L 30 70 L 10 50 Z" stroke-width="2.5" fill="none"/>
                </svg>
                        <p class="logo-text">kj</p>
                    </div>
                </div>
                <p class=" mt-0 rela-block caps side-header">Personal Information</p>
                <p>
                    <?php echo $city;?>
                </p>
                <p>
                    <?php echo $Country;?>
                </p>

                <p>
                    <?php echo $phone;?>
                </p>
                <p>emailsareforsquares@gmail.com</p><br>
                <p class="rela-block social twitter">Twitter stuff</p>
                <p class="rela-block social pinterest">Pinterest things</p>
                <p class="rela-block social linked-in">Linked-in man</p>
                <p class="rela-block caps side-header">Expertise</p>

                <p class="rela-block list-thing">
                    <?php

                $skill_list = explode(' ', $skills);
                foreach($skill_list as $skill) {
                   echo "<li>{$skill}</li>";
                }
                ?>
                        <li>Test SKill</li>
                </p>

                <p class="rela-block caps side-header ">Education</p>
                <div class="">
                    <p class="rela-block list-thing">
                        <p>
                            <b>Bachelors Degree </b>
                        </p>
                        <p>
                            <?php echo $bachelors;?> Test</p>
                        <p>
                            <?php echo   $institution_bachelors ;?> Test</p>
                    </p>

                </div>
                <div class="">
                    <p class="rela-block list-thing">
                        <p>
                            <b>Masters Degree </b>
                        </p>
                        <p>
                            <?php echo $masters;?> Test</p>
                        <p>
                            <?php echo   $institution_master ;?> Test</p>
                    </p>

                </div>


            </div>
            <div class="rela-block content-container ">
                <h2 class="rela-block caps title ">
                    <?php echo $title;?> Test</h2>

                <div class="rela-block separator "></div>
                <div class="rela-block caps greyed ">Profile</div>
                <p class="long-margin ">
                    <?php echo $objectve;?> Objective Test
                </p>

                <div class="rela-block caps greyed ">Experience</div>
                <div class="container-fluid ">
                    <h3>
                        <?php echo $job_title;?> Job Title test</h3>
                    <div>
                        <h4 class="light">
                            <?php echo $Company_name;?> Organization Test
                        </h4>
                    </div>
                    <p class="light">
                        Start - End Test
                        <?php echo $exp_start_date."-". $exp_end_date;?>
                    </p>


                </div>

                <div class="width-con container-fluid">
                    <div class="mr-1 container ">
                        <h5 class="light ">
                            Key Responsibility 1</h5>
                        <p class="justified ">
                            <?php echo $key_responsibility_2;?> Plaid gentrify put a bird on it, pickled XOXO farm-to-table irony raw denim messenger bag leggings. Hoodie PBR&B photo booth, vegan chillwave meh paleo freegan ramps. Letterpress shabby chic fixie semiotics. Meditation sriracha
                            banjo pour-over. Gochujang pickled hashtag mixtape cred chambray. Freegan microdosing VHS, 90's bicycle rights aesthetic hella PBR&B. </p>

                    </div>

                    <div class="mr-1 container">
                        <h5 class="light ">
                            Key Responsibility 2</h5>
                        <p class="justified ">
                            <?php echo $key_responsibility_1;?> Plaid gentrify put a bird on it, pickled XOXO farm-to-table irony raw denim messenger bag leggings. Hoodie PBR&B photo booth, vegan chillwave meh paleo freegan ramps. Letterpress shabby chic fixie semiotics. Meditation sriracha
                            banjo pour-over. Gochujang pickled hashtag mixtape cred chambray. Freegan microdosing VHS, 90's bicycle rights aesthetic hella PBR&B. </p>

                    </div>



                </div>

            </div>
        </div>


        <link rel="stylesheet " href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css " integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T " crossorigin="anonymous ">

        <!-- Optional JavaScript -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
    </body>

    </html>
    <style>
        @import "bourbon";
        @import "https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:300,400";
        /* colors */
        /* tab setting */
        /* breakpoints */
        /* selectors relative to radio inputs */
        
        .width-con {
            font-family: "Raleway";
            color: #777;
            padding: 50px;
            padding-bottom: 136px;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
            border-radius: 5px;
        }
        
        .panel {
            font-family: "Raleway";
            color: #777;
            padding: 50px;
            padding-bottom: 80px;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
            border-radius: 5px;
        }
        
        * {
            box-sizing: border-box;
            transition: 0.35s ease;
        }
        
        .rela-block {
            display: block;
            position: relative;
            margin: auto;
        }
        
        .rela-inline {
            display: inline-block;
            position: relative;
            margin: auto;
        }
        
        .floated {
            display: inline-block;
            position: relative;
            margin: false;
            top: ;
            left: ;
            right: ;
            bottom: ;
            float: left;
        }
        
        .abs-center {
            display: false;
            position: absolute;
            margin: false;
            top: 50%;
            left: 50%;
            right: false;
            bottom: false;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 88%;
        }
        
        body {
            background: #efefef;
            color: #333;
            font-family: "Raleway";
            height: 100%;
            font-size: 18px;
            letter-spacing: 0px;
            height: 100%;
            background: url("http://kingofwallpapers.com/leaves/leaves-016.jpg ") right no-repeat;
            background-size: cover;
        }
        
        h5 {
            color: #333;
            font-family: "Raleway";
        }
        
        h4 {
            color: #333;
            font-family: "Raleway";
        }
        
        body:before {
            content: " ";
            display: false;
            position: fixed;
            margin: 0;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(255, 255, 255, 0.92);
        }
        
        .caps {
            text-transform: uppercase;
        }
        
        .justified {
            text-align: justify;
        }
        
        p.light {
            color: #333;
            font-family: "Raleway";
        }
        
        h2 {
            color: #333;
            font-family: "Raleway";
            height: 100%;
            font-size: 30px;
            letter-spacing: 5px;
            font-weight: 600;
            line-height: 40px;
        }
        
        h3 {
            color: #333;
            font-family: "Raleway";
            font-size: 21px;
            letter-spacing: 1px;
            font-weight: 600;
            line-height: 28px;
            color: #000;
        }
        
        .page {
            width: 90%;
            max-width: 1200px;
            margin: 80px auto;
            height: 1200px;
            background-color: #fff;
            box-shadow: 6px 10px 28px 0px rgba(0, 0, 0, 0.4);
        }
        
        .top-bar {
            height: 220px;
            background-color: #848484;
            color: #fff;
        }
        
        .name {
            display: false;
            position: absolute;
            margin: false;
            top: false;
            left: calc(350px + 5%);
            right: 0;
            bottom: 0;
            height: 120px;
            text-align: center;
            font-family: 'Raleway';
            font-size: 58px;
            letter-spacing: 8px;
            font-weight: 100;
            line-height: 60px;
        }
        
        .name div {
            width: 94%;
        }
        
        .side-bar {
            color: #333;
            font-family: "Raleway";
            padding: 50px;
            padding-bottom: 80px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
            border-radius: 5px;
            position: absolute;
            top: 60px;
            left: 5%;
            right: false;
            bottom: 0;
            width: 350px;
            height: 92%;
            background-color: #f7e0c1;
            padding: 320px 30px 50px;
        }
        
        .mugshot {
            display: false;
            position: absolute;
            margin: false;
            top: 50px;
            left: 70px;
            right: false;
            bottom: false;
            height: 210px;
            width: 210px;
        }
        
        .mugshot .logo {
            margin: -23px;
        }
        
        .logo {
            display: false;
            position: absolute;
            margin: false;
            top: 0;
            left: 0;
            right: false;
            bottom: false;
            z-index: 100;
            margin: 0;
            color: #000;
            height: 250px;
            width: 250px;
        }
        
        .logo .logo-svg {
            height: 100%;
            width: 100%;
            stroke: #000;
            cursor: pointer;
        }
        
        .logo .logo-text {
            display: false;
            position: absolute;
            margin: false;
            top: 58%;
            left: 10px;
            right: 16%;
            bottom: 10px;
            cursor: pointer;
            font-family: "Montserrat ";
            font-size: 55px;
            letter-spacing: 0px;
            font-weight: 400;
            line-height: 58.333333333333336px;
        }
        
        .social {
            padding-left: 60px;
            margin-bottom: 20px;
            cursor: pointer;
        }
        
        .social:before {
            content: " ";
            display: false;
            position: absolute;
            margin: false;
            top: -4px;
            left: 10px;
            right: false;
            bottom: false;
            height: 35px;
            width: 35px;
            background-size: cover !important;
        }
        
        .social.twitter:before {
            background: url("https://cdn3.iconfinder.com/data/icons/social-media-2026/60/Socialmedia_icons_Twitter-07-128.png ") center no-repeat;
        }
        
        .social.pinterest:before {
            background: url("https://cdn3.iconfinder.com/data/icons/social-media-2026/60/Socialmedia_icons_Pinterest-23-128.png ") center no-repeat;
        }
        
        .social.linked-in:before {
            background: url("https://cdn3.iconfinder.com/data/icons/social-media-2026/60/Socialmedia_icons_LinkedIn-128.png ") center no-repeat;
        }
        
        .side-header {
            font-family: 'Raleway';
            font-size: 18px;
            letter-spacing: 4px;
            font-weight: 600;
            line-height: 28px;
            margin: 60px auto 10px;
            padding-bottom: 5px;
            border-bottom: 1px solid #888;
        }
        
        .list-thing {
            padding-left: 25px;
            margin-bottom: 10px;
        }
        
        .content-container {
            margin-right: 0;
            width: calc(95% - 350px);
            padding: 25px 40px 50px;
        }
        
        .content-container>* {
            margin: 0 auto 25px;
        }
        
        .content-container>h3 {
            margin: 0 auto 5px;
        }
        
        .content-container>p.long-margin {
            margin: 0 auto 50px;
        }
        
        .title {
            width: 80%;
            text-align: center;
        }
        
        .separator {
            width: 240px;
            height: 2px;
            background-color: #999;
        }
        
        .greyed {
            background-color: #ddd;
            width: 100%;
            max-width: 580px;
            text-align: center;
            font-family: 'Open Sans';
            font-size: 18px;
            letter-spacing: 6px;
            font-weight: 600;
            line-height: 28px;
        }
        
        @media screen and (max-width: 1150px) {
            .name {
                color: #fff;
                font-family: 'Raleway';
                font-size: 38px;
                letter-spacing: 6px;
                font-weight: 100;
                line-height: 48px;
            }
            .page {
                height: 2000px;
            }
        }
    </style>

    <!doctype html>
    <html lang="en ">

    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8 ">
        <meta name="viewport " content="width=device-width, initial-scale=1, shrink-to-fit=no ">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet " href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css " integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T " crossorigin="anonymous ">
    </head>

    <body>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
    </body>

    </html>