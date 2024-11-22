<?php
require 'config.php';

use Cloudinary\Api\Upload\UploadApi;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $item_name = htmlspecialchars($_POST['item_name']);
    $description = htmlspecialchars($_POST['description']);
    
    // Check if file is uploaded
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $file_tmp_path = $_FILES['image']['tmp_name'];
        
        try {
            // Upload to Cloudinary
            $result = (new UploadApi())->upload($file_tmp_path, [
                'folder' => 'lost_and_found', // Organize files in a folder
                'public_id' => uniqid(), // Unique ID for each file
                'overwrite' => true,
            ]);
            
            // Store result details
            $image_url = $result['secure_url'];
            
            // Connect to your database
            $conn = new mysqli('localhost', 'root', '', 'database_db');
            if ($conn->connect_error) {
                die("Database connection failed: " . $conn->connect_error);
            }
            
            // Insert details into the database
            $sql = "INSERT INTO items (item_name, description, image_url) VALUES ('$item_name', '$description', '$image_url')";
            if ($conn->query($sql) === TRUE) {
                echo "Item successfully submitted!";
                echo "<p>Image URL: <a href='$image_url' target='_blank'>$image_url</a></p>";
            } else {
                echo "Error: " . $conn->error;
            }
            $conn->close();
        } catch (Exception $e) {
            echo "Image upload failed: " . $e->getMessage();
        }
    } else {
        echo "No valid file uploaded.";
    }
}
?>
