<?php
//header
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../models/concerts.php';

// instantiate DB & conncet
$database = new Database();
$db = $database->connect();

// instatiate post object
$post = new Concert($db);

// post $query
$result = $post->read();
$num = count($result);

// check if anypost
if ($num > 0) {
	$concerts = array();
	$total = 0;

	while ($total < $num) {
		$concerts[$total] = array();

		$concert_item = array(
			'user_email' => $result[$total][0],
			'concert_artist' => $result[$total][1],
			'concert_date' => $result[$total][2],
			'concert_city' => $result[$total][3]
		);

		$concerts[$total] = $concert_item;
		$total++;
	}

	// TURN TO json &outpout
	echo json_encode($concerts);
}
else {
	// NO POSTs
	echo json_encode(array('message'=>'No concert found'));
}
?>