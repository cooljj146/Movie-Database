<?php 
    include 'header.php';
    include 'connection.php';
?>

    <main role="main" class="container">

    <div class="starter-template">
    <h1>History Log</h1>
    <p class="lead">Here you can find a log history of all changes made to the database.<br></p>

    <table class="table table-bordered">
        <thead class="thead-dark">
          <tr>
          <th scope="col">Item ID</th>
          <th scope="col">Activity Type</th>
          <th scope="col">Date</th>
          <th scope="col">Object Type</th>
          <th scope="col">Old Value</th>
          <th scope="col">New Value</th>
          </tr>
        </thead>
      <tbody>

<?php 
    
    $sql = "SELECT * FROM history ORDER BY objectType";
    $result = $conn->query($sql);

    if ($result) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $itemID = $row["itemID"];
        $activityType = $row["activityType"];
        $date = $row["date"];
        $objectType =  $row["objectType"];
        $oldValue =  $row["oldValue"];
        $newValue =  $row["newValue"];
        echo '  <tr>
                  <th scope="row">'.$itemID.'</th>
                  <td>'.$activityType.'</td>
                  <td>'.$date.'</td>
                  <td>'.$objectType.'</td>
                  <td>'.$oldValue.'</td>
                  <td>'.$newValue.'</td>
              </tr> ';
        }
    }
    $conn->close();


?>

  </body>
