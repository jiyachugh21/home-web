<?php
$firstName= $_POST['firstName'];
$lastName=$_POST['lastName'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=$_POST['password'];
$number=$_POST['number'];

$conn=new mysqli('localhost','root','test1');
if($conn->connect_error){
    die('conection failed :'.conn->connect_error);
}
else{
    $stmt= $conn->prepare("insert into registeration(firstName, lastName, gender, email, password,number)values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $firstName,$lastName, $gender, $email,$password, $number);
    $stmt->execute();
    echo"registration successfully....";
    $stmt->close();
    $conn->close();
}
 ?>