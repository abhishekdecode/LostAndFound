<?php
session_start();
include 'db.php'; 

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

function deleteItem($id) {
    global $conn; 

    
    $stmt = $conn->prepare("DELETE FROM lost_items WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

   
    $conn->query("CREATE TEMPORARY TABLE temp_lost_items AS SELECT * FROM lost_items ORDER BY id");
    $conn->query("SET @row_number = 0");
    $conn->query("UPDATE temp_lost_items SET id = (@row_number := @row_number + 1)");
    $conn->query("DELETE FROM lost_items");
    $conn->query("INSERT INTO lost_items (id, item_name, description, date_lost, contact_info) SELECT id, item_name, description, date_lost, contact_info FROM temp_lost_items");
    $conn->query("DROP TEMPORARY TABLE temp_lost_items");
}

if (isset($_GET['delete_id'])) {
    deleteItem($_GET['delete_id']);
}

$lost_items = $conn->query("SELECT * FROM lost_items");

$found_items = $conn->query("SELECT * FROM found_items");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            display: inline-block;
            margin: 10px 0;
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }

        .delete-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        .delete-btn:hover {
            background-color: #c82333;
        }

        .logout {
            margin-bottom: 20px;
            background-color: #007bff;
            color: white;
            padding: 10px;
            text-decoration: none;
            border-radius: 5px;
        }

        .logout:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['admin']; ?>!</h2>
    <a class="logout" href="logout.php">Logout</a>

    <h3>Lost Items</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Item Name</th>
            <th>Description</th>
            <th>Date Lost</th>
            <th>Contact Info</th>
            <th>Action</th>
        </tr>
        <?php while ($row = $lost_items->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['item_name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['date_lost']; ?></td>
                <td><?php echo $row['contact_info']; ?></td>
                <td>
                    <a class="delete-btn" href="?delete_id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>

    <h3>Found Items</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Item Name</th>
            <th>Description</th>
            <th>Date Found</th>
            <th>Contact Info</th>
        </tr>
        <?php while ($row = $found_items->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['item_name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['date_found']; ?></td>
                <td><?php echo $row['contact_info']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
