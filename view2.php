<?php
include 'partials/header.php';
require __DIR__ . '/users2/users2.php';

if (!isset($_GET['id'])) {
    include "partials/not_found.php";
    exit;
}
$user2Id = $_GET['id'];

$user2 = getUser2ById($user2Id);
if (!$user2) {
    include "partials/not_found.php";
    exit;
}


?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>View User: <b><?php echo $user2['name'] ?></b></h3>
        </div>
        
                    <?php if (isset($user2['extension'])): ?>
                       <center> <img style="width: 400px" src="<?php echo "users2/images/${user2['id']}.${user2['extension']}" ?>" alt=""></center>
                    <?php endif; ?>
                   
                </td>
            </tr>
           
           
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

</style>

<script>
    document.getElementById('backToDashboardButton').addEventListener('click', function() {
    // Redirect to the dashboard page
    window.location.href = 'dashboard.php'; // Replace '/dashboard' with the actual URL of your dashboard
});


</script>


<?php include 'partials/footer.php' ?>