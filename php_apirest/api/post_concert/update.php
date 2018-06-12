<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once '../../config/Database.php';
include_once '../../models/concerts.php';

// instantiate DB & conncet
$database = new Database();
$db = $database->connect();

// instatiate post object
$concertNew = new Concert($db);

$data = json_decode(file_get_contents('php://input'), true);
// var_dump(file_get_contents("php://input"));
$concertNew->construct($data["user_email"], $data["concert_artist"], $data["concert_date"], $data["concert_city"]);

if ($concertNew->updateConcert()) {
	echo json_encode(
		array('message'=>'Concert create')
	);
}
else {
	echo json_encode(
		array('message'=>'Concert not create')
	);
}
?>