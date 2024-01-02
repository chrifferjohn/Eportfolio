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

$errors = [
    'name' => "",
    'username' => "",
    'email' => "",
    'phone' => "",
    'website' => "",
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user2 = array_merge($user2, $_POST);

    $isValid = validateUser2($user2, $errors);

    if ($isValid) {
        $user2 = updateUser2($_POST, $user2Id);
        uploadImage($_FILES['picture'], $user2);
        header("Location: student.php");
    }
}

?>

<?php include '_form2.php' ?>