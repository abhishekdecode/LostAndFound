# Find & Lost Items - Lovely Professional University 🎒

A web-based application designed to help students and staff at Lovely Professional University report and track lost or found items within the campus. This platform simplifies the process of reuniting lost belongings with their rightful owners by providing a centralized and easy-to-use interface.

# Features 🌟


User Login & Admin Login:
Separate access for general users and administrators for better management and reporting.
Report Lost Items:
Users can log details of lost items and submit their contact information for potential returns.
Submit Found Items:
Users can report found items with location and description to help reunite them with owners.
Search Functionality:
Users can search and filter items based on the status (Lost/Found).
Modern User Interface:
Built with HTML, CSS, and PHP to ensure a smooth and intuitive experience.
Database Integration:
Uses MySQL to store and retrieve item data efficiently.


# Project Structure 📁


index.php – Home page with links to report lost or found items.
login.php – Login page for users and administrators.
report_item.php – Form to report lost items.
submit_item.php – Form to report found items.
admin_dashboard.php – Dashboard for admins to manage items.
Database: MySQL database named database_db with an items table.
# Tech Stack 🛠️


Frontend: HTML, CSS (Agdasima Font for modern look)
Backend: PHP (WAMP server for local hosting)
Database: MySQL
Version Control: Git and GitHub
# How to Run ⚙️


Clone the Repository:
git clone https://github.com/your-username/find_lost.git
cd find_lost
Set Up WAMP Server:

Install and launch WAMP Server.
Place the project folder (find_lost) in the www directory.
Create the Database:

Open phpMyAdmin (usually at http://localhost/phpmyadmin).
Create a new database named database_db.
Run the following SQL query to create the items table:
CREATE TABLE items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    item_name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    location VARCHAR(255) NOT NULL,
    status ENUM('Lost', 'Found') NOT NULL,
    reported_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
Configure Database Connection:

Update the database credentials in all PHP files as needed:
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'database_db';

Run the Project in Browser:

Open the browser and type:
http://localhost/find_lost/index.php

Copy code
git clone https://github.com/your-username/find_lost.git
cd find_lost
Set Up WAMP Server:

Install and launch WAMP Server.
Place the project folder (find_lost) in the www directory.
Create the Database:

Open phpMyAdmin (usually at http://localhost/phpmyadmin).
Create a new database named database_db.
Run the following SQL query to create the items table:
sql
Copy code
CREATE TABLE items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    item_name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    location VARCHAR(255) NOT NULL,
    status ENUM('Lost', 'Found') NOT NULL,
    reported_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
Configure Database Connection:

Update the database credentials in all PHP files as needed:
php
Copy code
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'database_db';
Run the Project in Browser:

Open the browser and type:
arduino
Copy code
http://localhost/find_lost/index.php

# Demo Workflow🚀


Log In: Users or admins log in via the login page.
Report Lost Items: Users report lost items with a description and contact details.
Submit Found Items: Users submit found items with location and item details.
Admin Dashboard: Admins view and manage all lost/found reports.

# Use Case 🏫


This project is specifically built to cater to Lovely Professional University but can be adapted for any institution or community with a need for a lost-and-found portal.

# Contributing🤝 


Contributions are welcome! Feel free to open issues or submit pull requests to improve the functionality and design.

# License 📄


This project is licensed under the MIT License - see the LICENSE file for details.

# Contact 📧


For any inquiries or suggestions, please reach out to:

Email: support@lpu.in
Phone: +91-1800-123-4567

Designed and Developed by Abhishek Chaudhary

