<?php
session_start();
?>
<!DOCTYPE HTML>

<html>
	<head>
<!-------------->
<script>

    function myFunction() {

        var x;

        var r = confirm("Paid!!!!");

        if (r == true) {
         window.location="http://localhost/elements/elements/index.html";

        }

        else {

            x = "You pressed Cancel!";

        }

        document.getElementById("demo").innerHTML = x;

    }
</script>

		<title> </title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.slidertron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body id="target">
  <div id="content">


		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1>Welcome</h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
					<!--	<li>
							<a href="" class="icon fa-angle-down">Layouts</a>
							
						</li>
						<li><a href="elements.html">Elements</a></li> -->
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper style1">
				<header class="major">
					<h2>PAYMENT&nbsp&nbsp|&nbsp&nbsp<a href="history.php">HISTORY</a></h2>
					
				</header>
				<div class="container">
						
					

<!-- Table -->
<section>
<?php
$ordervalue=$_SESSION["orderID"];
$text1=$_GET["text"];
echo "<meta http-equiv='refresh' content='10'; URL=http://localhost/elements/elements/items.php?text=$text1&password=&sensor1=>";

echo "<h1><b>Welcome</h1> " . $_SESSION["favcolor"] . ".<br>";
$ordervalue=0;
$value12=0;
$varname=0;
$c=0;
$itemname=NULL;
$cost=0;
$valuec=0;
$valueo=0;
$c2=0;
$orderID=0;
$conn = mysqli_connect('localhost','root','' ,'trolley1');
//--------------------------
$sensor1=$_GET["sensor1"];
echo $_GET["sensor1"];
if($sensor1!=NULL)
{
$sqlmatch = "SELECT * FROM productdetails";
if(mysqli_query($conn, $sqlmatch))
	{
$count=1;

$resulta = $conn->query($sqlmatch);
if ($resulta->num_rows > 0) 
	{
    // output data of each row
    while($rowa = $resulta->fetch_assoc()) {
        $itemname=$rowa["ITEMNAME"];
        $cost=$rowa["COST"];
if($sensor1!=$rowa["BARCODEID"])
{
}
else
  {

$sqle="SELECT * FROM latestlogin";
if ($resulte=mysqli_query($conn,$sqle))
  {
  while ($row=mysqli_fetch_row($resulte))
    {
 $valuec=$row[0];
$valueo=$row[1];
    }

  }
$countdel=0;
$valuedel=0;
//---------------------------
$sqlz = "SELECT * FROM productview";
if(mysqli_query($conn, $sqlz))
	{

$resultz = $conn->query($sqlz);
if ($resultz->num_rows > 0) 
	{mysqli_data_seek($resultz,0);
    while($rowz = $resultz->fetch_assoc()) 
	{
        $itemnamez=$rowz["ITEMNAME"];
if($itemname==$itemnamez)
{
$sqly = "DELETE FROM productview WHERE ITEMNAME='$itemname'";
mysqli_query($conn, $sqly);
$sqlq = "DELETE FROM history WHERE OrderID='$valueo' AND ITEMNAME='$itemname'";
mysqli_query($conn, $sqlq);

}
	}
	}
	}
/* if($countdel==1)
	{
$sqly = "DELETE FROM productview WHERE ITEMNAME='$itemname'";
mysqli_query($conn, $sqly);


	}
elseif($countdel==0)
	{
//-----------------*/
$today = date("d/m/Y");
$sql1 = "INSERT INTO history(CustomerID,OrderID,BARCODEID,ITEMNAME,COST,DATE) VALUES ('$valuec','$valueo','$sensor1','$itemname','$cost','$today')";
mysqli_query($conn, $sql1);
$sqlstore = "INSERT INTO productview(BARCODEID,ITEMNAME,COST) VALUES ('$sensor1','$itemname','$cost')";
mysqli_query($conn, $sqlstore);
break;
	
}
}
}
}
}
echo '<div class="table-wrapper">';
//--------------------------
//----------------------------------
echo "<table border='1'><tr><th>ID</th><th>ITEMNAME</th><th>PRICE</th></tr>";
$resultb = mysqli_query($conn," SELECT * FROM productview");

$hello="HELLO";
while($row=mysqli_fetch_array($resultb))
{echo "<tr>";
echo " <td>" . $row['BARCODEID']. "</td>";
echo "<td>" . $row['ITEMNAME']. "</td>";
echo "<td>" . $row['COST']. "</td>";	
$c=$c+$row['COST'];
echo "</tr>";
}
echo "TOTAL = $c";
echo "</table>";

echo'</div>';



?>		
<div style="margin-left:40%;margin-top:5%;">
<div ><button onclick="myFunction()"  style="vertical-align:middle; display: inline-block;
  border-radius: 4px;
  background-color:#5dade2;
  border: none;
  color: white;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;">PAY</button></div>
					<!--  <h4>Alternate</h4>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>ID</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Something</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Nothing</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Something</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Nothing</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Something</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div> -->
								</section>

							
			
		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
					<li><a href="#" class="icon fa-envelope"><span class="label">Envelope</span></a></li>
				</ul>
				<ul class="menu">
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Terms of Use</a></li>
					<li><a href="#">Privacy</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				
			</footer>
	</body>
</html>