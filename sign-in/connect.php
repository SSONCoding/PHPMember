<?php
$servername = "localhost";
$username = "user21600";
$password = "pwd21600";
$dbname = "db21600";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("DB연결 실패: " . $conn->connect_error);
}
//echo "DB연결 성공";
?>