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
$concerts = new Concert($db);

$concertN2 = "";

// get
if (isset($_GET['user_email'])) {
		$concertN1 = isset($_GET['user_email'])? $_GET['user_email']:die();
		$concertN2 = "WHERE user_email = '$concertN1'";
}
else {
	if (isset($_GET['concert_date'])) {
		$concertN1 = isset($_GET['concert_date'])? $_GET['concert_date']:die();
		$concertN2 = "WHERE concert_date = '$concertN1'";
	}
	else {
		if (isset($_GET['concert_artist'])) {
			$concertN1 = isset($_GET['concert_artist'])? $_GET['concert_artist']:die();
			$concertN2 = "WHERE concert_artist = '$concertN1' ";
		}
		else {
			if (isset($_GET['concert_city'])) {
				$concertN1 = isset($_GET['concert_city'])? $_GET['concert_city']:die();
				$concertN2 = "WHERE concert_city = '$concertN1' ";
			}
		}
	}
}

// get concert
$result = $concerts->read_single_concert($concertN2);
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
	echo json_encode(
		array('message'=>'No Posts Found')
	);
}

//
// $post_arr= array(
//   'title'=>$posr->albumname,
//   'length'=>$posr->length,
//   'style'=>$posr->style,
//   'type'=>$posr->type,
//   'deluxe'=>$posr->deluxe,
//   'year'=>$posr->year
// );

// print an array
// print_r(json_encode($post_arr));
?>