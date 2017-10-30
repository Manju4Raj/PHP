<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  

$sql = "SELECT Id, Name, Usn,Braanch FROM student_info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["Id"]. " - Name: " . $row["Name"]."  Usn: " . $row["Usn"]."Braanch:" . $row["Braanch"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>