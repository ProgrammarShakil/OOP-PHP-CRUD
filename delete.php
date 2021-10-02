<?php

require("classes/users.php");

$user = new user();

$get_id = $_GET['id'];

$user->dlt_users($get_id);

?>