<!DOCTYPE html>
<html lang="en">
<?php
include 'database.php';
?>
<head>
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
      <h1>Student Register</h1> 
      <form action="registerstudent.php" method="POST">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username">
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="pass" name="pass">
        </div>
        <div class="form-group">
          <label for="password">Registration Number:</label>
          <input type="text" id="regid" name="regid">
        </div>
        <a href="afterregmssg.php"><button class="new-complaint">Register</button></a> 
      </form>
    </div>
  </div>
  <script >
    //check if the password is 8 characters long and has atleast 1 number
    // check username is not empty
    // check regid is not empty
    // check if the regid is 9 characters long
    // if all the above conditions are satisfied then only submit the form
    const form = document.querySelector('form');
    form.addEventListener('submit', (e) => {
      const username = document.getElementById('username').value;
      const password = document.getElementById('pass').value;
      const regid = document.getElementById('regid').value;
      if (username === '' || password === '' || regid === '') {
        e.preventDefault();
        alert('Please fill all the fields');
      }
      if (regid.length !== 9) {
        e.preventDefault();
        alert('Registration number should be 9 characters long');
      }
      if (password.length < 8) {
        e.preventDefault();
        alert('Password should be atleast 8 characters long');
      }
      if (!/\d/.test(password)) {
        e.preventDefault();
        alert('Password should contain atleast 1 number');
      }
    });
  </script>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['pass'];
  $regid = $_POST['regid'];


    if(empty($username) || empty($password) || empty($regid)){
        echo "Please fill all the fields";
    }
    else{
      $sql = "INSERT INTO `student details` (username, password, adno) VALUES ('$username', '$password', '$regid')";
      mysqli_query($conn, $sql);
      header("Location: afterregmssg.php");
      echo "New record created successfully";
    }



  }
?>
