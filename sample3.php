/*<?php
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

$sql = "INSERT INTO student_info (Id,Name,Usn,Braanch)
VALUES (121, 'ajoy','1pe16cs412','ajoy@example.com')";
$sql .= "INSERT INTO student_info (Id,Name,Usn,Braanch)
VALUES (122, 'smith','1pe16cs413','smith@example.com')";

if ($conn->multi_query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>*/

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

$sql = "INSERT INTO student_info (Id,Name,Usn,Braanch)
VALUES (111, 'Doe', '1pe16cs412','doe@example.com');";
$sql .= "INSERT INTO student_info (Id,Name,Usn,Braanch)
VALUES (222, 'Moe', '1pe16cs412','moe@example.com');";
$sql .= "INSERT INTO student_info (Id,Name,Usn,Braanch)
VALUES (333, 'Dooley','1pe16cs412', 'Dooley@example.com')";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>