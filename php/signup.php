<?php


session_start();


$db_host = 'localhost';
$db_user = 'root';
$db_pwd = '';
$db_name = 'job_portal';


//create connection
$con = new mysqli($db_host, $db_user, $db_pwd, $db_name);

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$country = $_POST['country'];
$city = $_POST['city'];
$mobile= $_POST['MN1'];
$email= $_POST['email'];
$password = $_POST['emailc'];


//form validation
//select data from one or more tables
//$s = $sql
$s = "select * from userdetails where email = '$email'"; 

$result = mysqli_query($con, $s);

//checks if there are more than zero rows returned
$num = mysqli_num_rows($result);

//if there are more than zero rows then displays 'email already taken'
if($num == 1){
    echo" Email Already Taken";

}else{
    //insert query execution
    $reg = "insert into userdetails(firstname, lastname, country, city, mobile, email, password) values 
    ('$firstname','$lastname','$country', '$city', '$mobile', '$email', '$password')";

    if ($con->query($reg) === TRUE) {
        echo "<script>alert('New record created successfully')</script>"; //runs js alert code inside php
        header('location: ../pages/login.html');
        
    } else {
        echo "Error: " . $reg . "<br>" . $con->error;
    }
    
}


?>