<?php
    include "config.php";

    $sql = "SELECT * FROM hospital";

    $result = $conn->query($sql);

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
    <title>Hospital List</title>
</head>
<body style="min-height:100vh; background-color:#E0FAF9;">
<?php require "partials/navbar.php" ?>
    <div class="container d-flex flex-column align-items-center" style="min-height:100vh; max-width:1000px; margin-top:5rem;">
    <h2>Hospitals List<a class="btn btn-primary ms-5" href="hospital_create.php">+</a></h2>
        <table class="table table-striped">
            <head>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Action</th>
                </tr>
            </thread>
            <tbody>
                <?php
                    if($result->num_rows>0) {
                        while($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['hospital_id']; ?> </td>
                    <td><?php echo $row['hospital_name']; ?> </td>
                    <td><?php echo $row['hospital_address']; ?> </td>
                    <td><?php echo $row['hospital_contact']; ?> </td>
                    <td><a class="btn btn-primary" href="hospital_update.php?hospital_id=<?php echo $row['hospital_id']; ?>" >Edit</a>&nbsp; <a class="btn btn-danger" href="hospital_delete.php?hospital_id=<?php echo $row['hospital_id']; ?>">Delete</a>
                    </td>
                </tr>
                <?php 
                        }
                    }
                ?>
            </tbody>
        </table>


