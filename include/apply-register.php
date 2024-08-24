<?php
require "db.php";


if(isset($_POST['register-submit'])){

    $name = $_POST['name'];

    $roll = $_POST['roll'];
    $department = $_POST['department'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];

    $roll = (int) $roll;

    // if(empty($name) || empty($roll) || empty($department) || empty($phone) || empty($gender)){
    //     header("Location: ". $_SERVER['PHP_SELF'] ."?error=emptyfield&name=" .$name);

    //     var_dump("lalalala");
    //     exit; 
    // }

    $sql = "INSERT INTO students (name, roll, department, phone, gender) VALUES ('$name', $roll, '$department', '$phone', '$gender')";
    $query = mysqli_query($conn, $sql);

    if($query){
        header("Location:". $_SERVER['PHP_SELF']. "?success=Register success");
        exit;
    }else{
        header("Location:". $_SERVER['PHP_SELF']. "?error=". mysqli_error($conn));
        exit;
    }

}else{
    echo "error".mysqli_error($conn);
}


?>