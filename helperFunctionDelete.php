<?php 
    include "header.php";
    include "connection.php";

        $msg="";
        if(isset($_POST['deleteFromMovies'])) {
            $movieID = $_POST['movieID'];


            if (empty($movieID) || $movieID === "") {
                $msg = "movie I.D. cannot be empty. Please enter I.D. to delete";
                header('Location: deleteSample.php?msg='.$msg);

            }else {

                include 'connection.php';

                $sql = "SELECT * from movie where movieID = '$movieID'";

                $result = $conn->query($sql);


                if ($result -> num_rows > 0) {
                    // I.D. exists
                    // now, delete

                    $sql = "DELETE FROM movie WHERE movieID = '$movieID'";

                    if ($conn->query($sql) === TRUE) {

                        echo "Record deleted successfully";

                    } else {

                        echo "Error deleting record: " . $conn->error;
                    }
                    $conn->query($sql);
                    $conn->close();


                }else{
                    echo "The given movie I.D. does not exist";
                }

            }

        }

?>
