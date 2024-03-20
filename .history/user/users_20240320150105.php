<?php

function getUsers()
{
    $users = json_decode(file_get_contents('./users.json'), true);

    // echo '<pre>';
    // var_dump($users);
    // echo '<pre>';
}


function getUserById($id)
{
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
