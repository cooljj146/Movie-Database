<?php 
  include 'header.php';
    include 'connection.php';
?>

<main role="main" class="container">

      <div class="starter-template">
        <h1>All Movies</h1>
        <p class="lead">These are all the movies in the database!<br> </p>

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
      <th scope="col">Poster</th>
    </tr>
  </thead>
  <tbody>

    <?php 

    $sql = "call showAllMovies ()";
    $result = $conn->query($sql);
  
    if($result){
           while($row = $result->fetch_assoc()) {
            /*$movieID=$row['movieID'];
            $review=$row['review'];
            $rentalCost=$row['rentalCost'];
            $director=$row['director'];
            $age=$row['ageLevel'];
            $genre=$row['genre'];
            $title=$row['title'];
            $image=$row['image'];*/
            echo " <tr>
                      <td>$row[movieID]</td>
                      <td>$row[review]</td>
                      <td>$row[rentalCost]</td>
                      <td>$row[director]</td>
                      <td>$row[ageLevel]</td>
                      <td>$row[genre]</td>
                      <td>$row[title]</td>
                      <td><img src='$row[image]' width = '200px' height = '200px'></td>
                   </tr> ";

           }
          }

          $conn->close();
      
    

  ?>

 
          
    <!--?php 
    
    $sql = "call showAllMovies()";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "ID: " . $row["movieID"]. " - Review: " . $row["review"]. " Cost: " . $row["rentalCost"]. " - Director: " . $row["director"]. " - Age: " . $row["ageLevel"]. " - Title: " . $row["title"]. " - Genre: " . $row["genre"] ,"<br>";
    }
    } else {
      echo "0 results";
    }
    $conn->close();


    ?->
