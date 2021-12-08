<?php 
    include 'header.php';
    include 'connection.php';

    $movieID = $_GET['movieID'];

    $sql = mysqli_query($conn, "select * from movie where movieID = $movieID");
    $result = mysqli_fetch_array($sql);

    if(isset($_POST['update'])) {
        $rentalCost = $_POST['rentalCost'];

        $edit = mysqli_query($conn, "update movie set rentalCost = $rentalCost where movieID = $movieID");

        if($edit) {
           mysqli_close($conn);
            ?>
            <script type="text/javascript">
            window.location.href = 'UpdateAMovie.php';
            </script>
            <?php
           exit;
        } else {
           echo "Error: " . $sql . "<br>" . $conn->error;;
        }
    }
?>

<h3>Update Movie Price</h3>
    <form method = "POST">
        <input type = "text" name ="rentalCost" value ="<?php echo $result['rentalCost']?>" placeholder= "Enter New Cost" Required>
        <input type = "submit" name="update" value="Update">


    </form>
