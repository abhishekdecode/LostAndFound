<?php
include 'db.php';

$item_name = $_POST['item_name'];
$description = $_POST['description'];
$date_found = $_POST['date_found'];
$contact_info = $_POST['contact_info'];

$sql = "INSERT INTO found_items(item_name,description, date_found, contact_info) 
        VALUES ('$item_name', '$description', '$date_found', '$contact_info')";

if ($conn->query($sql) === TRUE) {
    echo "Found item submitted successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
