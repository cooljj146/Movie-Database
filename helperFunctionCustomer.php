<?php
    include("index.php");
    include 'connection.php';

// add a record into movie entity
if(isset($_POST['insertIntoCustomer'])){
    
    $customerID = $_POST['customerID'];
    $email = $_POST['email'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $address = $_POST['address'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $profile_profileID = $_POST['profile_profileID'];
    
    // echo $pid."-".$title;
    // $stmt = $conn->prepare("INSERT INTO movie (movieID, review, rentalCost, director, ageLevel, title, genre) VALUES (?, ?, ?, ?, ?, ?, ?)");
    // $stmt->bind_param("ss", $movieID, $review, $rentalCost, $director, $ageLevel, $title, $genre);

    // $stmt->execute();

    // $stmt->close();
    // $conn->close();
    
    $sql = "INSERT INTO customer (customerID, email, firstName, lastName, address, dateOfBirth, profile_profileID) VALUES ($customerID, '$email', '$firstName', '$lastName', '$address', '$dateOfBirth',$profile_profileID)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        // echo '<script language="javascript">';
        echo "Error: " . $sql . "<br>" . $conn->error;
        // echo 'alert("Error: " . $sql . "<br>" . $conn->error")';
        // echo '</script>';
    }

    // echo '<script language="javascript">';
    // echo 'alert("record has been inserted into db successfully")';
    // echo '</script>';
    
    $conn->close();
    
   // header("Location: index.php"); -- this will ignore the alert window

}

?>