<?php
// Start the session
session_start();
?>
 <?php

// Create connection
 $conn = mysqli_connect('localhost','root','' ,'trolley1');
// Check connection

if($conn == false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

 

// Escape user inputs for security

$namea = $_REQUEST['name'];
$passworda = $_REQUEST['password'];
$emailidvar=0;
$value12=0;
// attempt insert query execution
if($namea=='admin' && $passworda=='555')
{
header('Location: index.html');
}

$sql = "SELECT * FROM membership";
if(mysqli_query($conn, $sql)){

$result = $conn->query($sql);
$count=1;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "EMAILID: " . $row["EMAILID"]. " - PASSWORD: " . $row["PASSWORD"]. "<br>";
if($namea!=$row["EMAILID"]||$passworda!=$row["PASSWORD"])
{
}
else
  {	$count=0;
         
	 break;
  }
} 
if($count==1)
	{
header('Location: login.html');
exit;
	}
else
	{
$sqltrunc="TRUNCATE table productview";
mysqli_query($conn, $sqltrunc);
$randomvalue=mt_rand(10,100);
$_SESSION["orderID"] =$randomvalue;
$_SESSION["favcolor"] =$row["EMAILID"];
//------------------------

$emailidvar=$row["EMAILID"];
$sqlc="SELECT CustomerID FROM membership WHERE EMAILID= '$emailidvar'";
if ($resultd=mysqli_query($conn,$sqlc))
  {mysqli_data_seek($resultd,1);
  
  while ($row=mysqli_fetch_row($resultd))
    {
    $value12=$row[0];
    }
}
$sql1 = "INSERT INTO latestlogin(CID,OID) VALUES ('$value12','$randomvalue')";
mysqli_query($conn, $sql1);
//---------------------
header('Location: items.php?text=&password=&sensor1=');
exit;
	}
}

else {
    echo "0 results";
}


} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

}


 

// close connection

 

// close connection

mysqli_close($conn);

?>