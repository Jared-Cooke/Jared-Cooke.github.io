<?php
// Start a session
session_start();

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the submitted username and password
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Perform server-side validation, sanitization, and authentication
  // NOTE: This is a simplified example and should NOT be used in a production environment without proper security measures in place.

  // Validate and sanitize input
  $username = filter_var($username, FILTER_SANITIZE_STRING);
  $password = filter_var($password, FILTER_SANITIZE_STRING);

  // Perform authentication against a single username and password
  if ($username === "admin" && $password === "mypassword") {
    // Set a session variable to indicate successful login
    $_SESSION["loggedin"] = true;
    // Redirect to the admin dashboard or protected page
    header("Location: admin_dashboard.php");
    exit;
  } else {
    // Display an error message for invalid credentials
    echo "Invalid username or password.";
  }
}
?>



<!DOCTYPE html>
<!--  -->

<html lang="en" dir="ltr">
<link rel="stylesheet" href="/css/style.css">
<meta charset="utf-8">
<meta name="description:" content="Jared Cooke's Profile">
<meta name="author:" content="Jared Cooke">
<!-- Font link -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;700&display=swap" rel="stylesheet">
    <title>Jared Cooke</title>
  <body>

    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="portfolio.html">Portfolio</a></li>
      <li><a href="admin.php">Admin</a></li>
    </ul>

    </div>
  <div class="parcont">

    <div class="titlebox">
      <h1 class="heading1">Admin Login</h1>
      <br>


    <h2 class="heading2">Authorised Access Only</h2>
    </div>
<br>
<br>

<form method="post" action="admin.php">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username" required><br>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required><br>
  <input type="submit" value="Login">
</form>

</div>
<!--{ParCont /div}-->

</body>

</html>
