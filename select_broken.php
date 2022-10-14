<?php

require_once ('DB.php');
require_once ('DB_functions.php');
require_once ('model/Country.php');

connect('localhost', 'world', 'root', '');

$query = "SELECT * FROM `countries`";
$resultList = select($query, [], Country::class);

header('Content-type: application/json');
echo json_encode($resultList);

