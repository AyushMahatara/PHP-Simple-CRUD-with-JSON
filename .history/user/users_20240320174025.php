<?php

function getUsers()
{
    return json_decode(file_get_contents('./users.json'), true);

    // echo '<pre>';
    // var_dump($users);
    // echo '<pre>';
}


function getUserById($id)
{
    $users = getUsers();
    foreach ($users as $user) {
        if ($user['id'] == $id) {
            return $user;
        }
    }
    return null;
}


function createUser($data)
{
}


function updateUser($data, $id)
{
    $users = getUsers();
    foreach ($users as $user) {
        if ($user['id'] == $id) {
            $user['i'] = array_merge($user, $data);
        }
    }
}

function deleteUser($id)
{
}
