<?php
/*
NOTE: all single line comments carrying multiple stars stand for notable actions
while other are just code explainations
*/

class Task{
    public $taskId;
    public $title;
    public $description;
    public $publisher;
    public $deparment;
    public $location;
    public $priority;
    public $likes;
    public $dislikes;
    public $comments;
    public $otherTasks ;

    // Constructor to initialize the database connection
    public function __construct($id) {
        $this->fetchTask($id);
    }

    public function query_db($sql){
        $conn = new mysqli("localhost", "root", "", 'users');
        if($result=$conn->query($sql)){
            return $result;
        }else{
            return true;
        }
    }
    public function fetchTask($Id){
        //gets the id of the user from the user object and finds all tasks he has ever created
        $task =$this->query_db("SELECT * FROM `tasks` WHERE taskId = '$Id';")->fetch_assoc(); 
        //set the values to the properties of the Task object
        $this->taskId =$task['taskId'];
        $this->title=$task['title'];
        $this->description=$task['description'];
        $this->deparment=$task['department'];
        $this->location=$task['location'];
        $this->priority=$task['priority'];
        $this->likes=$task['likes'];
        $this->dislikes=$task['dislikes']; 
        $user_id = $task['user_id'];
        $this->publisher=$this->query_db(
            "SELECT `user_id`, `email`, `first_name`, `last_name` 
            FROM `user_profile` WHERE user_id = '$user_id';"
        )->fetch_assoc();
        ## Here we will evaluate who this person is the the current user @ the frontend 
        return $this;
    }
    public function fetchAllTask($userId){
        if($tasks =$this->query_db("SELECT * FROM `tasks` WHERE userId = '$userId';")){
            if($this->otherTasks=$tasks->fetch_assoc()){
                foreach ($this->otherTasks as $otherTask){
                    $user_id = $otherTask['user_id'];
                    $otherTask->publisher=$this->query_db(
                        "SELECT `user_id`, `email`, `first_name`, `last_name` 
                        FROM `user_profile` WHERE user_id = '$user_id';"
                    )->fetch_assoc();
                }
                return $this->otherTasks;
            }else{
                return false;
            }
        }else{
            return false;
        }
        /*
            gets the id of the user from the user 
            object and finds all tasks he has ever created
        */
        
    }
    public function addTask($data){
        $response = [];
        $data = json_decode($data);
        //collects the basic info of the task and add it to the tasks table
        $sql ="INSERT INTO `tasks`
        (`title`, `description`, `location`, `machine`, `priority`, `taskDate`, `taskTime`, `user_id`, `department`)
        VALUES 
        ('
            $data->title',
            '$data->description',
            '$data->location',
            '$data->machine',
            '$data->priority',
            '$data->taskDate',
            '$data->taskTime',
            '$data->userId',
            '$data->department'
        );";
        if($this->query_db($sql)){
            return true;
        }else{
            return false;
        }
        //also initiates the fetch task action if neccesary

        // **we will use the return statements initiate other commands like fetchAllTask() and so on**
    }
    public function editTask($data){
        $data = json_decode($data); //decodes the json data sent from frontend 
        $sql="UPDATE `tasks` SET 
        `title`='$data->title',
        `description`='$data->description',
        `location`='$data->location',
        `machine`='$data->machine',
        `priority`='$data->priority',
        `taskDate`='$data->taskDate',
        `taskTime`='$data->taskTime',
        `user_id`='$data->userId',
        `department`='$data->department',
        `likes`='$data->likes',
        `dislikes`='$data->dislikes'
         WHERE taskId='$data->taskId';"; //Organizes the querry fron the the translated data
        if($this->query_db($sql)){ //querries the the db
            return true;
        }else{
            return false;
        }
    }
    public function react($data ){
        $data =json_decode($data);
        $sql="UPDATE `tasks` SET 
        `likes`='$data->likes'
        `dislikes`='$data->dislikes'
         WHERE taskId='$data->taskId';";
        return $this->query_db($sql);
    }
    public function archiveTask($id){
        //removes the task from the task table to the archive table
        $task = $this->fetchTask($id);
    }
    public function comment(){
        //updates the comment array
    }
    
}
$task = new Task(140);
echo json_encode($task);
// function press($input){
//     $input = json_decode($input);
//     $request = json_decode('{}');
//     $rek=$input->rek;
//     $ban=$input->ban; 
//     $ross=$input->ross;
//     var_dump($input);
//     if(isset($rek) && isset($ban)&&isset($ross)){
//         $request->name = "`rek`, `ban`, `ross`";
//         $request->value="$rek, $ban, $ross";
//     }elseif(isset($rek) && isset($ban)){
//         $request->name = "`rek`, `ban`";
//         $request->value="$rek, $ban";
//     }
//     elseif(isset($rek)&&isset($ross)){
//         $request->name = "`rek`, `ross`";
//         $request->value="$rek, $ross";
//     }elseif(isset($ban)&&isset($ross)){
//         $request->name = "`ban`, `ross`";
//         $request->value="$ban, $ross";
//     }elseif(isset($rek)){
//         $request->name = "`rek`";
//         $request->value="$rek";
//     }elseif(isset($ban)){
//         $request->name = "`ban`";
//         $request->value="$ban";
//     }elseif(isset($ross)){
//         $request->name = "`ross`";
//         $request->value="$ross";
//     }else{
//         return false;
//     }
//     echo "<br>";
//     echo $request->name.'<br>';
//     echo$request->value.'<br>';
//     echo "SELECT $request->name tasks WHERE 1".'<br>';
//     echo "INSERT INTO  `task` ($request->name) VALUES ($request->value)";
// }
// press('{"rek":"rek","ban":null,"ross":"ross"}');
?>
