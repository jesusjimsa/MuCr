<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods');

include_once '../../config/Database.php';
include_once '../../models/concerts.php';

// instantiate DB & conncet
$database = new Database();
$db = $database->connect();

// instatiate post object
$sconcert = new concert($db);

// get the Data
$data = json_decode(file_get_contents("php://input"), true);

$sconcert->construct($data["user_email"], $data["concert_artist"], $data["concert_date"], $data["concert_city"]);

if ($sconcert->deleteConcert()) {
	echo json_encode(
		array('message'=>'Concert deleted')
	);
}
else {
	echo json_encode(
		array('message'=>'Concert not deleted')
	);
}
?>