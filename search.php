<?php 
	include 'header.php';
	include 'connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>Search</title>
</head>
<body>
<div class="container">
   <div class="row">
   <div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
   <div class="row">

   <?php 

     if(isset($_GET['search'])){
        $searchKey = $_GET['search'];
        $sql = "SELECT * FROM movie WHERE title LIKE '%$searchKey%' OR genre LIKE '%$searchKey%' OR rentalCost LIKE '%$searchKey%' ";
     }else
     $sql = "SELECT * FROM movie";
     $result = $conn->query($sql);
   ?>

   <form action="" method="GET"> 
     <div class="col-md-6">
        <input type="text" name="search" class='form-control' placeholder="Search By Name, Director, or Genre" value=<?php echo @$_GET['search']; ?> > 
     </div>
     <div class="col-md-6 text-left">
      <button class="btn">Search</button>
     </div>
   </form>

   <br> 
   <br>
</div>

<table class="table table-bordered">
  <tr>
     <th>Movie</th>
     <th>Director</th>
     <th>Genre</th>
     <th>Rental Cost</th>
  </tr>
  <?php while( $row = $result->fetch_object() ): ?>
  <tr>
     <td><?php echo $row->title ?></td>
     <td><?php echo $row->director ?></td>
     <td><?php echo $row->genre ?></td>
     <td><?php echo $row->rentalCost ?></td>
  </tr>
  <?php endwhile; ?>
</table>
</div>
</div>
</div>
</body>
</html>