<?php
 include 'config.php';
?>

<?php
 if (isset($_GET['id'])) { //check kora id ta pacce kina ?

    $id = $_GET['id']; //id ta ke variable a rakha

    $singledata ="SELECT * FROM students WHERE id = $id"; //select query for single data

    $data = mysqli_query($connect, $singledata); //query execute

    $row = mysqli_fetch_assoc($data);  //assoc means associative array make kora

    $name = $row['name']; //name ta ke variable a rakha
    $class = $row['class'];
    $roll = $row['roll'];
    $phone = $row['phone'];
    $email = $row['email'];
    $address = $row['address'];
    }
    if (isset($_POST['submit'])) { //form submit kora hoise kina check kora $_POST= method database dhokanor
        $name = $_POST['name'];   //form theke data neya
        $class = $_POST['class'];
        $roll = $_POST['roll'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        // Update query
        $update_query = "UPDATE students SET name='$name', class='$class', roll='$roll', phone='$phone', email='$email', address='$address' WHERE id=$id";
        $update_result = mysqli_query($connect, $update_query);  //query execute

        if ($update_result) {     /// check kora query ta run hoise kina
            header('location:index.php'); //jodi run hoi tahole index.php a niye jabe
        } else {
            echo "<div class='alert alert-danger mt-3' role='alert'>  //jodi run na hoi tahole error message dekhabe
            Data update failed!
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
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Enter your Name" name="name" id="" value="<?php echo $name ?>" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Class</label>
                <input type="text" class="form-control" placeholder="Enter your Class" name="class" id="" value="<?php echo $class ?>" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Roll</label>
                <input type="text" class="form-control" placeholder="Enter your Roll" name="roll" id="" value="<?php echo $roll?>" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone</label>
                <input type="text" class="form-control" placeholder="Enter your Phone Number" name="phone" id="" value="<?php echo $phone ?>" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" placeholder="Enter your Email Adress" name="email" id="" value="<?php echo $email ?>" >
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Address</label>
                <textarea name="address" id="" class="form-control"><?php echo $address ?></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
