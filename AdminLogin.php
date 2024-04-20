<!DOCTYPE html>
<html lang="en">
<?php
// Path: SRMAP-Sb/AdminLogin.php
// Compare this snippet from SRMAP-Sb/adminlist.php:
include 'database.php';
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Login</title>
  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: Arial, sans-serif;
    }

    .background-image {
      background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2GUOHa8e3z-IlEM-e9PeAHgzPCNdjfVluVA&usqp=CAU);
      background-size: cover;
      background-position: center;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-container {
      background-color: rgba(255, 255, 255, 0.8);
      padding: 20px;
      border-radius: 5px;
      text-align: center;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      font-weight: bold;
    }

    input {
      padding: 8px;
      width: 200px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    button {
      padding: 10px 20px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="background-image">
    <div class="login-container">
      <a href="select.php"><h2>Admin Login</h2></a>
      <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" >
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" >
        </div>
          <!-- <a href="select.php"> -->
            <button type="submit">Login</button>
          <!-- </a> -->
      </form>
    </div>
  </div>
      <script src="script.js"></script>
      <!-- <?php

      // if($_SERVER["REQUEST_METHOD"] == )
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $db_servername = "localhost";
//     $db_user = "root";
//     $db_password = ""; // Your database password
//     $db_name = "login_credentials"; // Corrected database name
    
//     // Create connection
//     $conn = new mysqli($db_servername, $db_user, $db_password, $db_name);

//     // Check connection
//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }

//     // Retrieve username and password from POST data
//     $username = $_POST['username'];
//     $password = $_POST['password'];

//     // Query to check if the provided credentials exist
//     $sql = "SELECT * FROM login_credentials WHERE username = ? AND password = ?";
//     $stmt = $conn->prepare($sql);
//     $stmt->bind_param("ss", $username, $password);
//     $stmt->execute();
//     $result = $stmt->get_result();

//     // If a row is found, credentials are correct
//     if ($result->num_rows == 1) {
//         // Redirect to select.php
//         header("Location: select.php");
//         exit();
//     } else {
//         echo "Incorrect username or password";
//     }

//     $stmt->close();
//     $conn->close();
// }
?> -->


</body>
</html>