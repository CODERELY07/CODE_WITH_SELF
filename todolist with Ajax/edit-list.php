<?php

require_once '../connection/db.php';

if(isset($_POST['list']) && isset($_POST['id'])){
    $list = htmlspecialchars($_POST['list']);
    $id = htmlspecialchars($_POST['id']);

    $stmt = $conn->prepare("UPDATE todolist SET list=? WHERE id = ?");
    
    if($stmt === false){
        echo "ERROR PREPARING SQL STATEMENT: " . $conn->error;
    }else{
        $stmt->bind_param("si",$list,$id);
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
    echo "Error: 'list' or 'id' parameter not set.";
}

?>