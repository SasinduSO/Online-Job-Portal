<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pwd = '';
$db_name = 'job_portal';


//create connection
$conn = new mysqli($db_host, $db_user, $db_pwd, $db_name);

$email= $_POST['email'];

//select data from one or more tables
$sql = mysqli_query($conn, "select * from userdetails where email='$email'");

//fetch from userdetails(table) for the given email
//MYSQLI_ASSOC makes the function behave like mysqli_fetch_assoc() function.
//fetching an associative array
//'associative arrays' are arrays that use named keys that you assign to them.
$result = mysqli_fetch_all($sql, MYSQLI_ASSOC);

//export user data (json format is easy to read)
//json_encode is a function that returns a string containing the JSON representation of the value(result)
exit(json_encode($result)); 

$conn->close();

?>