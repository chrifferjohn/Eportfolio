<?php
include 'partials/header.php';
require __DIR__ . '/users2/users2.php';


$user2 = [
    'id' => '',
    'name' => '',
    'username' => '',
    
   
];

$errors = [
    'name' => "",
    'username' => "",
   
];
$isValid = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user2 = array_merge($user2, $_POST);

    $isValid = validateUser2($user2, $errors);

    if ($isValid) {
        $user2 = createUser2($_POST);

        uploadImage($_FILES['picture'], $user2);

        header("Location: student.php");
    }
}

?>

<?php include '_form2.php' ?>