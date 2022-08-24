<?php
include_once('conn.php');
header('Content-Type: application/json');

session_destroy();
echo json_encode('');
