<?

function message($title, $text, $status) {
	echo json_encode(array(
		'title' => $title,
		'text' => $text,
		'status' => $status,
	));
}


function location($url) {
	echo json_encode(array(
		'url' => $url,
	));
}

?>