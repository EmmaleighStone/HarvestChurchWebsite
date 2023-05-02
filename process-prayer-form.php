<?php

$firstName = $_POST["first"];
$lastName = $_POST["last"];
$email = $_POST["email"];
$phoneNumber = filter_input(INPUT_POST, "phone", FILTER_VALIDATE_INT);
$prayerDescription = $_POST["descriptionP"];

//var_dump($firstName, $lastName, $email, $phoneNumber, $prayerDescription);


//connect to db
$host = "localhost";
    $username = "root";
    $password = "";
    $db_name = "harvestchurch";

    @$db = mysqli_connect($host, $username, $password, $db_name) or die(include "404.php");
    $connection_error = mysqli_connect_error();
    if ($connection_error != null)
    {
        echo $connection_error;
    }

    echo("Connection Successful!");

    $sql = "INSERT INTO prayerrequest (firstName, lastName, email, phoneNumber, prayerDescription)
            VALUES (?, ?, ?, ?, ?)";

    $stmt = mysqli_stmt_init($db);

    if ( ! mysqli_stmt_prepare($stmt, $sql)) {
        die(mysqli_error($db));
    }
    else{
        header("location:home.html");
    }

    mysqli_stmt_bind_param($stmt, "sssis", $firstName, $lastName, $email, $phoneNumber, $prayerDescription);

    mysqli_stmt_execute($stmt);

    alert("record saved!");
    
?>
