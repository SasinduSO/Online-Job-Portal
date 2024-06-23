
<?php

    session_start();

    $db_host = 'localhost';
    $db_user = 'root';
    $db_pwd = '';
    $db_name = 'job_portal';
    
    
    //create connection
    $conn = new mysqli($db_host, $db_user, $db_pwd, $db_name);

    $email= $_POST['email'];
    $password = $_POST['pwd'];
    
    //select data from one or more tables
    $sql = "select * from userdetails where email = '$email' && password = '$password'";
    $result = $conn->query($sql);
    
    //check if a single user exist (checks if there are more than zero rows returned)
    if (mysqli_num_rows($result) == 1) {
        // output data of each row
        // header("location: home")

        //'json_encode' is a function that returns a string containing the JSON representation of the value(result).
        //(used to encode a value from json format)
        //for storing or transporting data
        exit(json_encode(true)); 
       
      } else {
        exit(json_encode(false));
      }
      header('location: ../pages/apply.html');
     
    $conn->close();

?>


