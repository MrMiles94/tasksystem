<?php
require_once './core/dbconn.php';

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

$encoded_data = file_get_contents("php://input");
//$encoded_data = '{"email":"aniefiokasuqu@gmail.com","password":"runninghills"}';

$data = json_decode($encoded_data);
$user = new User($data->email);
if ($res=$user->login($data->email, $data->password)){
    echo json_encode($res);
}else{
    echo json_encode(["error"=>"Could not login user!"]);
}


?>