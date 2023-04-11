<?php

$firstNameQ = $_POST["firstN"];
$lastNameQ = $_POST["lastN"];
$emailQ = $_POST["emailA"];
$phoneNumberQ = filter_input(INPUT_POST, "phoneN", FILTER_VALIDATE_INT);
$descriptionQ = $_POST["descriptionQ"];

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

    $sql = "INSERT INTO questionform (firstName, lastName, email, phoneNumber, QuestionDescription)
            VALUES (?, ?, ?, ?, ?)";

    $stmt = mysqli_stmt_init($db);

    if ( ! mysqli_stmt_prepare($stmt, $sql)) {
        die(mysqli_error($db));
    }

    mysqli_stmt_bind_param($stmt, "sssis", $firstNameQ, $lastNameQ, $emailQ, $phoneNumberQ, $descriptionQ);

    mysqli_stmt_execute($stmt);

    echo("record saved!");
    
?>