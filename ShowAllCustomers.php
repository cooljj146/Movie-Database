<?php 
    include 'header.php';
    include 'connection.php';
?>

<main role="main" class="container">

      <div class="starter-template">
        <h1>All Customers</h1>
        <p class="lead">These are all the customers in the database!<br> </p>
          
    <?php 
    
    $sql = "call showAllCustomers()";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Customer ID: " . $row["customerID"]. " - Last Name: " . $row["lastName"]. " - First Name: " .$row["firstName"], "<br>";
        // echo "ID: " . $row["customerID"]. " - eMail: " . $row["email"]. " First Name: " . $row["firstName"]. " - Las tName: " . $row["lastName"]. " - Address: " . $row["address"]. " - Date of Birth: " . $row["dateOfBirth"] ,ProfileId: " . $row["profile_profileID"], "<br>";
    }
    } else {
      echo "0 results";
    }
    $conn->close();


    ?>
