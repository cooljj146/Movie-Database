<?php
    include("index.php");
    include 'connection.php';

    // add a record into movie entity
    if(isset($_POST['insertIntoMovie'])){
    
    $movieID = $_POST['movieID'];
    $review = $_POST['review'];
    $rentalCost = $_POST['rentalCost'];
    $director = $_POST['director'];
    $ageLevel = $_POST['ageLevel'];
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $image = $_FILES['image'];
    print_r($_FILES['image']);
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "img/".$img_name;
    move_uploaded_file($img_loc, 'img/'.$img_name);


   

    
    // echo $pid."-".$title;
    // $stmt = $conn->prepare("INSERT INTO movie (movieID, review, rentalCost, director, ageLevel, title, genre) VALUES (?, ?, ?, ?, ?, ?, ?)");
    // $stmt->bind_param("ss", $movieID, $review, $rentalCost, $director, $ageLevel, $title, $genre);

    // $stmt->execute();

    // $stmt->close();
    // $conn->close();
    
    $sql = "INSERT INTO movie (movieID, review, rentalCost, director, ageLevel, title, genre, image) VALUES ($movieID, '$review', $rentalCost, '$director', $ageLevel, '$title','$genre', '$img_des')";


    if ($conn->query($sql) === TRUE) {
       // move_uploaded_file($_FILES["image"]["tmp_name"], "img/".$_FILES["image"]["name"]);
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

    // add a record into customer
    if(isset($_POST['insertIntoCustomer'])){
    
        
    // create customer profile
    /* $profileID = $_POST['profile_profileID'];
    $username = $_POST['lastName'];
    $password = $_POST['dateOfBirth'];
        
    $sql = "INSERT INTO profile (profileID, username, password) VALUES ($profileID, '$username', '$password')";
        
    if ($conn->query($sql) === TRUE) {
        echo "New profile created successfully. ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    */
    // create customer       
    $customerID = $_POST['customerID'];
    $email = $_POST['email'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $address = $_POST['address'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $profile_profileID = $_POST['profile_profileID'];    
        
    $sql = "INSERT INTO customer (customerID, email, firstName, lastName, address, dateOfBirth, profile_profileID) VALUES ($customerID, '$email', '$firstName', '$lastName', '$address', '$dateOfBirth',$profile_profileID)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    
}

?>