<?php 
session_start(); // Start der Session
if(isset($_POST['create'])){

    include "../../initials/dbconn.php";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    if(empty($name) ||empty($email) ||empty($phone) ||empty($address)){
$_SESSION['errorMessage'] = "All the fields are required";

    }
    else {
        $stmt = $conn->prepare("INSERT INTO clients(name,email,phone,address) values (?,?,?,?)");
    
        $stmt->bind_param("ssss", $name,$email,$phone,$address);
        $stmt->execute();
    
        $stmt->close();
        $conn->close();
        $_SESSION['successMessage'] = "User was added successfully";

        header("location: ../readAll/userTable.php");
        exit;
    }

}
else{
    $_SESSION['errorMessage'] = "An error accured while trying to the save the entry";
}
