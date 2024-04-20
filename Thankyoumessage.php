<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thank You Message</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      background-image: url("https://media.getmyuni.com/azure/college-image/big/srm-university-amaravati.jpg");
      background-size: cover; 
      background-position: center; 
    }
    .container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 400px; 
      height: 200px; 
      padding: 20px; 
      background-color: rgba(255, 255, 255, 0.8); 
      border-radius: 10px; 
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); 
    }
    .container h1 {
      font-size: 46px; 
    }
  </style>
</head>
<body>
  <div class="container" align="center">
    <h1>Thank You!</h1>
    <!-- <button onclick="window.addAnotherComplaint();"></button> -->
    <a href="SuggestionForm.php"><button class="addAnotherComplaint">Add another Complaint</button></a>
    <a href="index.php"><button class="logout">Log out</button></a> 
 
    <!-- <button onclick="window.logout();">Log Out</button> -->
  </div>
</body>
</html>
