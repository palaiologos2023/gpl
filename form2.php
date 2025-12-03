
<?php
include "config.php";

$kodikos =$_POST["kodikos"];
$onoma = $_POST["onoma"];
$eponymo =$_POST["eponymo"];

print $kodikos ;
echo '<br>';
 echo $onoma;
 echo "  ";
 echo $eponymo;
 echo '<br>';
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
else 
	
	{
		print "ok connection <br> ";
		
	}
print "<br>";	
 $q1 = "INSERT INTO mathitis (kodikos,onoma,eponymo) VALUES ('$kodikos','$onoma','$eponymo')";
if (mysqli_query($conn, $q1)) {
     echo "New record created successfully";
} 
else
{
	echo "Δεν καταχωρήθηκε - Ισως ο κωδικός υπάρχει ";
}
echo  "&&&&&  ";
mysqli_close($conn);
  ?>   

