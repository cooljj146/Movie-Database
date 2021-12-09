<?php 
    include 'header.php';
?>

<main role="main" class="container">

    <div class="starter-template">
        <p class="lead">Use this page to add movies into the database.<br></p>
        <hr>

        <h3> Insert Data Into Movies</h3>

        <form method="post" action="helperFunctions.php" enctype="multipart/form-data">

            <div class="form-group">
                <label for="exampleFormControlInput1">Movie I.D. </label>
                <input type="text" class="form-control" name="movieID" id="exampleFormControlInput1" placeholder="e.g., 1234">

                <label for="exampleFormControlInput2">Review</label>
                <input type="text" class="form-control" name="review" id="exampleFormControlInput2" placeholder="e.g., 3.4/5">

                <label for="exampleFormControlInput3">Rental Cost</label>
                <input type="decimal" class="form-control" name="rentalCost" id="exampleFormControlInput3" placeholder="e.g., 3.00">

                <label for="exampleFormControlInput4">Director</label>
                <input type="text" class="form-control" name="director" id="exampleFormControlInput4" placeholder="e.g., John Smith">

                <label for="exampleFormControlInput5">Age Level</label>
                <input type="text" class="form-control" name="ageLevel" id="exampleFormControlInput5" placeholder="e.g., 13">

                <label for="exampleFormControlInput6">Movie Title</label>
                <input type="text" class="form-control" name="title" id="exampleFormControlInput6" placeholder="e.g., Beauty and the Beast">

                <label for="exampleFormControlInput7">Movie Genre </label>
                <input type="text" class="form-control" name="genre" id="exampleFormControlInput7" placeholder="e.g., horror">

                <label for="exampleFormControlInput8">Upload Image</label>
                <input type="file" class="form-control" name="image" id="exampleFormControlInput8">


            </div>
            <button type="submit" name="insertIntoMovie" class="btn btn-primary">Submit</button>

        </form>

    </div>

</main><!-- /.container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="assets/js/vendor/popper.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
</body>
</html>
