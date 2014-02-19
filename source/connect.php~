
<?php 
$mysqli = mysqli_connect(“localhost”, “root”, “ndvem92”, “db1”);

$_POST ['name'];
$_POST ['address'];
$_POST ['telephone'];
$_POST ['region'];

if (mysqli_connect_errno()) {

printf(“Connect failed: %s\n”, mysqli_connect_error());
else {
$sql = “INSERT INTO sch (name) VALUES (‘"$_POST['name']"’)”;
$res = mysqli_query($mysqli, $sql);
$sql = “INSERT INTO sch (address) VALUES (‘"$_POST['address']"’)”;
$res = mysqli_query($mysqli, $sql);
$sql = “INSERT INTO sch (telephone) VALUES (‘"$_POST['telephone']"’)”;
$res = mysqli_query($mysqli, $sql);
if ($res === TRUE) {
echo “A record has been inserted.”;
} else {
printf(“Could not insert record: %s\n”, mysqli_error($mysqli));
}
mysqli_close($mysqli);
?>
		<html>   <!--html tag-->
 <head><title>Wiki School</title> <!--title of the page-->
            </head>

<body> <!--body of page starts from here-->

<h2>Search</h2>
<form name="db1" method="post" action="insert.php"> <!--form submission type is POST to a php script called findme.php-->
insert: <input type="text" name="name" />
 <input type= "text" name="address"/>
 <input type= "text" name="telephone"/>
 <input type= "Region" name="region"/>


	<input type="submit" name="search" value="Search" /> <!--the search button-->
</form>

</body>
</html>