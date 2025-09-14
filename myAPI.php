<?php
// api.php

header("Content-Type: application/json"); // tell browser it's JSON

$data = [
    "status" => "success",
    "message" => "Hello, this is my own API!",
    "time" => date("Y-m-d H:i:s")
];

// Convert PHP array to JSON and output
echo json_encode($data);
