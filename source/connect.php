
<?php 
$mysqli = mysqli_connect("localhost", "root", "ndvem92", "db1");

$name = $_POST ['name'];
$add = $_POST ['address'];
$tel = $_POST ['telephone'];
$region = $_POST ['region'];
$sch_level = $_POST['sch_level'];
$Ownership = $_POST['ownership'];
if (empty($name) && empty($add) && empty($tel) && empty($region) && empty($sch_level) && empty($Ownership))
echo "please complete the fields";
else

if (mysqli_connect_errno()) {

echo "Connection failed";}
else {
$sql = "INSERT INTO sch (`name`) VALUES ('$name')";
$res = mysqli_query($mysqli, $sql);
$sql = "INSERT INTO sch (`address`) VALUES ('$add')";
$res = mysqli_query($mysqli, $sql);
$sql = "INSERT INTO sch (`telephone`) VALUES ('$tel')";
$res = mysqli_query($mysqli, $sql);
$sql = "INSERT INTO sch (`sch_level`) VALUES ('$sch_level')";
$res = mysqli_query($mysqli, $sql);
$sql = "INSERT INTO sch (`ownership`) VALUES ('$Ownership')";
$res = mysqli_query($mysqli, $sql);
$sql = "INSERT INTO sch (`region`) VALUES ('$region')";
$res = mysqli_query($mysqli, $sql);}
if ($res === TRUE) {
echo "A record has been inserted.";
} else {
printf("Could not insert record: %s\n", mysqli_error($mysqli));
}
mysqli_close($mysqli);
?>
		<html>   <!--html tag-->
 <head><title>Wiki School</title> <!--title of the page-->
            </head>

<body> <!--body of page starts from here-->

<h2>Search</h2>

<form name="db1" method="POST" action="connect.php"> <!--form submission type is POST to a php script called connect.php-->
<p>Name of school: <input type="text" name="name" /></p>
 <p>Address:<input type= "text" name="address"/></p>
 <p>telephone:<input type= "text" name="telephone"/></p>
 <p>Region: <input type= "Region" name="region"/></p>
 <p>Ownership: <input type= "text" name="ownership"/></p>
 <p>Sch_Level: <input type= "text" name="sch_level"/></p>


	<input type="submit" name="search" value="Submit" /> <!--the search button-->
</form>

</body>
</html>

		
