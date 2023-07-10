<!DOCTYPE html>
<html>
<head>
    <title>Admin Sign In</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        h2 {
            color: #55b5a5;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #f2f2f2;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        label {
            color: #21796c;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            margin-top: 8px;
        }

        .error-message {
            color: #dc3545;
            margin-top: 8px;
        }
    </style>
</head>
<body>
    <h2>Admin Sign In</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group">
            <label for="user_id">User ID:</label>
            <input type="text" name="user_id" id="user_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="code">Code:</label>
            <input type="password" name="code" id="code" class="form-control" required>
        </div>
        <input type="submit" value="Sign In" class="btn btn-primary">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_id = $_POST["user_id"];
        $code = $_POST["code"];

        // Check if the user ID and code are valid
        $valid_user_id = "admin123";
        $valid_code = "secret123";

        if ($user_id === $valid_user_id && $code === $valid_code) {
            echo '<div class="success-message">Sign In successful.</div>';
            header("Location: admin.php");
        } else {
            echo '<div class="error-message">Invalid user ID or code.</div>';
        }
    }
    ?>
</body>
</html>
