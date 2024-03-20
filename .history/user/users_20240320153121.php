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
}


function createUser($data)
{
}


function updateUser($data, $id)
{
}

function deleteUser($id)
{
}
