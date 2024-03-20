<?php
require './users.php';
$userId = $_GET['id'];

$user = getUserById($userId);

?>

<table class="table">
    <tbody>
        <tr>
            <th>Name:</th>
            <td></td>
        </tr>
        <tr>
            <th>Username:</th>
            <td></td>
        </tr>
        <tr>
            <th>Email:</th>
            <td></td>
        </tr>
        <tr>
            <th>Phone:</th>
            <td></td>
        </tr>
        <tr>
            <th>Website:</th>
            <td></td>
        </tr>
        <tr>
            <th>Name:</th>
            <td></td>
        </tr>
    </tbody>
</table>