
 <?php

// Create connection
 $conn = mysqli_connect('localhost','root','' ,'trolley1');
// Check connection

if($conn === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

 

// Escape user inputs for security

$namea = $_REQUEST['name'];
$addressa = $_REQUEST['address'];
$phonenumbera =  $_REQUEST['phoneno'];
 $alternatea = $_REQUEST['alternate'];
$emaila = $_REQUEST['email'];
$passworda = $_REQUEST['password'];
// attempt insert query execution

$sql = "INSERT INTO membership (NAME, ADDRESS, PHNO, ALTPHNO, EMAILID, PASSWORD) VALUES ('$namea', '$addressa', '$phonenumbera', '$alternatea', '$emaila','$passworda')";

if(mysqli_query($conn, $sql)){
header('Location: login.html');
exit;
    echo "Records added successfully.";

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

}

 

// close connection

 

// close connection

mysqli_close($conn);

?>