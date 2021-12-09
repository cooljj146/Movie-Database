<?php 

include 'header.php';
include 'connection.php';

?>

<div class="starter-template">
<h1>Movie List</h1>
<p class="lead">List of Movies<br> Choose Wisely</p>

<table class="table">
<thead>
<tr>
  <th scope="col">Review</th>
  <th scope="col">Rental Cost</th>
  <th scope="col">Director</th>
  <th scope="col">Title</th>
  <th scope="col">Genre</th>
  </tr>
</thead>
<tbody>

<?php 


 $sql="SELECT  review, rentalCost, director, title, genre FROM 'movie' ";
 $result = $conn->query($sql);
  if($result->num_rows > 0){
           while($row = $result->fetch_assoc()) {
            $review=$row['review'];
            $rentalCost=$row['rentalCost'];
            $director=$row['director'];
            $title=$row['title'];
            $genre=$row['genre'];
            echo '  <tr>
                      <th scope="row">'.$review.'</th>
                      <td>'.$rentalCost.'</td>
                      <td>'.$director.'</td>
                      <td>'.$title.'</td>
                      <td>'.$genre.'</td>
                   </tr> ';
           }
          }
           
    ?>

        
