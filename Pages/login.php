<!-- This is an HTML code for a login form that allows users to enter their username and password -->

<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <!-- Heading to indicate that this is the login page -->
  <h1>Login</h1>
  <!-- Form to collect user input and send it to the server using the POST method -->
  <form action="../Handling/login-action.php" method="post">
    <!-- Label for the username input field -->
    <label for="username">Username:</label>
    <!-- Input field for the username -->
    <input type="text" id="username" name="username"><br>

    <!-- Label for the password input field -->
    <label for="password">Password:</label>
    <!-- Input field for the password -->
    <input type="password" id="password" name="password"><br>

    <!-- Submit button to send the user input to the server -->
    <input type="submit" value="Login">
  </form>
</body>

</html>