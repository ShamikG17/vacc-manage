<?php 
    include "config.php";

    if(isset($_GET['hospital_id'])) {
        $hospital_id = $_GET['hospital_id'];

        $sql = "DELETE FROM hospital WHERE hospital_id = '$hospital_id'";

        $result = $conn->query($sql);

        if($result == TRUE) {
            echo "Hospital Deleted";
        }else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        header("Location: hospital_view.php");
    }
?>
