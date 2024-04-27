<!-- now should shou a message succesfully registered and shouldhave a button to go back to login page -->

<!DOCTYPE html>
<html lang="en">
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
            <h2>Successfully Registered</h2>
            <button onclick="window.location.href='studentloginform.php'">Go Back to Login</button>
        </div>
    </div>
</body>
</html>
<!-- // Path: SRMAP-Sb/afterregmssg.php
// Compare this snippet from SRMAP-Sb/RegisterStudent.php:
// ?> -->
