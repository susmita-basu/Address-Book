<?php

require_once('db.php');

$id = $_GET['id'];

$q = " DELETE FROM `information` WHERE id = $id ";

mysqli_query($con, $q);

header('location:select_entry.php');

?>