<?php
include 'partials/header.php';
require __DIR__ . '/users2/users2.php';


if (!isset($_POST['id'])) {
    include "partials/not_found.php";
    exit;
}
$user2Id = $_POST['id'];
deleteUser2($user2Id);

header("Location: student.php");