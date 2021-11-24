<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Covid Vaccination Management System</title>
</head>
<body style="background-color:#E0FAF9;">
<?php require "partials/navbar.php" ?>
    <div class="container d-flex justify-content-around align-items-center" >
        <div class="row gx-5">
            <div class="col-6 d-flex justify-content-center">
                <div class="card" style="width: 25rem; margin:3rem;">
                    <img src="assets\hospital.jpg" class="card-img-top" style="height:400px;" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Manage Hospitals</h5>
                        <p class="card-text">Allows user to create, view, edit and delete hospitals.</p>
                        <a href="hospital_view.php" class="btn btn-primary">Go</a>
                    </div>
                </div>
            </div>
            <div class="col-6 d-flex justify-content-center">
                <div class="card" style="width: 25rem; margin:3rem;">
                    <img src="assets\hero.jpg" class="card-img-top"  alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Manage Vaccination Records</h5>
                        <p class="card-text">Allows user to create, view and delete vaccination records of respective hospitals.</p>
                        <a href="vaccine_record_view.php" class="btn btn-primary">Go</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>