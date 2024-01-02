<?php
session_start();

if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] != 'student') {
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User CRUDE Operations</title>
</head>
<body>
    <h1>User CRUDE Operations</h1>
    
    <!-- Implement the CRUDE operations for student -->
    <p><a href="dashboard.php">Back to Dashboard</a></p>
</body>
</html>