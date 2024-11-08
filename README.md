# Hotel Paradise Management System


## Live Demo

Check out the live demo: [Netflix Landing Page UI Clone](https://saad-shaikh-256.github.io/Netflix-Landing-Page-Clone/)

## Overview

This project is a **Hotel Paradise Management System** featuring a fully functional **Admin Panel** and **User Interface**. It is built using **HTML**, **CSS**, **JavaScript**, **PHP**, and **MySQL**. The project demonstrates user and admin functionalities for managing a hotel system effectively.

---

## Features

- **Admin Panel**:
  - Manage room bookings.
  - View and edit user information.
  - Update room statuses.

- **User Panel**:
  - Book hotel rooms.
  - View booking history.
  - Update personal information.

- **Dynamic Data**: Backend powered by PHP and MySQL ensures real-time interaction.
- **Secure Login System**: Separate login credentials for admin and users.
- **Responsive Design**: Optimized for various devices and screen sizes.

---

## Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL

---

## Installation

Follow the steps below to download, install, and configure the project on your local system.

### Prerequisites

1. **XAMPP** or any local server with PHP and MySQL support.
2. A browser to test the project.

---

### Steps to Download and Install

1. **Download the Project**
   - Download the project folder and extract it to your computer.
   - Make sure the folder contains all necessary files, including the database file (`Hotel_paradise_php.sql`).

2. **Place Files in htdocs**
   - Move the project folder to the `htdocs` directory in your XAMPP installation.
   - Example: `C:\xampp\htdocs\Hotel_Paradise`.

3. **Start XAMPP**
   - Open XAMPP Control Panel.
   - Start the **Apache** and **MySQL** modules.

4. **Set Up the Database**
   - Open your browser and go to [phpMyAdmin](http://localhost/phpmyadmin).
   - Click on the **Import** tab.
   - Select the `Hotel_paradise_php.sql` file from the project folder.
   - Click **Go** to import the database.

5. **Configure Database Connection**
   - Open the project folder and locate the file named `config.php` or similar (usually in the root or `includes` directory).
   - Update the database connection settings if necessary:
     ```php
     <?php
     $servername = "localhost";
     $username = "root"; // Default for XAMPP
     $password = ""; // Default for XAMPP
     $dbname = "Hotel_paradise_php"; // Database name
     ?>
     ```

6. **Access the Project**
   - Open your browser and type the following URL:
     ```
     http://localhost/Hotel_Paradise/
     ```

---

## Login Credentials

- **Admin**:
  - Email: `admin@gmail.com`
  - Password: `admin`

- **User**:
  - Email: `client@gmail.com`
  - Password: `client`

---

## Notes

- Ensure the `Apache` and `MySQL` modules in XAMPP are always running when accessing the project.
- You can add more user accounts through the database or by creating a registration page.

---

Feel free to reach out for any issues or suggestions!
