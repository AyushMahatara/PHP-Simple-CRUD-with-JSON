<?php
require './users.php';
$userId = $_GET['id'];

$user = getUserById($userId);
