<?php 
session_start();
require './tasks.php';


class User extends mysqli {
    //user details
        //login details
    public $email;
    protected $password;
    public $userId;
    //other details
    public $firstName;
    public $lastName;
    public $middleName;
    public $profilePicture;
    private $Task;
    // Constructor to initialize the database connection
    public function __construct($email) {
        $this->setEmail($email);
        parent::__construct("localhost", "root", "", 'users'); /*host,  user, password, database*/
        // Check the connection
        if ($this->connect_error) {
            die("Connection failed:  $this->connect_error");
        }else{
            return true;
        }
        if(isset($_SESSION['user_id'])){

        }
    }

    // Additional methods or overrides can be added here
    public function query_db($sql) {
        if($result = $this->query($sql)){
           return $result;
        }else{
            return false;
        }
        
    }    
    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }
    public function setLastName($lastName){
        $this->lastName =$lastName;
    }
    public function setMiddleName($middleName){
        $this->middleName = $middleName;
    }
    public function setUserId($userId){
        $this->userId= $userId;
    }
    protected function setPassword($password){
        $this->password = $this->encryptPassword($password);
    }
    public function setProfileDetails($data){
        $this->userId =$data->use_id;
        //other details
        $this->firstName=$data->first_name;
         $this->lastName=$data->last_name;
        $this->middleName =$data->other->names;
        $this->profilePicture;
        $this->Task;
    }

    public function setEmail($email){
        $this->email=$email;
    }
    public function checkEmail(){
        $sql = "SELECT * FROM user_profile WHERE email = '$this->email'";
        if($result =$this->query_db($sql)){
        return $result->fetch_assoc();
        }else{
            return false;
        }
    }
    protected function encryptPassword($password){
        return md5(md5(md5($password,true), true));
    }
    public function login($email, $pasword){
        $this->setEmail($email);
        $this->setPassword($pasword);
        $request = "SELECT `user_id`, `first_name`, `last_name`, `other_names`, `email` FROM `user_profile` 
        WHERE email = '$this->email' AND pasword = '$this->password';";
        if ($result =$this->query_db($request)){
            $user= $result->fetch_assoc();
            $_SESSION['user_id']=$user['user_id'];
            $this->Task = new Task($this->userId);
            return $user;
        }else{
            return false;
        }
    }
    public function confirmUser($email, $confrimationCode){
        $this->setEmail($email);
        $request = "SELECT `user_id`, `first_name`, `last_name`, `other_names`, `email` FROM `user_profile` WHERE email = '$this->email' AND confirmation_code='$confrimationCode';";
        $result =$this->query_db($request);
        if ($user= $result->fetch_assoc()){
            $_SESSION['user_id']=$user['user_id'];
            $confirm = "UPDATE `user_profile` SET `confirm_user`=1 WHERE confirmation_code='$confrimationCode';";
            if($this->query_db($confirm)){
                return json_encode($user);
            }else{
                return '{"error":"could not confirm user"}';
            }
        }else{
            return false;
        }
    }
    public function register($data){
        if (!$this->checkEmail($data->email)){
            $this->setEmail($data->email);
            $this->setPassword($data->password);
            $this->setFirstName($data->firstName);
            $this->setLastName($data->lastName);
            $codeGen= random_int(111111,979989);
            $details= "INSERT INTO 
            user_profile (`first_name`, `last_name`, `email`,`pasword`, `confirmation_code`)
            VALUES ('$this->firstName', '$this->lastName', '$this->email' ,'$this->password', '$codeGen' );";
            return $this->query_db($details);
        }
        else{
            return false;
        }
    }
}

// Usage
// $customMysqli = new User('localhost', 'username', 'password', 'database');

// // Example query
// $sql = 'SELECT * FROM tasks';
// $result = $customMysqli->query_db($sql);
// $email = 'aniefiok@gmail.com';
// $password = 'robertbeans@#$loop';
// $confrimationCode = '214ea748f6647';
// //$user = $customMysqli->login($email,$password);
// $user = $customMysqli->confirmUser($email,$confrimationCode);
// echo $user."<br>";
// // Process the result as needed
// while ($row = $result->fetch_assoc()) {
//     // Do something with $row
//     echo $row['title'].'<br>';
// }
// // Close the connection
// $customMysqli->close();
?>