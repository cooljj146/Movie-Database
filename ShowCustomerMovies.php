<?php 
    include 'header.php';
    include 'connection.php';
?>

    <main role="main" class="container">

    <div class="starter-template">
    <h1>Customer Movies</h1>
    <p class="lead">Here you can see which movies customers have rented!<br></p>

<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Last Name</th>
      <th scope="col">Title</th>
    </tr>
  </thead>
  <tbody>

<?php 
    
    // $sql = "SELECT * FROM customer ORDER BY lastName";
    // $result = $conn->query($sql);

    $sql = "call showCustomerMovies()";
    $result = $conn->query($sql);
        
   if ($result->num_rows > 0) {
    // output data of each row
           while($row = $result->fetch_assoc()) {
            $lastName=$row['lastName'];
            $title=$row['title'];

            echo '  <tr>
                      <th scope="row">'.$lastName.'</th>
                      <td>'.$title.'</td>
                   </tr> ';
           }
          }
    $conn->close();

?>
  </body>