<?php 
include __DIR__ . '/db.php';
header('Content-type: application/json');
echo json_encode([
    'results' =>  $cars,
    'length' => count($cars),
]);
?>