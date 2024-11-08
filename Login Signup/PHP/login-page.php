<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Page - Hotel Paradise - by shaikhsaad256@gmail.com</title>

   <link rel="shortcut icon" href="../../Assets/Common/Vectors/Logo.svg" type="image/x-icon">
   <link rel="stylesheet" href="../CSS/login-signup.css">

</head>

<body>

   <main>
      <div class="logo"><img src="../../Assets/Common/Vectors/Logo.svg" alt="logo"></div>
      <div id="heading">
         <div id="mainHeading">Login</div>
         <div id="subHeading">Login into your account</div>
      </div>
      
      <form action="">

         <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter Email Address" value="client@gmail.com" required>
         </div>

         <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter Your Password" value="client" required>
         </div>

         <button type="submit">Login</button>
      </form>

      <a href="signup-page.php">Don't have an account <span>Sign-Up!!</span></a>

   </main>

   <script src="../JS/login-signup.js"></script>
</body>

</html>