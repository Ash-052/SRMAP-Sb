<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin List</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #5d5c3c;
      margin: 0;
      padding: 0;
    }

    .centered-button {
            margin-top: 20px; /* Adjust margin as needed */
            text-align: center
            
        }

    .container {
      max-width: 1100px;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      overflow-x: auto; /* Enable horizontal scrolling */
    }

    h1 {
      text-align: center;
    }

    .table {
      display: table;
      width: 100%;
      border-collapse: collapse;
    }

    .row {
      display: table-row;
    }

    .cell {
      display: table-cell;
      padding: 8px;
      border: 1px solid #ddd;
    }

    .header {
      font-weight: bold;
      background-color: #f2f2f2;
    }

    .row:not(:first-child) {
      border-top: 1px solid #ddd;
    }

    .cell:first-child {
      width: 50%; /* ID column width */
    }

    .cell:nth-child(2) {
      width: 50%; /* Category column width */
    }

    .actions {
      display: flex;
      justify-content: flex-end;
      align-items: center;
    }

    .actions button {
      margin-left: 5px;
    }

    .logout-btn {
            position: absolute;
            top: 30px;
            right: 90px;
            background-color: #75744b;
            color: white;
            padding: 10px 20px; /* Adjust padding as needed
            font-size: 16px; /* Adjust font size as needed */
            border: none;
            border-radius: 5px;
            cursor: pointer; 
        }

  </style>
</head>


<!DOCTYPE html>
<html>
<head>
    <title>Admin List</title>
</head>
<body>
    <div class="container">
        <h1>Admin List</h1>
        <a href="index.php"><button class="logout-btn" id="logout-btn">Logout</button></a>

        <div class="table">
            <div class="row header">
                <div class="cell">Name</div>
                <div class="cell">Adm NO</div>
            </div>
            <?php
            include 'database.php'; 
            $sql = "SELECT * FROM `student details`";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="row">';
                    echo '<div class="cell">' . $row["username"] . '</div>';
                    echo '<div class="cell">' . $row["adno"] . '</div>';
                    echo '</div>';
                    echo '<br>';
                  }
            } else {
                echo '<div class="row"><div class="cell" colspan="3">No administrators found</div></div>';
            }
            ?>
        </div>
    </div>
</body>
</html>
