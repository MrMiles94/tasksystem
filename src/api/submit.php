<?php
// Assuming you have a MySQL database connection

$database = "your_database";
$data = json_decode(file_get_contents("php://input"));

function submitRequest($data, $database){
    $host = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        // Retrieve data from the request
        $name = $data->name;
        $email = $data->email;

        // Insert data into the database
        $sql = "INSERT INTO your_table_name (name, email) VALUES ('$name', '$email')";

        if ($conn->query($sql) === TRUE) {
            echo json_encode(["success" => true]);
        } else {
            echo json_encode(["success" => false, "error" => $conn->error]);
        }

        $conn->close();
    }
}
?>