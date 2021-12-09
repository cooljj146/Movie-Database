<?php 
    include 'header.php';
    include 'connection.php';
?>

    <main role="main" class="container">

      <div class="starter-template">
        <h1>Rented Movies</h1>
        <p class="lead">These are all the rented movies in the database!<br> </p>

        <table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
       <th scope="col">MovieID</th>
      <th scope="col">Review</th>
      <th scope="col">Cost</th>
      <th scope="col">Director</th>
      <th scope="col">Age</th>
      <th scope="col">Genre</th>
      <th scope="col">Title</th>
    </tr>
  </thead>
</tbody>

<?php 

    $host = "3.14.51.97"; // localhost
    $username = "group_C_user"; // root
    $password = "C10_group_C_2021"; // enter
    $dbname = "group_C_db";

    $conn = new mysqli($host, $username, $password, $dbname); // extensiating class returns a connection

    $sql = "call showRentedMovies ()";
    $result = $conn->query($sql);
  
    if($result){
           while($row = $result->fetch_assoc()) {
            $movieID=$row['movieID'];
            $review=$row['review'];
            $rentalCost=$row['rentalCost'];
            $director=$row['director'];
            $age=$row['ageLevel'];
            $genre=$row['genre'];
            $title=$row['title'];
            echo '  <tr>
                      <th scope="row">'.$movieID.'</th>
                      <td>'.$review.'</td>
                      <td>'.$rentalCost.'</td>
                      <td>'.$director.'</td>
                      <td>'.$age.'</td>
                      <td>'.$genre.'</td>
                      <td>'.$title.'</td>
                   </tr> ';
           }
          }

          $conn->close();
  ?>


<!--?php 

    $sql = "call showRentedMovies ()";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "ID: " . $row["movieID"]. " - Review: " . $row["review"]. " Cost: " . $row["rentalCost"]. " - Director: " . $row["director"]. " - Age: " . $row["ageLevel"]. " - Title: " . $row["title"] ,"<br>";
    }
    } else {
      echo "0 results";
    }
    $conn->close();
?--->
