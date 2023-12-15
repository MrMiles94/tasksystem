<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

// Your PHP code to handle requests will go here
// $data = json_decode(file_get_contents('php://input'), true);

// if (isset($data['message'])) {
//   echo json_encode(['status' => 'success', 'message' => 'Message received: ' . $data['message']]);
// } else {
//   echo json_encode(['status' => 'error', 'message' => 'No message received']);
// }
// echo  'MAliblue n\ ';
// function boy(){
//   return 'world ';
// }
// echo boy();

$data = [];
$data[] = 'roda';
$data [] = 'Baller';
$data[] = '123';
Class User {
  public $name;
  public $password;
  public $id;
  public $speed;
}
$user = new User('aniefiok@gmail.com');
$user->name = 'Akon Akpan';
$user->password = "Loopingthings";
$user->id = new DateTime();
$data[]=$user;
$data = json_encode($data);
echo $data

?>