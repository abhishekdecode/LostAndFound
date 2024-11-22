<?php
include 'db.php';

$item_name = $_POST['item_name'];
$description = $_POST['description'];
$date_lost = $_POST['date_lost'];
$contact_info = $_POST['contact_info'];

$sql = "INSERT INTO lost_items(item_name,description, date_lost, contact_info) 
        VALUES ('$item_name', '$description', '$date_lost', '$contact_info')";

if ($conn->query($sql) === TRUE) {
    echo "Lost item reported successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
