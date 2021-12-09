<?php 
    include "header.php";
?>

<main role="main" class="container">

    <div class="starter-template">
        <p class="lead">Use this page to delete a movie from the database<br> </p>

        <h3> Delete by ID</h3>


        <form method="post" action="helperFunctionDelete.php">

            <div class="form-group">
                <label for="exampleFormControlInput1">Movie I.D.
                    <?php if(isset($_GET['msg']) && $_GET['msg']!="") { ?>
                        <p name="massage"><?php echo "<font color='red'>".$_GET['msg']."</font>"; ?> </p>
                    <?php } ?>
                </label>
                <input type="text" class="form-control" name="movieID" id="movieID" placeholder="e.g., 1234">

            </div>
            <button type="submit" name="deleteFromMovies" class="btn btn-primary">Submit</button>

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
