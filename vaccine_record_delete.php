<?php 
    include "config.php";

    if(isset($_GET['vaccine_id'])) {
        $vaccine_id = $_GET['vaccine_id'];

        $sql = "DELETE FROM vaccine WHERE vaccine_id = '$vaccine_id'";

        $result = $conn->query($sql);

        if($result == TRUE) {
            echo "vaccine Record Deleted";
        }else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        header("Location: vaccine_record_view.php");
    }
?>
