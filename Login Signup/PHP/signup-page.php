<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Signup Page - Hotel Paradise - by shaikhsaad256@gmail.com</title>

   <link rel="shortcut icon" href="../../Assets/Common/Vectors/Logo.svg" type="image/x-icon">
   <link rel="stylesheet" href="../CSS/login-signup.css">

</head>

<body>

   <main>

      <div id="heading">
         <div id="mainHeading">Registration</div>
         <div id="subHeading">Lets create an Account</div>
      </div>

      <form action="">

         <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter Email Address" value="client@gmail.com" required>
         </div>

         <div>
            <label for="phone">Phone No</label>
            <input type="tel" name="phone" id="phone" placeholder="Enter Phone No" value="0000000000" required>
         </div>

         <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter Your Password" value="client" required>
         </div>

         <button type="submit">Create Account</button>
      </form>

      <a href="login-page.php">Already have an account <span>Sign-In!!</span></a>

   </main>

   <script src="../JS/login-signup.js"></script>
</body>

</html>