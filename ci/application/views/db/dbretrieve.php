<?php
$conn = new mysqli('localhost', 'root', '', 'cursus');
if ($conn->error) {
    die("Connection failed: " . $conn->connect_error);
}
$query = "SELECT * FROM ADD_STREAMING";
$result = mysqli_query($conn, $query);
if (!$result) {
    die('Query Failed' . mysqli_error($conn));
}
while ($row = mysqli_fetch_array($query)) {
?>
