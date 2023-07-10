<!doctype html>
<html lang="en">
<?php   
session_start();
$user_id=$_SESSION['user_id'];
//$_SESSION['user_id'] = $user_id;
//$_SESSION['user_name'] = $name;



?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- Bootstrap CSS -->
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




</head>
<script>
    function submitForms() {
  // Get the values from the input fields in the first form
  var name = document.getElementById("name").value;
  var email = document.getElementById("phone").value;
  
  
  var city=document.getElementById("city").value;

  var  country = document.getElementById("country").value;

  var  high_school= document.getElementById("high_school").value;

  var institution_hs= document.getElementById("institution_hs").value;
 

  var  masters =document.getElementById("masters").value;


  var  institution_ms= document.getElementById("institution_ms").value;

  var bachelors=document.getElementById("bachelors").value;

  var institution_bs=  document.getElementById("institution_bs").value;



  var company_name= document.getElementById("Company_name").value;


  var skills= document.getElementById("skills").value;


  var job= document.getElementById("job").value;

  var start= document.getElementById("start").value;
  var end= document.getElementById("end").value;

  var email = document.getElementById("email").value;

var objective = document.getElementById("objective").value;

var kr1 = document.getElementById("key1").value;
var kr2 = document.getElementById("key2").value;

console.log(kr1)

  // Create a new form element
  var combinedForm = document.createElement("form");
  


  // Set the action and method attributes for the form
  combinedForm.action = "test_new.php";
  combinedForm.method = "post";
  
  // Create new input elements for each value
  // Create objective input element
var objectiveInput = document.createElement("input");
objectiveInput.type = "hidden";
objectiveInput.name = "objective";
objectiveInput.value = objective;



var kr1Input = document.createElement("input");
kr1Input.type = "hidden";
kr1Input.name = "kr1";
kr1Input.value = kr1;
  
var kr2Input = document.createElement("input");
kr2Input.type = "hidden";
kr2Input.name = "kr2";
kr2Input.value = kr2;

  
// Create email input element
var emailInput = document.createElement("input");
emailInput.type = "hidden";
emailInput.name = "email";
emailInput.value = email;
  
combinedForm.appendChild(emailInput);
  
  
  var nameInput = document.createElement("input");
  nameInput.type = "hidden";
  nameInput.name = "name";
  nameInput.value = name;
  
  var phoneInput = document.createElement("input");
  phoneInput.type = "hidden";
  phoneInput.name = "phone";
  phoneInput.value = phone;
  
  

  var cityInput = document.createElement("input");
  cityInput.type = "hidden";
  cityInput.name = "city";
  cityInput.value = city;

  var countryInput = document.createElement("input");
  countryInput.type = "hidden";
  countryInput.name = "country";
  countryInput.value = country;

  var highSchoolInput = document.createElement("input");
  highSchoolInput.type = "hidden";
  highSchoolInput.name = "high_school";
  highSchoolInput.value = high_school;


  var mastersInput = document.createElement("input");
  mastersInput.type = "hidden";
  mastersInput.name = "masters";
  mastersInput.value = masters;

  var bachelorsInput = document.createElement("input");
  bachelorsInput.type = "hidden";
  bachelorsInput.name = "bachelors";
  bachelorsInput.value = bachelors;

  var institutionMsInput = document.createElement("input");
  institutionMsInput.type = "hidden";
  institutionMsInput.name = "institution_ms";
  institutionMsInput.value = institution_ms;

  var institutionBsInput = document.createElement("input");
  institutionBsInput.type = "hidden";
  institutionBsInput.name = "institution_bs";
  institutionBsInput.value = institution_bs;

  var institutionHsInput = document.createElement("input");
  institutionHsInput.type = "hidden";
  institutionHsInput.name = "institution_hs";
  institutionHsInput.value = institution_hs;

  var skillsInput = document.createElement("input");
  skillsInput.type = "hidden";
  skillsInput.name = "skills";
  skillsInput.value = skills;

  var companyNameInput = document.createElement("input");
  companyNameInput.type = "hidden";
  companyNameInput.name = "Company_name";
  companyNameInput.value = Company_name;
  

  var startInput = document.createElement("input");
  startInput.type = "hidden";
  startInput.name = "start";
  startInput.value = start;


   var jobInput = document.createElement("input");
  jobInput.type = "hidden";
  jobInput.name = "job";
  jobInput.value = job;


  var endInput = document.createElement("input");
  endInput.type = "hidden";
  endInput.name = "end";
  endInput.value = end;


  // Add the input elements to the form
  combinedForm.appendChild(nameInput);

  combinedForm.appendChild(phoneInput);

  combinedForm.appendChild(cityInput);
  combinedForm.appendChild(countryInput);

  combinedForm.appendChild(highSchoolInput);
  
  combinedForm.appendChild(mastersInput);
  combinedForm.appendChild(bachelorsInput);
  combinedForm.appendChild(institutionMsInput);
  combinedForm.appendChild(institutionBsInput);
  combinedForm.appendChild(institutionHsInput);
  combinedForm.appendChild(skillsInput);
  combinedForm.appendChild(companyNameInput);
  combinedForm.appendChild(objectiveInput);
  combinedForm.appendChild(jobInput);


  combinedForm.appendChild(startInput);
  // Submit the form

  combinedForm.appendChild(endInput);

  combinedForm.appendChild(kr1Input);
  combinedForm.appendChild(kr2Input);

  // Submit the form
  document.body.appendChild(combinedForm);
  combinedForm.submit();

}
</script>
</script>
<body>

    <h1>Enter your infromation</h1>



    </div>
    <div class="tabs">
        <div>
            <div class="mbr-section-btn mb-2">
                
                  <button  class="btn btn-secondary w-25" onclick="submitForms()" >Build</button>
                <a class="btn btn-secondary-outline display-4" href="home.html">
					Go Back</a>
            </div>

            <input type="radio" id="tab1" name="tab-control" checked>
            <input type="radio" id="tab2" name="tab-control">
            <input type="radio" id="tab3" name="tab-control">
            <input type="radio" id="tab4" name="tab-control">
            <ul>
                <li title="Features"><label for="tab1" role="button"><svg viewBox="0 0 24 24">
			  <path d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z" />
			</svg><br><span>Personal infromation</span></label></li>
                <li title="Delivery Contents"><label for="tab2" role="button"><svg viewBox="0 0 24 24">
			  <path d="M2,10.96C1.5,10.68 1.35,10.07 1.63,9.59L3.13,7C3.24,6.8 3.41,6.66 3.6,6.58L11.43,2.18C11.59,2.06 11.79,2 12,2C12.21,2 12.41,2.06 12.57,2.18L20.47,6.62C20.66,6.72 20.82,6.88 20.91,7.08L22.36,9.6C22.64,10.08 22.47,10.69 22,10.96L21,11.54V16.5C21,16.88 20.79,17.21 20.47,17.38L12.57,21.82C12.41,21.94 12.21,22 12,22C11.79,22 11.59,21.94 11.43,21.82L3.53,17.38C3.21,17.21 3,16.88 3,16.5V10.96C2.7,11.13 2.32,11.14 2,10.96M12,4.15V4.15L12,10.85V10.85L17.96,7.5L12,4.15M5,15.91L11,19.29V12.58L5,9.21V15.91M19,15.91V12.69L14,15.59C13.67,15.77 13.3,15.76 13,15.6V19.29L19,15.91M13.85,13.36L20.13,9.73L19.55,8.72L13.27,12.35L13.85,13.36Z" />
			</svg><br><span>Education</span></label></li>
                <li title="Shipping"><label for="tab3" role="button"><svg viewBox="0 0 24 24">
			  <path d="M3,4A2,2 0 0,0 1,6V17H3A3,3 0 0,0 6,20A3,3 0 0,0 9,17H15A3,3 0 0,0 18,20A3,3 0 0,0 21,17H23V12L20,8H17V4M10,6L14,10L10,14V11H4V9H10M17,9.5H19.5L21.47,12H17M6,15.5A1.5,1.5 0 0,1 7.5,17A1.5,1.5 0 0,1 6,18.5A1.5,1.5 0 0,1 4.5,17A1.5,1.5 0 0,1 6,15.5M18,15.5A1.5,1.5 0 0,1 19.5,17A1.5,1.5 0 0,1 18,18.5A1.5,1.5 0 0,1 16.5,17A1.5,1.5 0 0,1 18,15.5Z" />
			</svg><br><span>Interests</span></label></li>
                <li title="Returns"><label for="tab4" role="button"><svg viewBox="0 0 24 24">
			  <path d="M11,9H13V7H11M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M11,17H13V11H11V17Z" />
			</svg><br><span>Qualification</span></label></li>
            </ul>

            <div class="slider">
                <div class="indicator"></div>
            </div>
            <div class="content">
                <section>
                <form id="1f" action="test.php
"  method="post">
                       <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Contact Number:</label>
                        <input type="test" id="phone" name="phone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="city">City:</label>
                        <input type="text" id="city" name="city" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="country">Country:</label>
                        <input type="text" id="country" name="country" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="Bio">Bio/Objective:</label>
                        <input type="text" id="objective" name="objective" class="form-control" required>
                    </div>

</form>
                    
                </section>
                <section>
<form id="2f" action="test.php
"  method="post">
<div class="form-group">
                        <label for="high_school">High School:</label>
                        <input type="text" id="high_school" name="high_school" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="institution">Institution Name:</label>
                        <input type="text" id="institution_hs" name="institution_highschool" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="bachelors">Bachelor's Degree:</label>
                        <input type="text" id="bachelors" name="bachelors" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="institution">Institution Name:</label>
                        <input type="text" id="institution_bs" name="institution_bachelors" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="masters">Master's Degree:</label>
                        <input type="text" id="masters" name="masters" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="institution">Institution Name:</label>
                        <input type="text" id="institution_ms" name="institution_masters" class="form-control" required>
                    </div>
</form>
                  


                </section>
                <section>

                
                    <div class="form-group">
                        <label for="institution">Skills:</label>
                        <input type="text" id="skills" name="skills" class="form-control" required>
                    </div>
                </section>
               
                <section>
                
                    <div class="form-group">
                        <label for="start">Start Date:</label>
                    <input type="date" id="start" name ="start"  class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="end">End Date:</label>
                    <input type="date" id="end" name ="end  class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="institution">Experience Previous Company:</label>
                        <input type="text" id="Company_name" name="Company_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="institution">Job Tite:</label>
                        <input type="text" id="job" name="job" class="form-control" required>
                    </div>
                 
                    <div class="form-group">
                        <label for="key1">Key Responsiblity 1:</label>
                        <input type="text" id="key1" name="key1" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="key2">Key Responsiblity 2:</label>
                        <input type="text" id="key2" name="key2" class="form-control" required>
                    </div>
                 
                    <!-- <div class="form-group">
                        <label for="institution">Key Responsiblity 2:</label>
                        <input type="text" id="key_responsiblity_2" name="" class="form-control" required>
                    </div> -->
                 
                    
                </section>
            </div>
        </div>
        <style>
            @import "bourbon";
            @import "https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:300,400";
            /* colors */
            /* tab setting */
            /* breakpoints */
            /* selectors relative to radio inputs */
            
            html {
                width: 100%;
                height: 100%;
            }
            
            body {
                background: #efefef;
                color: #333;
                font-family: "Raleway";
                height: 100%;
            }
            
            body h1 {
                text-align: center;
                font-weight: 300;
                padding: 40px 0 20px 0;
                margin: 0;
            }
            
            .tabs {
                left: 50%;
                transform: translateX(-50%);
                position: relative;
                background: white;
                padding: 50px;
                padding-bottom: 80px;
                width: 70%;
                box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
                border-radius: 5px;
                min-width: 240px;
            }
            
            .tabs input[name="tab-control"] {
                display: none;
            }
            
            .tabs .content section h2,
            .tabs ul li label {
                font-family: "Montserrat";
                font-weight: bold;
                font-size: 18px;
                color: #428bff;
            }
            
            .tabs ul {
                list-style-type: none;
                padding-left: 0;
                display: flex;
                flex-direction: row;
                margin-bottom: 10px;
                justify-content: space-between;
                align-items: flex-end;
                flex-wrap: wrap;
            }
            
            .tabs ul li {
                box-sizing: border-box;
                flex: 1;
                width: 25%;
                padding: 0 10px;
                text-align: center;
            }
            
            .tabs ul li label {
                transition: all 0.3s ease-in-out;
                color: #929daf;
                padding: 5px auto;
                overflow: hidden;
                text-overflow: ellipsis;
                display: block;
                cursor: pointer;
                transition: all 0.2s ease-in-out;
                white-space: nowrap;
                -webkit-touch-callout: none;
            }
            
            .tabs ul li label br {
                display: none;
            }
            
            .tabs ul li label svg {
                fill: #929daf;
                height: 1.2em;
                vertical-align: bottom;
                margin-right: 0.2em;
                transition: all 0.2s ease-in-out;
            }
            
            .tabs ul li label:hover,
            .tabs ul li label:focus,
            .tabs ul li label:active {
                outline: 0;
                color: #bec5cf;
            }
            
            .tabs ul li label:hover svg,
            .tabs ul li label:focus svg,
            .tabs ul li label:active svg {
                fill: #bec5cf;
            }
            
            .tabs .slider {
                position: relative;
                width: 25%;
                transition: all 0.33s cubic-bezier(0.38, 0.8, 0.32, 1.07);
            }
            
            .tabs .slider .indicator {
                position: relative;
                width: 50px;
                max-width: 100%;
                margin: 0 auto;
                height: 4px;
                border-radius: 1px;
            }
            
            .tabs .content {
                margin-top: 30px;
            }
            
            .tabs .content section {
                display: none;
                animation-name: content;
                animation-direction: normal;
                animation-duration: 0.3s;
                animation-timing-function: ease-in-out;
                animation-iteration-count: 1;
                line-height: 1.4;
            }
            
            .tabs .content section h2 {
                color: #428bff;
                display: none;
            }
            
            .tabs .content section h2::after {
                content: "";
                position: relative;
                display: block;
                width: 30px;
                height: 3px;
                background: #428bff;
                margin-top: 5px;
                left: 1px;
            }
            
            .tabs input[name="tab-control"]:nth-of-type(1):checked~ul>li:nth-child(1)>label {
                cursor: default;
                color: #428bff;
            }
            
            .tabs input[name="tab-control"]:nth-of-type(1):checked~ul>li:nth-child(1)>label svg {
                fill: #428bff;
            }
            
            @media (max-width: 600px) {
                .tabs input[name="tab-control"]:nth-of-type(1):checked~ul>li:nth-child(1)>label {
                    background: rgba(0, 0, 0, 0.08);
                }
            }
            
            .tabs input[name="tab-control"]:nth-of-type(1):checked~.slider {
                transform: translateX(0%);
            }
            
            .tabs input[name="tab-control"]:nth-of-type(1):checked~.content>section:nth-child(1) {
                display: block;
            }
            
            .tabs input[name="tab-control"]:nth-of-type(2):checked~ul>li:nth-child(2)>label {
                cursor: default;
                color: #428bff;
            }
            
            .tabs input[name="tab-control"]:nth-of-type(2):checked~ul>li:nth-child(2)>label svg {
                fill: #428bff;
            }
            
            @media (max-width: 600px) {
                .tabs input[name="tab-control"]:nth-of-type(2):checked~ul>li:nth-child(2)>label {
                    background: rgba(0, 0, 0, 0.08);
                }
            }
            
            .tabs input[name="tab-control"]:nth-of-type(2):checked~.slider {
                transform: translateX(100%);
            }
            
            .tabs input[name="tab-control"]:nth-of-type(2):checked~.content>section:nth-child(2) {
                display: block;
            }
            
            .tabs input[name="tab-control"]:nth-of-type(3):checked~ul>li:nth-child(3)>label {
                cursor: default;
                color: #428bff;
            }
            
            .tabs input[name="tab-control"]:nth-of-type(3):checked~ul>li:nth-child(3)>label svg {
                fill: #428bff;
            }
            
            @media (max-width: 600px) {
                .tabs input[name="tab-control"]:nth-of-type(3):checked~ul>li:nth-child(3)>label {
                    background: rgba(0, 0, 0, 0.08);
                }
            }
            
            .tabs input[name="tab-control"]:nth-of-type(3):checked~.slider {
                transform: translateX(200%);
            }
            
            .tabs input[name="tab-control"]:nth-of-type(3):checked~.content>section:nth-child(3) {
                display: block;
            }
            
            .tabs input[name="tab-control"]:nth-of-type(4):checked~ul>li:nth-child(4)>label {
                cursor: default;
                color: #428bff;
            }
            
            .tabs input[name="tab-control"]:nth-of-type(4):checked~ul>li:nth-child(4)>label svg {
                fill: #428bff;
            }
            
            @media (max-width: 600px) {
                .tabs input[name="tab-control"]:nth-of-type(4):checked~ul>li:nth-child(4)>label {
                    background: rgba(0, 0, 0, 0.08);
                }
            }
            
            .tabs input[name="tab-control"]:nth-of-type(4):checked~.slider {
                transform: translateX(300%);
            }
            
            .tabs input[name="tab-control"]:nth-of-type(4):checked~.content>section:nth-child(4) {
                display: block;
            }
            
            @keyframes content {
                from {
                    opacity: 0;
                    transform: translateY(5%);
                }
                to {
                    opacity: 1;
                    transform: translateY(0%);
                }
            }
            
            @media (max-width: 1000px) {
                .tabs ul li label {
                    white-space: initial;
                }
                .tabs ul li label br {
                    display: initial;
                }
                .tabs ul li label svg {
                    height: 1.5em;
                }
            }
            
            @media (max-width: 600px) {
                .tabs ul li label {
                    padding: 5px;
                    border-radius: 5px;
                }
                .tabs ul li label span {
                    display: none;
                }
                .tabs .slider {
                    display: none;
                }
                .tabs .content {
                    margin-top: 20px;
                }
                .tabs .content section h2 {
                    display: block;
                }
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
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>