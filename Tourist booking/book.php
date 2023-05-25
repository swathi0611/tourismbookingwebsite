<?php
include_once 'config.php';
echo "<table border=2px align='center'>";
echo "<tr ><th colspan='2'>Your Booking and Payment Is Successful!</th></tr>";
echo "<tr><th>Booking requirements</th><th>Given Details</th></tr><br>";
$name = $_POST["Full_Name"]." ".$_POST["M_Name"]." ".$_POST["Last_Name"];
echo "<tr><th><b>Name</b></th>" ."<td>$name</td></tr><br>";
$nop = $_POST["pas"];
echo "<b><tr><th>Number of Passengers </b></th>"."<td>$nop</td></tr><br>";
$gr = $_POST["gdr"];
echo "<tr><th><b>Gender</b></th>". "<td>$gr</td></tr><br>";
$ad = $_POST["add"];
echo "<tr><th><b>Address</b></th>"."<td>$ad</td></tr><br>";
$nbr = $_POST["Contact"];
echo "<tr><th><b>Number</b></th>"."<td>$nbr</td></tr><br>";
$eml = $_POST["EmailID"];
echo "<tr><th><b>E-mail ID</b></th>". "<td>$eml</td></tr><br>";
$dep = $_POST["From"];
echo "<tr><th><b>Departure From </b></th>". "<td>$dep</td></tr><br>";
$arr = $_POST["To"];
echo "<tr><th><b>Arrival At </b></th>". "<td>$arr</td></tr><br>";
$mot = "Airways";
echo "<tr><th><b>Mode Of Travel</b></th>". "<td>$mot</td></tr><br>";
$pot = $_POST["plan"];
echo "<tr><th><b>Plan Of Travel</b></th>"."<td>$pot</td></tr><br>";
echo"<tr><th colspan='2'>Happy journey</th></tr>";
$sql1="INSERT INTO passengers (Name, Gender, Passengers, Mobilenumber, Departure, Destination, Mode, Plan) VALUES( '$name','$gr', '$nop', '$nbr', '$dep', '$arr', '$mot', '$pot' )";
mysqli_query($conn, $sql1);

?>
    