<?php
session_start();
?>
<!DOCTYPE HTML>

<html>
	<head>
<meta http-equiv="refresh" content="10; URL=http://localhost/elements/elements/items.php?text=&password=&sensor1=">
<!-------------->
<audio id="soundHandle" style="display: none;"></audio>
<script>
  soundHandle = document.getElementById('soundHandle');
  soundHandle.src = 'http:\\localhost\Pop.mp3';
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
	<body>
<form>
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
					<h2>HISTORY</h2>
					
				</header>
				<div class="container">
						
					

<!-- Table -->
<section>
<?php
echo "<h1><b>Welcome</h1> " . $_SESSION["favcolor"] . ".<br>";
$c=0;
$varname=$_SESSION["favcolor"];
$value=0;
$conn = mysqli_connect('localhost','root','' ,'trolley1');
//---------------
$sqlc="SELECT CustomerID FROM membership WHERE EMAILID= '$varname'";
if ($resultd=mysqli_query($conn,$sqlc))
  {
  while ($row=mysqli_fetch_row($resultd))
    {
    $value=$row[0];
    }
}
//-------------

//-------------------------

echo '<div class="table-wrapper">';
			
echo "<table border='1'><tr><th>OrderID</th><th>ITEMNAME</th><th>PRICE</th><th>DATE</th></tr>";
$resultb = mysqli_query($conn," SELECT * FROM history where CustomerID='$value'");
while($row=mysqli_fetch_array($resultb))
{
echo "<tr>";
echo "<td>" . $row['OrderID']. "</td>";
echo "<td>" . $row['ITEMNAME']. "</td>";
echo "<td>" . $row['COST']. "</td>";
echo "<td>" . $row['DATE']. "</td>";
$c=$c+$row['COST'];
echo "</tr>";
}
echo "TOTAL = $c";
echo "</table>";

echo'</div>';

?>
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
</form>
	</body>
</html>