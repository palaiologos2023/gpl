
<?php
function displayResults($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Κωδικός : " . $row["kodikos"] . " - Ονομά  " . $row["onoma"] . " - Επώνυμο  " . $row["eponymo"] . "<br>";
    }
}

function fetchData($conn, $sql) {
    $result = mysqli_query($conn, $sql);  // Execute the query
    
    if ($result) {
        return $result;  // Return the result set if data exists
    } else {
        return false;  // Return false if no data found or query failed
    }
}
include "config.php";

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
$sql = "SELECT kodikos, onoma, eponymo FROM mathitis";  
 $result = fetchData($conn, $sql);  // Fetch data from the database
if ($result) {
    displayResults($result);  // Display the fetched results
} else {
    echo "0 results";  // If no results, show this message
}

mysqli_close($conn);  // Close the database connection


  ?>   

