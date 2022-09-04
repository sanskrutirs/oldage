<?php
    include("config.php");
    if(isset($_POST['submit'])){    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $sql = mysqli_query($conn,"INSERT INTO question (name,email,age,phone,message) VALUES ('$name','$email','$age','$phone','$message')") ;

        if ($sql) {
            header('location: suggest.php');
        } else {
            echo "Something was wrong";
        }
    }
?>