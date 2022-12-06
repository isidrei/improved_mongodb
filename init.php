<?php
include "vendor/autoload.php";

use Models\Student;
use MongoDB\BSON\ObjectID;

$client = new MongoDB\Client('mongodb://localhost:27017');
$connection = $client->local->students;

$mustache = new Mustache_Engine([
	'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/templates')
]);

$alert = $_GET['alert'] ?? null;

if ($alert==1){
	$alert  = "Add Successfuly!";
}
if ($alert==2){
	$alert  = "Update Successfuly!";
}

if ($alert==3){
	$alert  = "Delete Successfuly!";
}
?>