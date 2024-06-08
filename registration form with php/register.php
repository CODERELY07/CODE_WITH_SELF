<?php
    require_once '../connection/db.php'; 

    if(isset($_POST['submit'])) {

        $srn_number = $_POST['srn-number'];
        $register_place = $_POST['register-place'];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $suffix = $_POST['suffix'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $position = $_POST['position'];
        $civilstatus = $_POST['civilstatus'];
        $birth = $_POST['birth'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $placebirth = $_POST['placebirth'];


        $insert_query = "INSERT INTO trainee (srn_number, register_place, fname, mname, lname, suffix, address, gender, position, civil_status, date_birth, contact, email, place_of_birth) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $conn->prepare($insert_query);
        $stmt->bind_param("ssssssssssssss", $srn_number, $register_place, $fname, $mname, $lname, $suffix, $address, $gender, $position, $civilstatus, $birth, $contact, $email, $placebirth);

        // Execute the statement
        if($stmt->execute()) {
            header("Location: index.php");
            exit(); 
        } else {
            echo "Error: " . $insert_query . "<br>" . $conn->error;
        }

        $stmt->close();
    }
    $conn->close();
?>
