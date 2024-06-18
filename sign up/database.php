<?php
$servername="localhost";
$username="karthik";
$password="52892";
$database="karthikdb"
$conn=new mysqli($servername,$username,$password,$database);

if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);

}
$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["id"] . " - Name: " . $row["name"] . ", Email: " . $row["email"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>

