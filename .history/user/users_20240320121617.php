<?php

function getUsers()
{
    $users = file_get_contents('./users.json');

    echo '<pre>';
    var_dump($users);
    echo '<pre>';
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
