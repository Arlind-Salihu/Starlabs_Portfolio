<?php

    const host = 'localhost:3306';
	const email = 'root';
	const pass = '';
	const name = 'starlabs';
	$errors = array();

	$conn = new mysqli(host, email, pass, name);

	if ($conn->connect_error) {
	  die('Could not connect to the database!' . $conn->connect_error);
	}
?>