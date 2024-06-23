<?php

//information sent from post method is invisible to others,
//$_POST variable is used to collect values from a form with method = "post"
$first= $_POST['first'];
$last= $_POST['last'];
$email= $_POST['email'];
$description= $_POST['description'];

$dbServername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbName = "job_portal";


//create connection
$conn = mysqli_connect($dbServername,$dbusername,$dbpassword,$dbName);

//error handling
//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    

//insert query execution
$sql = "INSERT INTO feedback_form(first_name,last_name,email,description) VALUES ('$first','$last','$email','$description');";


if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Form Submitted Successfully')</script>"; //runs js alert code inside php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


header("Location: ../pages/contact.html")
?>
