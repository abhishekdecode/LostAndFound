<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Lost Item</title>
    <style>
        
        body {
            margin: 0;
            padding: 0;
            font-family: 'Agdasima', sans-serif;
            background-color: #e8f0ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

       
        .form-container {
            width: 90%;
            max-width: 500px;
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            font-size: 28px;
            color: #00274d;
        }

       
        input[type="text"], 
        input[type="date"], 
        textarea {
            width: 90%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
            height: 80px;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: #0044cc;
            box-shadow: 0 0 8px rgba(0, 68, 204, 0.2);
        }

        .button {
            width: 90%;
            background-color: #ff6f00;
            color: white;
            border: none;
            border-radius: 25px;
            padding: 12px 0;
            font-size: 18px;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
        }

        .button:hover {
            background-color: #f44336;
            transform: scale(1.05);
        }

        .button:active {
            transform: scale(0.98);
        }

        
        @media (max-width: 600px) {
            .form-container {
                padding: 20px;
            }

            h2 {
                font-size: 24px;
            }

            input[type="text"], 
            input[type="date"], 
            textarea {
                font-size: 14px;
            }

            .button {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <form action="save_lost_item.php" method="post" class="form-container">
        <h2>Report a Lost Item</h2>
        <input type="text" name="item_name" placeholder="Item Name" required><br>
        <textarea name="description" placeholder="Description" required></textarea><br>
        <input type="date" name="date_lost" required><br>
        <input type="text" name="contact_info" placeholder="Your Contact Info" required><br>
        <button type="submit" class="button">Submit</button>
    </form>
</body>
</html>
