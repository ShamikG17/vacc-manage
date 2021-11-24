<?php 
    include "config.php";

    if(isset($_POST["submit"])) {
        $vaccine_name = $_POST['vaccinename'];
        $patient_name = $_POST['patientname'];
        $hospital_name = $_POST['hospitalname'];
        $date_of_vaccination = $_POST['dateofvaccination'];
    

        $sql = "INSERT INTO `vaccine` (`vaccine_name`, `patient_name`, `hospital_name`, `date_of_vaccination`) VALUES ('$vaccine_name', '$patient_name', '$hospital_name', '$date_of_vaccination')";

        $result = $conn->query($sql); 

        if($result == TRUE) {
            echo "New Vaccination Record added successfully.";
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
    <title>Create Vaccination Records</title>
</head>
<body style="min-height:100vh; background-color:#E0FAF9;">
<?php require "partials/navbar.php" ?>
<div class="container forms" style="min-height:100vh; margin-top:5rem;">
<h2>Add Vaccination Record</h2>
    <form class="form-floating" action="" method="POST">
        <fieldset>
            <legend>Vaccine Info: </legend>
            Vaccine Name: <br>
            <select class="form-control" name="vaccinename">
                <option selected disabled>Choose Vaccine</option>
                <option value="Covishield">Covishield</option>
                <option value="Covaxin">Covaxin</option>
                <option value="Sputnik V">Sputnik V</option>
            </select>
            <br>
            Patient Name: <br>
            <input class="form-control" type="text" name="patientname">
            <br>
            Hospital Name: <br>
            <select class="form-control" name="hospitalname">
                <option selected disabled>Choose Vaccine</option>
                <?php 

                         $sql = "SELECT hospital_name FROM hospital";
                         $result = $conn->query($sql);

                         while($row = mysqli_fetch_array ($result)){   
                             echo "<option value = '$row[hospital_name]'>$row[hospital_name]</option>";
                         }
                        
                        ?>                               
            </select>
            <br>
            Date of Vaccination: <br>
            <input class="form-control" type="date" name="dateofvaccination">
            <br><br>
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
    </div>
</body>
</html>