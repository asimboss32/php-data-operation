<?php
 include 'config.php';
?>

<?php
    if (isset($_GET['id'])) {  //check kora id ta pacce kina ?
        $id = $_GET['id'];

        // Delete query
        $delete_query = "DELETE FROM students WHERE id = $id";
        $delete_data = mysqli_query($connect, $delete_query);

        if ($delete_data) {
            // Redirect to index.php after deletion
            header("Location: index.php");
        } else {
            echo "failed to delete data.";
        }
    } else {
        echo "No ID specified for deletion.";
    }