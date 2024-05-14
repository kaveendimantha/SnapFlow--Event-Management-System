<?php include ('header.php'); 
  session_start();
  ?>

<html>

<head>
  <title>Add Admin</title>
  <link rel="stylesheet" type="text/css" href="../css/ADD Admin.css">
</head>

<body>
  <div class="container">
    <form action="Insert.php" method="POST">

        <h2>Add New Admin</h2>

      <div class="form-group">
          <label for="first-name">First Name:</label>
          <input type="text" id="firstname" name="firstname" required>

          <label for="last-name">Last Name:</label>
          <input type="text" id="lastname" name="lastname" required>

          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required>

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>

          <label for="address">Address:</label>
          <textarea id="address" name="address" required></textarea>

          <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>

          <label for="dob">Date of Birth:</label>
          <input type="date" id="dob" name="dob" required>

          <label for="contact">Contact Number:</label>
          <input type="tel" id="contact" name="contact" required>

          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>

          <label for="confirm-password">Confirm Password:</label>
          <input type="password" id="confirmpassword" name="confirmpassword" required>

          <input type="checkbox" name="tems" id="tems"> I agree to the terms and condition. 
      
          <input type="submit"  value="ADD" class="button">
      </div><!-- form-group -->
    </form>
  </div><!-- container -->
</body>

<?php include ('footer.php'); ?>
</html>