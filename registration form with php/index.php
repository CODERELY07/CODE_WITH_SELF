<?php
    require_once '../connection/db.php';

    $sql = "SELECT selector FROM form_input WHERE name = 'register_place'";
    $result = $conn->query($sql);


    $sql_gender = "SELECT selector FROM form_input WHERE name = 'Gender'";
    $result_gender = $conn->query($sql_gender) or die($conn->error);

    $sql_status = "SELECT selector FROM form_input Where name = 'civil_status'";
    $result_status = $conn->query($sql_status) or die($conn->error);

    $sql_postion = "SELECT selector FROM form_input WHERE name = 'position'";
    $result_postion = $conn->query($sql_postion) or die($conn->error);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traine Registration Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">
        <form action="register.php" method="post">
            <div class="flex space-between">
                <div class="input-feild">
                    <label for="">SRN Number</label>
                    <input type="number" name="srn-number" id="srn-number">
                </div>
                <div class="input-feild">
                    <label for="">Naga Registration 03</label>
                    <select name="register-place" id="register-place">
                       <?php
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    $values = explode(',',$row['selector']);

                                    foreach($values as $value){
                                        echo "<option value='".$value."'> $value</option>";
                                    }
                                }
                            }else {
                                echo "<option>No data found</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="flex">
                <div class="input-feild all">
                    <label for="">First Name</label>
                    <input type="text" name="fname" id="fname">
                </div>
                <div class="input-feild all">
                    <label for="">Middle Name</label>
                    <input type="text" name="mname" id="mname">
                </div>
                <div class="input-feild all">
                    <label for="">Last Name</label>
                    <input type="text" name="lname" id="lname">
                </div>
                <div class="input-feild all">
                    <label for="">Suffix</label>
                    <select name="suffix" id="suffix">
                        <option value="hi">hi</option>
                    </select>
                </div>
            </div>
            <div class="flex">
                <div class="input-feild grow">
                    <label for="">Address</label>
                    <input type="text" name="address" id="address">
                </div>
                <div class="input-feild">
                    <label for="">Gender</label>
                    <select name="gender" id="gender">
                       <?php
                            if($result_gender->num_rows > 0){
                                while($row_gender = $result_gender->fetch_assoc()){
                                    $values_gender = explode(",", $row_gender['selector']);
                                    foreach($values_gender as $value_gender){
                                        echo "<option value='".$value_gender."'>$value_gender</option>";
                                    }
                                }
                            }
                       ?>
                    </select>
                </div>
            </div>
            <div class="flex space-between ">
                <div class="column">
                    <div class="input-feild flex">
                        <label for="">Rank/Postion</label>
                        <select name="position" id="position">
                            <?php
                                if($result_postion->num_rows > 0){
                                    while($row = $result_postion->fetch_assoc()){
                                        $values_position = explode("," , $row['selector']);

                                        foreach($values_position as $value_position){
                                            echo "<option value='".$value_position."'>$value_position</option>";
                                        }
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    <div class="input-feild flex">
                        <label for="">Date of Birth</label>
                        <input type="date" name="birth" id="birth">
                    </div>
                    <div class="input-feild flex">
                        <label for="">Contact</label>
                        <input type="tel" name="contact" id="contact">
                    </div>
                </div>
                <div class="column">
                    <div class="input-feild flex">
                        <label for="">Civil Status</label>
                        <select name="civilstatus" id="civilstatus">
                            <?php
                                if($result_status->num_rows > 0){
                                    while($row = $result_status->fetch_assoc()){
                                        $values_status = explode(",", $row['selector']);
                                        foreach($values_status as $value_status){
                                            echo "<option value='".$value_status."'>$value_status</option>";
                                        }
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    <div class="input-feild flex">
                        <label for="">Email</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="input-feild flex">
                        <label for="">Place of Birth</label>
                        <input type="placebirth" name="placebirth" id="placebirth">
                    </div>
                </div>
            </div>
            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</body>
</html>

<?php
    $conn->close();
?>
