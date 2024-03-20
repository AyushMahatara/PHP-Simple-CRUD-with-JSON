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

    <div class="card">
        <div class="card-header">
            <h3>
                Update
            </h3>
        </div>
    </div>

</div>

<?php
include '../partials/footer.php';
?>