<?php 
    include "config.php";

    if(isset($_POST["submit"])) {
        $hospital_name = $_POST['hospitalname'];
        $hospital_address = $_POST['hospitaladdress'];
        $hospital_contact = $_POST['hospitalcontact'];
    

    $sql = "INSERT INTO `hospital` (`hospital_name`, `hospital_address`, `hospital_contact`) VALUES ('$hospital_name', '$hospital_address', '$hospital_contact')";

    $result = $conn->query($sql); 

    if($result == TRUE) {
        echo "New Hospital added successfully.";
    }else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

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
    <title>Add Hospitals</title>
</head>
<body style="min-height:100vh; background-color:#E0FAF9;">
<?php require "partials/navbar.php" ?>
    <div class="container forms" style="min-height:100vh; margin-top:5rem;">
    <h2>Add Hospital</h2>
    <form class="form-floating" method="POST">
        <fieldset>
            <legend>Hospital Info: </legend>
            Name: <br>
            <input type="text" class="form-control" name="hospitalname">
            <br>
            Address: <br>
            <input type="text" class="form-control" name="hospitaladdress">
            <br>
            Contact: <br>
            <input type="text" class="form-control" name="hospitalcontact">
            <br><br>
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
    </div>
</body>
</html>