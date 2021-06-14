

<?php
    
    // receive data from html (POST)
    $name = $_POST['name'];
    $emailid = $_POST['emailid'];


    echo $name;
    echo $emailid;

    //create a connection with DB server
    $server = "localhost:3306";
    $username = "root";
    $password = "";
    $dbname = "webdevbootcamp";

    // send request to DB server
    $conn=mysqli_connect($server,$username,$password,$dbname); // arguments must be in order
    if(!$conn) {
    	echo 'connection failure';
    } else {
    	echo 'connection Authorised';
    }

    //server is connected , we have to insert data
    // prepare sql Injection to call it

    $sql="INSERT INTO info (name,emailid) VALUES ('".$name."','".$emailid."')";
    
    // INSERT INTO info(name,emailid) VALUES ('TEJA','nimmaditeja@gmail.com')

    //execute this sql Injection

    $response=mysqli_query($conn,$sql);
    if(!$sql) {
    	echo 'Insertion Error';
    } else {
    	echo 'Inserted Successfully';
    }

?>