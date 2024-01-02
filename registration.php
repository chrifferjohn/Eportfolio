<?php
session_start();



// Check if the form is submitted for registration
if (isset($_POST['register'])) {
    $user_type = $_POST['user_type'];
    $username = $_POST['username'];
    $password1 = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Perform your registration logic here
    // You might want to add validation checks and database operations

    // For this example, I'll just display a success message
    $success_message = "Registration successful!";

    // Set session variables for the registered user
    $_SESSION['user_type'] = $user_type;
    $_SESSION['registered_username'] = $username;

    // Redirect to the login page with a flag indicating successful registration
    header('location:login.php?registration=success');
    exit(); // Add exit after header to prevent further execution
}
?>

<!DOCTYPE html>
<html>
<head>
<style>

.registration-form {
            margin-top: 20px;
        }
        body 
     { font-family: Arial, sans-serif;
        background-color: #f5f5f5; } 
     form 
     { width: 300px;
         margin: 0 auto;
          padding: 20px;
           border: 1px solid #ddd; 
           background-color: #fff; 
           border-radius: 5px; }
 form label
  { display: block; 
         margin-bottom: 5px; }
  form select, form input[type="password"] 
  { width: 100%;
     padding: 8px;
      margin-bottom: 15px; 
      border: 1px solid #ddd;
       border-radius: 3px; }
   form input[type="submit"] 
   { width: 100%; padding: 8px;
     margin-bottom: 10px;
      background-color: #0096ff; 
     border: none; border-radius: 3px; 
     color: #fff;
      cursor: pointer; } 
   form input[type="submit"]:hover 
   { background-color: #007acc; }
    </style>
    <script>
        // JavaScript function to redirect to login page after registration
        function redirectToLogin() {
            window.location.href = 'login.php';
        }
    </script>
</head>
<body>


    <!-- Registration form -->
    <div class="registration-form">
        <h2><center>Register</center></h2>
        <form method="post" action="login.php">
            <!-- Registration form -->
    <div class="registration-form">
        <h2><center>Register</center></h2>
        <form method="post" action="login.php">
            <label>User Type:</label>
            <select name="user_type">
                <option value="instructor">Instructor</option>
                <option value="student">Student</option>
            </select>
            <br>
            <label>Username:</label>
            <input type="text" name="username">
            <br>
            <label>Password:</label>
            <input type="password" name="password">
            <br>
            <label>Confirm Password:</label>
            <input type="password" name="confirm_password">
            <br>
            <input type="submit" name="register" value="Register">
        </form>
        <?php if (isset($success_message)) {
            echo "<p>" . $success_message . "</p>";
        } ?>
            
    </div>

    <?php
    // Check if registration success flag is set
    if (isset($_GET['registration']) && $_GET['registration'] == 'success' && isset($_SESSION['registered_username'])) {
        // Display a message with the registered username and a link to login
        echo "<p>Registration successful for user: " . $_SESSION['registered_username'] . "</p>";
        echo '<p><a href="login.php">Click here to login</a></p>';
        // Clear the session variables
        unset($_SESSION['registered_username']);
    }
    ?>
</body>
</html>
