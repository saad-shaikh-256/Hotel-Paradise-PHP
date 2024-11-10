<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Panel - Hotel Paradise - by shaikhsaad256@gmail.com</title>

   <link rel="shortcut icon" href="../../Assets/Common/Vectors/Logo.svg" type="image/x-icon">
   <link rel="stylesheet" href="../CSS/admin-index.css">

</head>

<body>

   <nav>
      <div class="navButtons">
         <div class="navLinks">
            <a href="admin-index.php"><img src="../../Assets/Admin Side/Vectors/Dashboard.svg" alt=""> <label>Dashboard</label></a>
            <a href="admin-rooms.php"><img src="../../Assets/Admin Side/Vectors/User.svg" alt=""> <label> Users</label></a>
            <a href="admin-reservations.php"><img src="../../Assets/Admin Side/Vectors/Booking.svg" alt=""> <label> Reservations</label></a>
            <a href="admin-customers.php"><img src="../../Assets/Admin Side/Vectors/Mail.svg" alt=""> <label> Feedback</label></a>
            <a href="../../User Side/PHP/landing-page.php"><img src="../../Assets/Admin Side/Vectors/UserSide.svg" alt=""> <label> View UserSide </label></a>
         </div>
         <a href="../../Login Signup/PHP/login-page.php"><label> Logout</label> <img src="../../Assets/Admin Side/Vectors/Logout.svg" alt=""></a>
      </div>
   </nav>
   <main>
      <div id="Stats">

         <div class="statsBox">
            <div class="statsHeading">Welcome Admin✨</div>
            <div class="statsLorem">We have made 10 Reservation Today</div>
         </div>

         <div class="statsBox1">
            <div class="statsHeading1">Total Account</div>
            <div class="statsLorem1">145</div>
         </div>

         <div class="statsBox1">
            <div class="statsHeading1">Total Feedback</div>
            <div class="statsLorem1">23</div>
         </div>

         <div class="statsBox1">
            <div class="statsHeading1">Total Booking</div>
            <div class="statsLorem1">50</div>
         </div>
      </div>
   </main>
   <script src="../JS/admin-index.js"></script>
</body>

</html>