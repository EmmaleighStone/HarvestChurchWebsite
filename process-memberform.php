<?php

$firstName = $_POST["firstName"];
$middleInt = $_POST["middleInt"];
$lastName = $_POST["lastName"];
$Birthday = $_POST["Birthday"];
$StreetAddress = $_POST["StreetAddress"];
$city = $_POST["city"];
$state = $_POST["state"];
$zipCode = filter_input(INPUT_POST, "zipCode", FILTER_VALIDATE_INT);
$email = $_POST["email"];
$cellPhone = filter_input(INPUT_POST, "cellPhone", FILTER_VALIDATE_INT);
$homePhone = filter_input(INPUT_POST, "homePhone", FILTER_VALIDATE_INT);
$status = $_POST["status"];
$anniversary = $_POST["anniversary"];

$spouseFirstName = $_POST["spouseFirstName"];
$spouseMiddleInt = $_POST["spouseMiddleInt"];
$spouseLastName = $_POST["spouseLastName"];

$childFirstName1 = $_POST["childFirstName1"];
$childMiddleInt1 = $_POST["childMiddleInt1"];
$childLastName1 = $_POST["childLastName1"];
$childGender1 = $_POST["childGender1"];
$childBirthday1 = $_POST["childBirthday1"];

$childFirstName2 = $_POST["childFirstName2"];
$childMiddleInt2 = $_POST["childMiddleInt2"];
$childLastName2 = $_POST["childLastName2"];
$childGender2 = $_POST["childGender2"];
$childBirthday2 = $_POST["childBirthday2"];

$childFirstName3 = $_POST["childFirstName3"];
$childMiddleInt3 = $_POST["childMiddleInt3"];
$childLastName3 = $_POST["childLastName3"];
$childGender3 = $_POST["childGender3"];
$childBirthday3 = $_POST["childBirthday3"];

$childFirstName4 = $_POST["childFirstName4"];
$childMiddleInt4 = $_POST["childMiddleInt4"];
$childLastName4 = $_POST["childLastName4"];
$childGender4 = $_POST["childGender4"];
$childBirthday4 = $_POST["childBirthday4"];

$Music = $_POST["Music"];

$playInstrument = $_POST["playInstrument"];
$instrument = $_POST["instrument"];
$yearsOfPlaying = filter_input(INPUT_POST, "yearsOfPlaying", FILTER_VALIDATE_INT);

$nursery = $_POST["nursary"];
$toddlers = $_POST["toddlers"];
$primaryM = $_POST["primaryM"];
$intermediate = $_POST["intermediate"];
$juniorHigh = $_POST["juniorHigh"];
$highSchool = $_POST["highSchool"];
$collegeAndCareer = $_POST["collegeAndCareer"];
$adult = $_POST["adult"];
$senior = $_POST["senior"];
$otherSchMinistry = $_POST["otherSchMinistry"];

$bibleTeacher = $_POST["bibleTeacher"];
$prayerTeam = $_POST["prayerTeam"];

$greeter = $_POST["greeter"];
$usher = $_POST["usher"];

$streetMinistry = $_POST["streetMinistry"];
$addictionMinistry = $_POST["addictionMinistry"];

$custodial = $_POST["custodial"];
$mechanical = $_POST["mechanical"];
$electrical = $_POST["electrical"];
$construction = $_POST["construction"];
$lawnCare = $_POST["lawnCare"];
$groundsKeeper = $_POST["groundsKeeper"];
$busDriver = $_POST["busDriver"];

$foodPantHelper = $_POST["foodPantHelper"];
$foodPantDriver = $_POST["foodPantDriver"];

$soundTech = $_POST["soundTech"];
$videoTech = $_POST["videoTech"];

$kitchenHelper = $_POST["kitchenHelper"];
$kitchenCook = $_POST["kitchenCook"];
$kitchenClean = $_POST["kitchenClean"];
$otherGenMinistry = $_POST["otherGenMinistry"];

$classMonitor = $_POST["classMonitor"];
$classWorker = $_POST["classWorker"];

$math = $_POST["math"];
$english = $_POST["english"];
$reading = $_POST["reading"];

$notes = $_POST["notes"];



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


?>