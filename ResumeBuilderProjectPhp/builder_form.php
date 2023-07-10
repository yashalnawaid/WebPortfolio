<!DOCTYPE html>
<html>
  <head>
    <title>CV Builder Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      /* Custom CSS */
      form {
        max-width: 500px;
        margin: 0 auto;
      }

      label {
        font-weight: bold;
      }
      input[type="text"], input[type="tel"], input[type="email"], textarea {
        width: 100%;
        padding: 8px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 20px;
      }
      input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
      input[type="submit"]:hover {
        background-color: #45a049;
      }
    </style>
  </head>
  <body>
    <div class="container mt-5">
      <h1 class="text-center mb-5">CV Builder Form</h1>
      <form method="post" action="process_form.php">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="phone">Contact Number:</label>
          <input type="tel" id="phone" name="phone" class="form-control" required>
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
          <label for="high_school">High School:</label>
          <input type="text" id="high_school" name="high_school" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="institution">Institution Name:</label>
          <input type="text" id="institution" name="institution_highschool" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="bachelors">Bachelor's Degree:</label>
          <input type="text" id="bachelors" name="bachelors" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="institution">Institution Name:</label>
          <input type="text" id="institution" name="institution_bachelors" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="masters">Master's Degree:</label>
          <input type="text" id="masters" name="masters" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="institution">Institution Name:</label>
          <input type="text" id="institution" name="institution_masters" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="institution">Experience Previous Company:</label>
          <input type="text" id="Company_name" name="Company_name" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="institution">Skills:</label>
          <input type="text" id="skills" name="skills" class="form-control" required>
        </div>
        <input type="submit">
      
    </body>
    </head>
