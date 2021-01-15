<?php
$conn = new mysqli('localhost', 'root', '', 'cursus');
if ($conn->error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected Successfully";

if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $id = $_POST["id"];
    $pass = $_POST["password"];
    $date = $_POST['date'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $query = "INSERT INTO add_streaming(Name,ID,Password,Date,Start_Time,End_Time) VALUES('$name','$id','$pass','$date','$start','$end')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query failed" . mysqli_error($conn));
    } else {
        echo "Record Created";
    }
}
