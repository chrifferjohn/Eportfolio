<?php
session_start();

// Check if the form is submitted for login
if (isset($_POST['login'])) {
    // Your existing login logic
     {
        $user_type = $_POST['user_type'];
        $password = $_POST['password'];
    
        if ($user_type == 'instructor' ) {
            $_SESSION['user_type'] = 'instructor';
            header('location:dashboard.php');
            exit(); // Add exit after header to prevent further execution
        } else if ($user_type == 'student' ) {
            $_SESSION['user_type'] = 'student';
            header('location:index.php');
            exit(); // Add exit after header to prevent further execution
        } else {
            $error = "Invalid Login Credentials.";
        }
    }
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

   button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: center;
  width: 10%;
}

    </style>
    <script>
        // JavaScript function to redirect to login page after registration
        function redirectToLogin() {
            window.location.href = 'login.php';
        }
    </script>
</head>
<body>
<h1><center>Login</h1></center>
    <form method="post" action="login.php">
        <label>User Type:</label>
        <select name="user_type">
            <option value="instructor">Instructor</option>
            <option value="student">Student</option>
        </select>
        <br>
        <label>Password:</label>
        <input type="password" name="password">
        <br>
        <input type="submit" name="login" value="Login">
    </form>
    <?php if (isset($error)) {
        echo "<p>" . $error . "</p>";
    } ?>

   
    </div>

    <center><p>You have an account <a href="#" style="color:dodgerblue">.....</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn"><a href="registration.php">Sign Up</button></a>
    </div></center>

    <?php
    
    if (isset($_GET['registration']) && $_GET['registration'] == 'success' && isset($_SESSION['registered_username'])) {
        
        echo "<p>Registration successful for user: " . $_SESSION['registered_username'] . "</p>";
        echo '<p><a href="login.php">Click here to login</a></p>';
        
        unset($_SESSION['registered_username']);
    }
    ?>
</body>
</html>
