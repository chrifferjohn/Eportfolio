<?php
/**
 * User: TheCodeholic
 * Date: 3/19/2019
 * Time: 9:27 AM
 */

function getUsers2()
{
    return json_decode(file_get_contents(__DIR__ . '/users2.json'), true);
}

function getUser2ById($id)
{
    $users2 = getUsers2();
    foreach ($users2 as $user2) {
        if ($user2['id'] == $id) {
            return $user2;
        }
    }
    return null;
}

function createUser2($data)
{
    $users2 = getUsers2();

    $data['id'] = rand(1000000, 2000000);

    $users2[] = $data;

    putJson($users2);

    return $data;
}

function updateUser2($data, $id)
{
    $updateUser2 = [];
    $users2 = getUsers2();
    foreach ($users2 as $i => $user2) {
        if ($user2['id'] == $id) {
            $users2[$i] = $updateUser = array_merge($user2, $data);
        }
    }

    putJson($users2);

    return $updateUser2;
}

function deleteUser2($id)
{
    $users2 = getUsers2();

    foreach ($users2 as $i => $user2) {
        if ($user2['id'] == $id) {
            array_splice($users2, $i, 1);
        }
    }

    putJson($users2);
}

function uploadImage($file, $user2)
{
    if (isset($_FILES['picture']) && $_FILES['picture']['name']) {
        if (!is_dir(__DIR__ . "/images")) {
            mkdir(__DIR__ . "/images");
        }
        // Get the file extension from the filename
        $fileName = $file['name'];
        // Search for the dot in the filename
        $dotPosition = strpos($fileName, '.');
        // Take the substring from the dot position till the end of the string
        $extension = substr($fileName, $dotPosition + 1);

        move_uploaded_file($file['tmp_name'], __DIR__ . "/images/${user2['id']}.$extension");

        $user2['extension'] = $extension;
        updateUser2($user2, $user2['id']);
    }
}

function putJson($users2)
{
    file_put_contents(__DIR__ . '/users2.json', json_encode($users2, JSON_PRETTY_PRINT));
}

function validateUser2($user2, &$errors)
{
    $isValid = true;
    // Start of validation
    if (!$user2['name']) {
        $isValid = false;
        $errors['name'] = 'Name is mandatory';
    }
    if (!$user2['username'] || strlen($user2['username']) < 6 || strlen($user2['username']) > 16) {
        $isValid = false;
        $errors['username'] = 'Username is required and it must be more than 6 and less then 16 character';
    }
   
   
    // End Of validation

    return $isValid;
}