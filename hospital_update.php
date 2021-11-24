<?php
    include "config.php";

    if(isset($_POST["update"])) {
            $hospital_id = $_POST['hospitalid'];
            $hospital_name = $_POST['hospitalname'];
            $hospital_address = $_POST['hospitaladdress'];
            $hospital_contact = $_POST['hospitalcontact'];

            $sql = "UPDATE hospital SET hospital_name = '$hospital_name', hospital_address = '$hospital_address', hospital_contact = '$hospital_contact' WHERE hospital_id = '$hospital_id'";

            $result = $conn->query($sql);

            if($result == TRUE) {
                echo "Hospital details updated successfully";
            }else {
                echo "Error: " . $sql . "<br>" . conn->error;
            }

        }

        if(isset($_GET["hospital_id"])) {
            $hospital_id = $_GET['hospital_id'];

            $sql = "SELECT *FROM hospital WHERE hospital_id = '$hospital_id'";

            $result = $conn->query($sql);

            if($result->num_rows>0) {
                while($row = $result->fetch_assoc()) {
                    $hospital_id = $row['hospital_id'];
                    $hospital_name = $row['hospital_name'];
                    $hospital_address = $row['hospital_address'];
                    $hospital_contact = $row['hospital_contact'];
                }  

?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="styles\hospital.css">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                <title>Hospital Update</title>
            </head>
            <body style="min-height:100vh; background-color:#E0FAF9;">
            <?php require "partials/navbar.php" ?>
            <div class="container forms" style="min-height:100vh; margin-top:5rem;">
                <h2>Update Hospital</h2>
                <form class="form-floating" action="" method="POST">
                    <fieldset>
                        <legend>Hospital Info: </legend>
                        <input class="form-control" type="hidden" name="hospitalid" value="<?php echo $hospital_id; ?>">
                        Name: <br>
                        <input class="form-control" type="text" name="hospitalname" value="<?php echo $hospital_name; ?>">
                        <br>
                        Address: <br>
                        <input class="form-control" type="text" name="hospitaladdress" value="<?php echo $hospital_address; ?>">
                        <br>
                        Contact: <br>
                        <input class="form-control" type="text" name="hospitalcontact" value="<?php echo $hospital_contact; ?>">
                        <br><br>
                        <input class="btn btn-primary" type="submit" name="update" value="Update">
                </fieldset>
                </form>
            </div>
            </body>
            </html>

        <?php
            }else {
                header("Location: hospital_view.php");
            }
        }

        ?>

