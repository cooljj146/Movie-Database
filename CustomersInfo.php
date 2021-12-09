<?php 
    include 'header.php';
    include 'connection.php';
?>

    <main role="main" class="container">

    <div class="starter-template">
    <h1>Customers Information</h1>
    <p class="lead">Welcome to our customers database!<br> Use this page to view customers information</p>

<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Customer ID</th>
      <th scope="col">Email</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Address</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Profile ID</th>
    </tr>
  </thead>
  <tbody>

<?php 
    
    // $sql = "SELECT * FROM customer ORDER BY lastName";
    // $result = $conn->query($sql);

    $sql = "call showAllCustomers()";
    $result = $conn->query($sql);
        
    if ($result->num_rows > 0) {
    // output data of each row
           while($row = $result->fetch_assoc()) {
            $customerID=$row['customerID'];
            $email=$row['email'];
            $firstName=$row['firstName'];
            $lastName=$row['lastName'];
            $address=$row['address'];
            $dateOfBirth=$row['dateOfBirth'];
            $profile_profileID=$row['profile_profileID'];


            echo '  <tr>
                      <th scope="row">'.$customerID.'</th>
                      <td>'.$email.'</td>
                      <td>'.$firstName.'</td>
                      <td>'.$lastName.'</td>
                      <td>'.$address.'</td>
                      <td>'.$dateOfBirth.'</td>
                      <td>'.$profile_profileID.'</td>
                   </tr> ';
           }
          }
    $conn->close();

?>
  </body>