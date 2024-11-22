<?php
session_start();
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Agdasima:wght@400;700&display=swap" rel="stylesheet">
  <title>LPU - Find and Lost Items</title>
  <style>
    body {
      margin: 0;
      font-family: "Agdasima", sans-serif;
      background-color: #e8f0ff;
    }
  .hero{
    height: 100vh;
    width: 100%;
    background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(lpubanner.jpg);
    background-size: cover;
    background-position: center;
  }
  nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 40px;
    padding-left: 10%;
    padding-right: 10%;
  }
  
.logo img {
  width: 100px;  
  height: auto;  
  max-width: 100%; 
  display: block; 
}
  nav ul li{
    list-style-type: none;
    display: inline-block;
    padding: 10px 20px;
  }
  nav ul li a{
    color: white;
    text-decoration: none;
    font-weight: bold;
  }
  nav ul li a:hover{
    color: #ea1538;
    transition: .3s;
  }
  

header {
  position: absolute;
  top: 50%;  
  left: 50%;  
  transform: translate(-50%, -50%);  
  text-align: center;
  color: white;
  z-index: 1;  
}

header h1 {
  font-size: 55px;
  margin: 0;
  text-shadow: 3px 3px 12px rgba(0, 0, 0, 0.8);
}

header p {
  font-size: 20px;
  margin-top: 10px;
  color: #e0e0e0;
}

  
    .container {
      display: flex;
      justify-content: space-around;
      margin: 60px 0;
    }

    .card {
      background-color: #fff;
      border-radius: 15px;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
      width: 30%;
      height: 300px;
      padding: 30px;
      text-align: center;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    }

    .button {
      background-color: #ff6f00;
      color: white;
      padding: 12px 24px;
      border: none;
      border-radius: 25px;
      cursor: pointer;
      font-size: 16px;
      transition: background 0.5s, transform 0.3s;
    }

    .button:hover {
      background-color: #f44336;
      transform: scale(1.1);
      border: 1px solid black;
    }

    .contact {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 80%;
      margin: 0 auto;
      padding: 20px;
      text-align: center;
    }

    footer {
      text-align: center;
      padding: 10px;
      margin: 20px;
      box-sizing: border-box;
      
      border-radius: 10px;
      background-color: #00274d;
      color: white;
    }
  </style>
</head>
<body>
<div class="hero">
  <nav>
    <a class="logo" href="index.php"><img src="seal.svg" alt="LPU Logo"></a>
    
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="admin_login.php">ADMIN DASHBOARD</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
   
  </nav>
  </div>

  <header>
    <h1>Lost & Found Portal<br>
       Lovely Professional University</h1>
    <p>Your gateway to reconnect with your lost belongings!</p>
  </header>

  <section class="container" id="main">
    <div class="card">
      <h2>Lost Something?</h2>
      <p>Report lost items here and let us help you find them.</p>
      <form action="report_item.php" method="post">
        <button type="submit" class="button">Report Now</button>
      </form>
    </div>
    <div class="card">
      <h2>Found Something?</h2>
      <p>Submit details of found items to help others.</p>
      <form action="submit_item.php" method="post">
        <button type="submit" class="button">Submit Item</button>
      </form>
    </div>
  </section>

  <section class="contact" id="contact">
    <h2>Contact Us</h2>
    <p>
      <strong>Email:</strong> support@lpu.in <br>
      <strong>Phone:</strong> +91-1800-123-4567 <br>
      <strong>Address:</strong> Lovely Professional University, Phagwara, Punjab, India
    </p>
  </section>

  <footer>
    <p>&copy; 2024 Lovely Professional University. All Rights Reserved.</p> <br>
    <p>Designed & Developed by Abhay Singh </p>
  </footer>

</body>
</html>
