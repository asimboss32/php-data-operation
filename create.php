<?php
include 'config.php';
?>
 <?php

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $class = $_POST['class'];
            $roll = $_POST['roll'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $address = $_POST['address'];

            $insert_query = "INSERT INTO students(name, class, roll, phone, email, address) VALUES ('$name', '$class', '$roll', '$phone', '$email', '$address')";

            $insert_result = mysqli_query($connect, $insert_query);

            if ($insert_result) {
               header('location:index.php');
            } else {
                echo "<div class='alert alert-danger mt-3' role='alert'>
                Data insertion failed!
              </div>";
            }
        }

        ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php data operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="create.php">Create</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name*</label>
                <input type="text" class="form-control" placeholder="Enter your Name" name="name" id="" value="" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Class*</label>
                <input type="text" class="form-control" placeholder="Enter your Class" name="class" id="" value="" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Roll*</label>
                <input type="text" class="form-control" placeholder="Enter your Roll" name="roll" id="" value="" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone*</label>
                <input type="text" class="form-control" placeholder="Enter your Phone Number" name="phone" id="" value="" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address*</label>
                <input type="email" class="form-control" placeholder="Enter your Email Adress" name="email" id="" value="" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Address*</label>
                <textarea name="address" id="" class="form-control"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>