<?php 
    include 'header.php';
?>

<main role="main" class="container">

    <div class="starter-template">
        <p class="lead">Use this page to add a customer to the database<br> </p>
        <hr>

        <h3> Insert Data Into Customers</h3>

        <form method="post" action="helperFunctions.php">

            <div class="form-group">
                <label for="exampleFormControlInput1">Customer I.D. </label>
                <input type="text" class="form-control" name="customerID" id="exampleFormControlInput1" placeholder="e.g., 41">

                <label for="exampleFormControlInput2">Email</label>
                <input type="text" class="form-control" name="email" id="exampleFormControlInput2" placeholder="e.g., exampleuser@gmail.com">

                <label for="exampleFormControlInput3">First Name</label>
                <input type="text" class="form-control" name="firstName" id="exampleFormControlInput3" placeholder="e.g., Jim">

                <label for="exampleFormControlInput4">Last Name</label>
                <input type="text" class="form-control" name="lastName" id="exampleFormControlInput4" placeholder="e.g., Smith">

                <label for="exampleFormControlInput5">Address</label>
                <input type="text" class="form-control" name="address" id="exampleFormControlInput5" placeholder="e.g., 123 Cherry Lane">

                <label for="exampleFormControlInput6">Date of Birth</label>
                <input type="text" class="form-control" name="dateOfBirth" id="exampleFormControlInput6" placeholder="e.g., 1999-01-01">

                <label for="exampleFormControlInput7">Profile I.D</label>
                <input type="text" class="form-control" name="profile_profileID" id="exampleFormControlInput7" placeholder="e.g., 21">

            </div>
            <button type="submit" name="insertIntoCustomer" class="btn btn-primary">Submit</button>

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
