<form action="upload.php" method="post" enctype="multipart/form-data">
    <label for="item_name">Item Name:</label>
    <input type="text" name="item_name" required><br>

    <label for="description">Description:</label>
    <textarea name="description" required></textarea><br>

    <label for="image">Upload Image:</label>
    <input type="file" name="image" accept="image/*" required><br>

    <button type="submit">Submit</button>
</form>
