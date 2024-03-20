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
    </tbody>
</table>