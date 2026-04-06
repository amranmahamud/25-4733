<?php
include 'db.php';

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "First Name: " . $row['first_name'] . "<br>";
    echo "Last Name: " . $row['last_name'] . "<br>";
    echo "Email: " . $row['email'] . "<br><br>";
}
?>
