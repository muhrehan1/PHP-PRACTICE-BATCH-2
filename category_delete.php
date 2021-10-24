<?php
include "server.php";
$category_id = $_GET['id'];
$query_edit_category = "DELETE FROM categories where id = '{$category_id}'";
$result = mysqli_query($connection, $query_edit_category);
if (!$result) {
    die('Query Failed' . mysqli_error($connection));
}

header("location: index.php");