<?php 
    include 'header.php';
    include 'connection.php';
?>

    <main role="main" class="container">

    <div class="starter-template">
    <h1>Customer Profiles</h1>
    <p class="lead">Welcome to our customers database!<br> Use this page to view customer profiles.
    </p>

  <table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Profile ID</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">FriendList</th>
    </tr>
  </thead>
</tbody>

<?php 
    
    $sql = "SELECT * FROM profile ORDER BY username";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
           while($row = $result->fetch_assoc()) {
            $profileID=$row['profileID'];
            $username=$row['username'];
            $password=$row['password'];
            $friendList=$row['friendList'];

            echo '  <tr>
                      <th scope="row">'.$profileID.'</th>
                      <td>'.$username.'</td>
                      <td>'.$password.'</td>
                      <td>'.$friendList.'</td>
                   </tr> ';
           }
          }
    $conn->close();


    ?>

  </body>