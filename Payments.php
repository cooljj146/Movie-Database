<?php 
  include 'header.php';
?>

    <main role="main" class="container">

      <div class="starter-template">
        <h1>Payment Information</h1>
        <p class="lead">Here is the payment information for customers in the database<br> </p>


<table class="table table-bordered">
  <thead class = "thead-dark">
    <tr>
      <th scope="col">Payment ID</th>
      <th scope="col">Payment Amount</th>
      <th scope="col">Payment Type</th>
      <th scope="col">Due Date</th>
      <th scope="col">Customer ID</th>
    </tr>
  </thead>
  <tbody>


 <?php 

    $host = "3.14.51.97"; // localhost
    $username = "group_C_user"; // root
    $password = "C10_group_C_2021"; // enter
    $dbname = "group_C_db";

    $conn = new mysqli($host, $username, $password, $dbname); // extensiating class returns a connection

    $sql = "SELECT * FROM payment";
    $result = $conn->query($sql);
  
    $conn->close();

    if($result){
           while($row = $result->fetch_assoc()) {
            $paymentID=$row['paymentID'];
            $paymentAmount=$row['paymentAmount'];
            $paymentType=$row['paymentType'];
            $dueDate=$row['dueDate'];
            $customer_customerID=$row['customer_customerID'];
            echo '  <tr>
                      <th scope="row">'.$paymentID.'</th>
                      <td>'.$paymentAmount.'</td>
                      <td>'.$paymentType.'</td>
                      <td>'.$dueDate.'</td>
                      <td>'.$customer_customerID.'</td>
                   </tr> ';
           }
          }

          $conn->close();
      
    

  ?>

    <?php 
    $image_url='https://www.google.com/url?sa=i&url=https%3A%2F%2Fpixabay.com%2Fillustrations%2Fprofile-profile-pic-human-face-2398782%2F&psig=AOvVaw0yLi1wTyZqgOScHYuhfovO&ust=1638308704079000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCJClpdbFvvQCFQAAAAAdAAAAABAD';
    ?>

  </body>