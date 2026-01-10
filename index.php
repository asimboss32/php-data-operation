<?php
 include 'config.php';
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
        <h1 style="color:red;">Student Information</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Serial</th>
                    <th scope="col">Name</th>
                    <th scope="col">Class</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Addres</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <?php
            $query = "SELECT * FROM students"; /// select query
            $students = mysqli_query($connect, $query); /// query execute
            if ($students) {


                while ($row = mysqli_fetch_assoc($students)) {
                $id = $row['id'];
                $name = $row['name'];
                $class = $row['class'];
                $roll = $row['roll'];
                $phone = $row['phone'];
                $email = $row['email'];
                $address = $row['address'];

                echo "<tr>
                <th scope='row'>$id</th>
                <td>$name</td>
                <td>$class</td>
                <td>$roll</td>
                <td>$phone</td>
                <td>$email</td>
                <td>$address</td>
                <td>
                    <a href='edite.php?id=".$id."' class='btn btn-primary btn-sm'>Edit</a>
                    <a href='delete.php?id= ".$id."' class='btn btn-danger btn-sm'>Delete</a>
                </td>
                </tr>;";
               }
            }
            

            
            
            
            ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>