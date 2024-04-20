<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Suggestion Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #5d5c3c;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .container {
      max-width: 1200px;
      max-height: 1200px;
      width: 600px;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h2 {
      text-align: center;
    }
    label {
      display: block;
      margin-bottom: 5px;
    }
    input[type="text"], textarea, select {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    textarea {
      height: 150px;
    }
    input[type="submit"] {
      background-color: #746c54;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }
    .button {
  display: inline-block;
  padding: 10px 20px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  /* box-shadow: 0 9px #999; */
}
  </style>
</head>
<body>

<div class="container">
  <h2>Suggestion Form</h2>
  <form action="#" method="post">
    
    <label>Category:</label>
    <select type="text" name="suggestion category" id="suggestion category" required>  
      <option value="itkm">ITKM</option> 
      <option value="clm">CLM</option> 
      <option value="crcs">CRCS</option> 
      <option value="irhs">IR & HS</option>  
      <option value="academic">Academic Affairs</option>
    </select>

    <label for="subject">Sub Category:</label>
    <input type="text" id="subject" name="subject" required>

    <label for="message">Description:</label>
    <textarea id="message" name="message" required></textarea>

    <a href="Thankyoumessage.php" class="button">SUBMIT</a>    <!-- <a href="Thank you message.php"><input type="submit" value="Submit"></a> -->

  </form>
</div>

</body>
</html>