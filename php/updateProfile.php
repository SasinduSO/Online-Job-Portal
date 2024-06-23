<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pwd = '';
$db_name = 'job_portal';


//create connection
$conn = new mysqli($db_host, $db_user, $db_pwd, $db_name);

$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$country = $_POST['country'];
$city = $_POST['city'];
$mobile= $_POST['pnumber'];
$email= $_POST['email'];

//update statement is used to update existing records in the table
$sql = "update userdetails set firstname='$firstname', lastname='$lastname', country='$country', city='$city', mobile='$mobile' where email='$email' ";

if ($conn->query($sql) === TRUE) {
    
    //json_encode - returns a string containing the JSON representation of the value(result)
    exit(json_encode(true));
} else {
    exit(json_encode($conn->error));
}

$conn->close();

?>