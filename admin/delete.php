<?php

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'onlinemed');

$id = $_GET['id'];

$q = " DELETE FROM nursing_service WHERE id = $id ";

mysqli_query($con, $q);

header('location:request-nurse.php');

?>