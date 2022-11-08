<?php
//$mysqli = new mysqli("example.com", "user", "password", "database");
//$result = $mysqli->query("SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL");
//$row = $result->fetch_assoc();
//echo htmlentities($row['_message']);

$conn = mysqli_connect("localhost", "root", "111111", "opentutorials");
$sql = "INSERT INTO topic(title, description, created) VALUE('MySQL', 'MYSQL is ...', NOW())";
$result = mysqli_query($conn, $sql);
if($result === false){
    echo mysqli_error($conn);
}
?>