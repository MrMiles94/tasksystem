<?php
require_once './core/dbconn.php';
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
$encoded_data = file_get_contents("php://input");
//$encoded_data= '{"firstName":"benson","lastName":"orok","email":"qortyy@yiou.com","password":"lextax"}';

$data = json_decode($encoded_data);
$user = new User("$data->email");
$user->checkEmail();
$result=[];
if ($user->register($data)){
    $result['firstName']=$user->firstName;
    $result['lastName']=$user->lastName;
    $result['email']=$user->email;
    echo json_encode($result);
}else{
    $result['error']='User already exists!';
    $result['email']=$user->email;
    echo json_encode($result);
}
?>