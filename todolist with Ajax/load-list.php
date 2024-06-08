<?php
    
    require_once '../connection/db.php';

    $sql = "SELECT * FROM todolist";
    $result = $conn->query($sql);

    $output = "";
    if($result->num_rows > 0){
        $output = "<ul class='list-group mt-4'>";
        while($row = $result->fetch_assoc()){
            $output .= 
            "<li class='list-group-item pointer d-flex justify-content-between align-items-center'>" . $row['list'] .
                "<div>".
                    "<button data-toggle='modal' data-target='#myModal' class='badge badge-success p-2' id='edit' style='cursor:pointer;' value='".$row['id']."'>Edit</button>" .
                    "<button class='badge badge-danger p-2' id='delete' style='cursor:pointer;' value='".$row['id']."'>Delete</button>" .
                "<div>".
            "</li>";
        }
    }else{
        $output .= "<li class='list-group-item d-flex justify-content-between align-items-center'> No List </li>";
    }
    $output .= "</ul>";
    echo $output;
    $conn->close();
?>