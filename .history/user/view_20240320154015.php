<?php
require './users.php';
$userId = $_GET['id'];

$user = getUserById($userId);

?>

<table class="table">
    <tbody>
        <tr>
            <th>Name:</th>
            <td><?php echo $user[''] ?></td>
        </tr>
        <tr>
            <th>Username:</th>
            <td><?php echo $user[''] ?></td>
        </tr>
        <tr>
            <th>Email:</th>
            <td><?php echo $user[''] ?></td>
        </tr>
        <tr>
            <th>Phone:</th>
            <td><?php echo $user[''] ?></td>
        </tr>
        <tr>
            <th>Website:</th>
            <td><?php echo $user[''] ?></td>
        </tr>
    </tbody>
</table>