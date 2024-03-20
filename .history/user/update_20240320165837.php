<?php
include '../partials/header.php';
require './users.php';

if (!isset($_GET['id'])) {
    include "../partials/not_found.php";
    exit;
}

$userId = $_GET['id'];

$user = getUserById($userId);

if (!$user) {
    include "../partials/not_found.php";

    exit;
}
?>

<div class="container">

    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Name:</label>
            <input type="name" name="name" class="form-control" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label>Usename:</label>
            <input type="username" name="username" class="form-control" placeholder="username">
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label>Usename:</label>
            <input type="username" name="username" class="form-control" placeholder="username">
        </div>

        <div class="form-group">
            <label>Name:</label>
            <input type="name" name="name" class="form-control" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label>Usename:</label>
            <input type="username" name="username" class="form-control" placeholder="username">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

<?php
include '../partials/footer.php';
?>