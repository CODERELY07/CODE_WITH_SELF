<?php
     require_once '../connection/db.php';
     
     if(isset($_POST['id'])){
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $sql = "DELETE FROM todolist WHERE id = '$id'";

        if( $result = $conn->query($sql)){
            echo 1;
        }else{
            echo "Error: " . $conn->error;
        }
     }else{
           echo "No Id";
     }
    

    $conn->close();
?>