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
    foreach ($users as $i => $user) {
        if ($user['id'] == $id) {
            $users['i'] = array_merge($user, $data);
        }
    }
    file_put_contents('./users.json', json_encode($users));
}

function deleteUser($id)
{
}
