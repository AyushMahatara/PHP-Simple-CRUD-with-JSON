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

if ($_SERVER['REQUEST_METHOD'] === 'post') {
    updateUser($_POST, $userId);
}
?>

<div class="container">

    <div class="card">
        <div class="card-header">
            <h3>
                Updating <?php  ?>
            </h3>
        </div>
        <div class="card-body">
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
                    <label>Phone:</label>
                    <input type="phone" name="phone" class="form-control" placeholder="phone">
                </div>

                <div class="form-group">
                    <label>Website:</label>
                    <input type="website" name="wensite" class="form-control" placeholder="Enter website">
                </div>
                <div class="form-group">
                    <label>Image:</label>
                    <input type="file" name="image" class="form-control" placeholder="image">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</div>

<?php
include '../partials/footer.php';
?>