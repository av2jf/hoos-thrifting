<?php

header('Access-Control-Allow-Origin: http://localhost:4200');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Authorization, Accept, Client-Security-Token, Accept-Encoding');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, DELETE, PUT');
header('Access-Control-Allow-Credentials: true');

require('connect-db.php');
session_start();

$data = 'denied';
// if logged in, return true
if(isset($_SESSION['user'])) {
    $data = 'allowed';
}
echo json_encode(['session'=>$data]);

?>