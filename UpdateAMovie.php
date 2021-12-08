<?php 
    include 'header.php';
    include 'connection.php';
?>
<main role = "main" class="container">
<div class = "starter-template">

    <h1>Movie Details</h1>

        <table class = "table table-bordered">
        <thead class = "thead-dark">
            <tr>
                <th>Movie ID</th>
                <th>Review</th>
                <th>Rental Cost</th>
                <th>Director</th>
                <th>Age Level</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Action</th>
            </tr>
        </thead>
        </tbody>
    <?php
        $sql = mysqli_query($conn, "select * from movie order BY title");
        
        while($data = mysqli_fetch_array($sql)) {
    ?>
        <tr>
            <td><?php echo $data['movieID']; ?> </td>
            <td><?php echo $data['review']; ?> </td>
            <td><?php echo $data['rentalCost']; ?> </td>
            <td><?php echo $data['director']; ?> </td>
            <td><?php echo $data['ageLevel']; ?> </td>
            <td><?php echo $data['title']; ?> </td>
            <td><?php echo $data['genre']; ?> </td>
            <td><a href = "UpdateMovieFunction.php?movieID=<?php echo $data['movieID']; ?>">Edit</a></td>
        </tr>
    <?php
        }
    ?>
    </table>

    </body>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="assets/js/vendor/popper.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
</body>
</html>
