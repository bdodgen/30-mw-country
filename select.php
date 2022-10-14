<?php

require_once ('DB.php');
require_once ('DB_functions.php');
require_once ('model/Country.php');

connect('localhost', 'world', 'root', '');


// SHORT ANSWER 
$name = $_GET["name"] ?? '';
$continent = $_GET["continent"] ?? '';
$population = $_GET["population"] ?? 0;

$query = "SELECT * FROM `countries` WHERE 1 AND `name` LIKE ? AND `continent` LIKE ? AND `population` > ?"; // the where 1 condition could be useful for you
$queryParams = [$name . '%', $continent . '%', $population];


// LONG ANSWER 
// $query = "SELECT * FROM `countries` WHERE 1"; // the where 1 condition could be useful for you
// $queryParams = [];

// if (isset($_GET["name"])){
//   $name = $_GET["name"];
//   array_push($queryParams, $name . '%');
 
//   $query = $query . " AND `name` LIKE ?";
// }

// if (isset($_GET["continent"])){
//   $continent = $_GET["continent"];
//   array_push($queryParams, $continent . '%');
 
//   $query = $query . " AND `continent` LIKE ?";
// }

// if (isset($_GET["population"])){
//   $population = $_GET["population"];
//   array_push($queryParams, $population);
 
//   $query = $query . " AND `population` > ?";
// }


$resultList = select($query, $queryParams, Country::class);

header('Content-type: application/json');
echo json_encode($resultList);
