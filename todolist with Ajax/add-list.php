<?php

    require_once '../connection/db.php';

    if(isset($_POST['list'])){

        $list = htmlspecialchars($_POST['list']);
        $stmt = $conn->prepare("INSERT INTO todolist (list) VALUES(?)");
        
        if($stmt === false){
            echo "ERROR PREPARING SQL STATEMENT: " . $conn->error;
        }else{
            $stmt->bind_param("s",$list);
            if($stmt->execute()){
                echo 1;
            }else{
                echo "ERROR Excuting SQL Stament: " . $conn->error;
            }
        }
           // Close the statement
            $stmt->close();
            // Close the database connection
            $conn->close();
    }else{
        echo "Error: 'list' parameter not set.";
    }
    

?>