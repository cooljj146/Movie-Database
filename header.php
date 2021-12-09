<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Add a Movie for Rental</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Lauren added to fix drop down not working -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    
    
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Movie Database</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>

            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Movies</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="ShowAllMovies.php">All</a>
                    <a class="dropdown-item" href="ShowRentedMovies.php">Rented</a>
                    <a class="dropdown-item" href="ShowAvailableMovies.php">Available</a>
                    <a class="dropdown-item" href="ShowUnavailableMovies.php">Unavailable</a>
                    <a class="dropdown-item" href="form.php">Add Movie</a>
                    <a class="dropdown-item" href="UpdateAMovie.php">Update Movie</a>
                </div>
            </li>
            

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Customers</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="CustomersInfo.php">Show Customers</a>
                    <a class="dropdown-item" href="CustomerProfiles.php">Show Profiles</a>
                    <a class="dropdown-item" href="AddACustomer.php">Add Customer</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="ShowCustomerMovies.php">Customer Movies </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="Payments.php">Payments </a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="form.php">Add a Movie</a>
                    <a class="dropdown-item" href="AddACustomer.php">Add a Customer</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="search.php">Search </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="deleteSample.php">Delete </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="UpdateAMovie.php">Update </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="HistoryLog.php">History </a>
            </li>
            
        </ul>
        <!---form class="form-inline my-2 my-lg-0" method="post">
            <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search for a Movie" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit">Search</button>
        </form--->
    </div>
</nav>

