<?php
  // Connect to the database
  $db = mysqli_connect('localhost','username','password','database_name');

  // Check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  // Escape user inputs for security
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $email = mysqli_real_escape_string($db, $_POST['email']);

  // Insert user data into database
  $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
  if (!mysqli_query($db, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
  }

  // Close connection
  mysqli_close($db);
?>