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
<?php
include 'database.php';

function deleteRow($conn, $name, $category, $subject, $description) {
    $stmt = $conn->prepare("DELETE FROM suggestion1 WHERE Name = ? AND category = ? AND subject = ? AND message = ?");
    $stmt->bind_param("ssss", $name, $category, $subject, $description);
    return $stmt->execute();
}

function forwardToStaff($category , $name , $subject , $description) {

    $phn = '';
    
    if ($category == "itkm") {
        $phn = "+919701547079";
    }
    elseif ($category == "clm") {
        $phn = "+917285945541";
    }
    elseif ($category == "crcs") {
        $phn = "+917780333459";
    }
    elseif ($category == "ir & hs") {
        $phn = "+918008579587";
    }
    elseif ($category == "academic") {
        $phn = "+919494438310";
    }
    
    
    // $urlEncodedText = urlencode($description);
    $urlEncodedText = str_replace(' ', '%20', $description);
    $link = "https://wa.me/" . $phn . "?text=" . $urlEncodedText;
    echo $link;
     header("Location: $link");

    // $mailtoLink = "mailto:" . $email;
    // header("Location: $mailtoLink");
    // exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST["Forward_to_Staff"])) {
      echo "Forwarded to Staff";
        forwardToStaff($_POST["category"], $_POST["name"], $_POST["subject"], $_POST["description"]);
    } 
    
    elseif (isset($_POST["Done"])) {
        if (isset($_POST["name"]) && isset($_POST["category"]) && isset($_POST["subject"]) && isset($_POST["description"])) {
            if (deleteRow($conn, $_POST["name"], $_POST["category"], $_POST["subject"], $_POST["description"])) {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin List</title>
</head>
<body>
    <div class="container">

        <h1>Admin List</h1>
        <button class="logout-btn" id="logout-btn">Logout</button>

        <div class="table">
            <div class="row header">
                <div class="cell">Name</div>
                <div class="cell">Category</div>
                <div class="cell">Subject</div>
                <div class="cell">Description</div>
                <div class="cell">Action</div>
            </div>
            <?php
            $sql = "SELECT * FROM suggestion1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="row">';
                    echo '<div class="cell">' . $row["Name"] . '</div>';
                    echo '<div class="cell">' . $row["category"] . '</div>';
                    echo '<div class="cell">' . $row["subject"] . '</div>';
                    echo '<div class="cell">' . $row["message"] . '</div>';
                    echo '<div class="cell actions">
                            <form method="post"> 
                                <input type="hidden" name="name" value="' . $row["Name"] . '"/>
                                <input type="hidden" name="category" value="' . $row["category"] . '"/>
                                <input type="hidden" name="subject" value="' . $row["subject"] . '"/>
                                <input type="hidden" name="description" value="' . $row["message"] . '"/>
                                <input type="submit" name="Forward_to_Staff" value="Forward to Staff"/> 
                                <input type="submit" name="Done" value="Done"/> 
                            </form>
                          </div>';
                    echo '</div>';
                }
            } else {
                echo '<div class="row"><div class="cell" colspan="4">No suggestions found</div></div>';
            }
            ?>
        </div>
    </div>
    <!-- <button class="centered-button">Centered Button</button> -->

</body>
</html>
