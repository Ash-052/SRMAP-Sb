<!DOCTYPE html>
<html lang="en">
    <?php
    include 'database.php';
    ?>
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
      width: 5%; /* ID column width */
    }

    .cell:nth-child(2) {
      width: 30%; /* Category column width */
    }

    .actions {
      display: flex;
      justify-content: flex-end;
      align-items: center;
    }

    .actions button {
      margin-left: 5px;
    }
  </style>
</head>
<body>

<div class="container">
  <h1>Admin List</h1>

  <div class="table">
    <div class="row header">
      <!-- <div class="cell">ID</div> -->
      <div class="cell">Name</div>
      <div class="cell">Category</div>
      <div class="cell">Subject</div>
      <div class="cell">Description</div>
      <div class="cell">Action</div> <!-- New column for buttons -->
    </div>


  </div>
  <?php
include 'database.php';

// Fetch data from the suggestion table
$sql = "SELECT * FROM suggestion1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<div class="row">';
        // echo '<div class="cell">' . $row["id"] . '</div>'; // Uncomment this line if you want to display the ID column
        echo '<div class="cell">' . $row["Name"] . '</div>';
        echo '<div class="cell">' . $row["category"] . '</div>';
        echo '<div class="cell">' . $row["subject"] . '</div>';
        echo '<div class="cell">' . $row["message"] . '</div>';
        echo '<div class="cell actions">
                <button>Forward to staff</button>
                <button>Delete</button>
              </div>';
        echo '</div>';
    }
} else {
    echo '<div class="row"><div class="cell" colspan="4">No suggestions found</div></div>';
}

$conn->close();
?>

</div>

</body>
</html>