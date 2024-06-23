<?php

$first= $_POST['fname'];
$last= $_POST['lname'];
$email= $_POST['email'];
$dob= $_POST['dob'];
$address= $_POST['address'];
$city= $_POST['city'];
$province= $_POST['province'];
$pcode= $_POST['pcode'];
$job= $_POST['job'];
$phone= $_POST['phone'];

$db_host = 'localhost';
$db_user = 'root';
$db_pwd = '';
$db_name = 'job_portal';

 //mysqli is a extension designed to work with MYSQL.
 // $ - finds a match at the end of the string
//create connection
$conn = new mysqli($db_host, $db_user, $db_pwd, $db_name);

//error handling
//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    

//insert query execution
$sql = "insert into application_form(job, first_name, last_name, email, dob, address, city, province, postal_code, phone_number) values
 ('$job','$first','$last','$email','$dob','$address','$city','$province','$pcode','$phone');";

 
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('New record created successfully')</script>"; //runs js alert code inside php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location: ../pages/index.html")


?>
