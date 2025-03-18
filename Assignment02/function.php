<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    // $id = htmlspecialchars($_POST['id']);
    $name = htmlspecialchars($_POST['name']);
    $gender = htmlspecialchars($_POST['gender']);
    $age = htmlspecialchars($_POST['age']);
    $course = htmlspecialchars($_POST['course']);
    $email = htmlspecialchars($_POST['email']);

    if (!empty($name) && !empty($email)) {
        echo "<h2>Managment Student Submitted Successfully!</h2>";
        echo "<p>Name   :</strong> $name</p>";
        echo "<p>Gender :</strong> $gender</p>";
        echo "<p>Age    :</strong> $age</p>";
        echo "<p>Course :</strong> $course</p>";       
        echo "<p>Email  :</strong> $email</p>";
    } else {
        echo "<h2>Error: All fields are required.</h2>";
    }
}
else {
    echo "<h2>Invalid Request</h2>";
}

include('update.php');
include('delete.php');
?>



