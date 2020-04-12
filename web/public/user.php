<?php
$servername = "182.253.237.245:3306";
$username = "root";
$password = "rootpassword";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email, created_at FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. " - Created At: " . $row["created_at"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
