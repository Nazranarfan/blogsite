<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "junior";
$conn = new mysqli($servername , $username , $password , $database);
    if($conn->connect_error){
        die("Could not connect" . $conn->connect_error);
    }

    if($_GET){
        if($_GET['action'] == 'update-btn'){
            $id = $_GET['id'];
            $email   = $_GET['email'];  
            $user    = $_GET['uname'];
            $country = $_GET['country'];

        
            $sql = "UPDATE `juniortable` SET `email`='$email' , `username`='$user' , `country`='$country' WHERE `id`=$id";
            $result = $conn->query($sql);
            header("Location: home.php");
            $conn->close();
            die();

        } elseif($_GET['action'] == 'delete-btn'){
            $id = $_GET['id'];
            $sql = "DELETE FROM `juniortable` WHERE id=$id";
            $result = $conn->query($sql);
            header("Location: ../post-first/home.php");
            $conn->close();
            die();
        }
    } else {      
        $email = $_POST['email'];  
        $user = $_POST['uname'];
        $country = $_POST['country'];

        $sql = "INSERT INTO `juniortable` (`email` , `username` , `country`) VALUES ( '$email' , ' $user' , '$country')";
        if ($conn->query($sql) === TRUE){
            echo "Succesfully Sign-Up";
            header("Location: ../post-first/home.php");
            die();
        }
        else {
            echo "Unsuccesful Sign-Up" . $sql . $conn->error;
            header("Location: /../post-first/sign-up.php");
            die();
        }
        $conn->close();
    }
?>