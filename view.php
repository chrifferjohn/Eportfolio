<?php
include 'partials/header.php';
require __DIR__ . '/users/users.php';

if (!isset($_GET['id'])) {
    include "partials/not_found.php";
    exit;
}
$userId = $_GET['id'];

$user = getUserById($userId);
if (!$user) {
    include "partials/not_found.php";
    exit;
}


?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>View activity: <b><?php echo $user['name'] ?></b></h3>
        </div>
        
        <table class="table">
            <tbody>
            <tr>
                <th></th>
                <td></td>
            </tr>
            <tr>
            <td>
                    <?php if (isset($user['extension'])): ?>
                        <img style="width: 500px" src="<?php echo "users/images/${user['id']}.${user['extension']}" ?>" alt="">
                    <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<button id="backToDashboardButton">Back to Dashboard</button>

<!-- Your other content goes here -->

<style>
    body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    
    align-items: center;
    height: 100vh;
    background-color: #f4f4f4;
}

#backToDashboardButton {
    background-color: #3498db;
    color: #fff;
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

#backToDashboardButton:hover {
    background-color: #2980b9;
}
td {
    text-align: center;
    padding: 200px;
}


</style>

<script>
    document.getElementById('backToDashboardButton').addEventListener('click', function() {
    // Redirect to the dashboard page
    window.location.href = 'dashboard.php'; // Replace '/dashboard' with the actual URL of your dashboard
});


</script>


<?php include 'partials/footer.php' ?>