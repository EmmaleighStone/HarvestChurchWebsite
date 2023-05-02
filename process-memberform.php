<?php

$firstName = $_POST["firstName"];
$middleInitial = $_POST["middleInitial"];
$lastName = $_POST["lastName"];
$birthday = $_POST["birthday"];
$StreetAddress = $_POST["streetAddress"];
$city = $_POST["city"];
$state = $_POST["stateM"];
$zipCode = filter_input(INPUT_POST, "zipCode", FILTER_VALIDATE_INT);
$email = $_POST["email"];
$cellPhone = $_POST["cellPhone"];
if (isset($_POST['homePhone'])) 
{     
    $homePhone = $_POST['homePhone']; }
     else 
     {     
        $homePhone = null; 
     }

if (isset($_POST['maritalStatus'])) 
{     
    $maritalStatus = $_POST['maritalStatus']; }
     else 
     {     
        $maritalStatus = null; 
     }
$anniversary = $_POST["anniversary"];
if (isset($_POST['anniversary'])) 
{     
    $anniversary = $_POST['anniversary']; }
     else 
     {     
        $anniversary = null; 
     }


if (isset($_POST['spouseFirstName'])) 
{     
    $spouseFirstName = $_POST['spouseFirstName']; }
     else 
     {     
        $spouseFirstName = null; 
     }

if (isset($_POST['spouseMiddleInt'])) 
{     
    $spouseMiddleInt = $_POST['spouseMiddleInt']; }
     else 
     {     
        $spouseMiddleInt = null; 
     }

if (isset($_POST['spouseLastName'])) 
{     
    $spouseLastName = $_POST['spouseLastName']; }
     else 
     {     
        $spouseLastName = null; 
     }

if (isset($_POST['spouseBirthday'])) 
{     
    $spouseBirthday = $_POST['spouseBirthday']; }
     else 
     {     
        $spouseBirthday = null; 
     }

$childFirstName1 = $_POST["childFirstName1"];
$childMiddleInt1 = $_POST["childMiddleInt1"];
$childLastName1 = $_POST["childLastName1"];
$childGender1 = $_POST["childGender1"];
if (isset($_POST['childGender1'])) 
{     
    $childGender1 = $_POST['childGender1']; }
     else 
     {     
        $childGender1 = null; 
     }
$childBirthday1 = $_POST["childBirthday1"];

$childFirstName2 = $_POST["childFirstName2"];
$childMiddleInt2 = $_POST["childMiddleInt2"];
$childLastName2 = $_POST["childLastName2"];
if (isset($_POST['childGender2'])) 
{     
    $childGender2 = $_POST['childGender2']; }
     else 
     {     
        $childGender2 = null; 
     }

$childBirthday2 = $_POST["childBirthday2"];

$childFirstName3 = $_POST["childFirstName3"];
$childMiddleInt3 = $_POST["childMiddleInt3"];
$childLastName3 = $_POST["childLastName3"];
if (isset($_POST['childGender3'])) 
{     
    $childGender3 = $_POST['childGender3']; }
     else 
     {     
        $childGender3 = null; 
     }

$childBirthday3 = $_POST["childBirthday3"];

$childFirstName4 = $_POST["childFirstName4"];
$childMiddleInt4 = $_POST["childMiddleInt4"];
$childLastName4 = $_POST["childLastName4"];
if (isset($_POST['childGender4'])) 
{     
    $childGender4 = $_POST['childGender4']; }
     else 
     {     
        $childGender4 = null; 
     }

$childBirthday4 = $_POST["childBirthday4"];

$Music = $_POST["musicGenre"];

$instrument = $_POST["instrument"];
$playInstrument = $_POST["playInstrument"];
$yearsOfPlaying = filter_input(INPUT_POST, "yearsOfPlaying", FILTER_VALIDATE_INT);

$sundaySchoolMinistry = $_POST["sundaySchoolMinistry"];
$sundaySchoolMinistryString = "";
foreach($sundaySchoolMinistry as $SSM)
    {
        $sundaySchoolMinistryString .= $SSM.",";
        
    }

$adult = $_POST["adult"];
$adultString = "";
foreach($adult as $adt)
    {
        $adultString .= $adt.",";
    }

$miscellaneous = $_POST["miscellaneous"];
$miscellaneousString = "";
foreach($miscellaneous as $misc)
    {
        $miscellaneousString .= $misc.",";
    }

$churchOutreach = $_POST["churchOutreach"];
$churchOutreachString = "";
foreach($churchOutreach as $chOutreach)
    {
        $churchOutreachString .= $chOutreach.",";
    }

$maintenance = $_POST["maintenance"];
$maintenanceString = "";
foreach($maintenance as $maint)
    {
        $maintenanceString .= $maint.",";
    }

$foodPantry = $_POST["foodPantry"];
$foodPantryString = "";
foreach($foodPantry as $foodPant)
    {
        $foodPantryString .= $foodPant.",";
    }

$mediaSpecialist = $_POST["mediaSpecialist"];
$mediaSpecialistString = "";
foreach($mediaSpecialist as $mediaSpec)
    {
        $mediaSpecialistString .= $mediaSpec.",";
    }

$kitchen = $_POST["kitchen"];
$kitchenString = "";
foreach($kitchen as $kitch)
    {
        $kitchenString .= $kitch.",";
    }

$classroom = $_POST["classroom"];
$classroomString = "";
foreach($classroom as $classr)
    {
        $classroomString .= $classr.",";
    }

$tutor = $_POST["tutor"];
$tutorString = "";
foreach($tutor as $tut)
    {
        $tutorString .= $tut.",";
    }

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



$sql = "INSERT INTO newmembers (firstName, middleInitial, lastName, birthday, streetAddress, 
        city, stateM, zipCode, email, cellPhone, homePhone, maritalStatus, anniversary, 
        spouseFirstName, spouseMiddleInt, spouseLastName, spouseBirthday,
        childFirstName1, childMiddleInt1, childLastName1, childGender1, childBirthday1,
        childFirstName2, childMiddleInt2, childLastName2, childGender2, childBirthday2,
        childFirstName3, childMiddleInt3, childLastName3, childGender3, childBirthday3,
        childFirstName4, childMiddleInt4, childLastName4, childGender4, childBirthday4,
        musicGenre, instrument, playInstrument, yearsOfPlaying,
        sundaySchoolMinistry,
        adult,
        miscellaneous,
        churchOutreach,
        maintenance,
        foodPantry,
        mediaSpecialist,
        kitchen,
        classroom,
        tutor,
        notes)
         
        VALUES ('$firstName', '$middleInitial', '$lastName', '$birthday', '$StreetAddress', 
                '$city', '$state', '$zipCode', '$email', '$cellPhone', '$homePhone', '$maritalStatus', '$anniversary',
                '$spouseFirstName', '$spouseMiddleInt', '$spouseLastName', '$spouseBirthday',
                '$childFirstName1', '$childMiddleInt1', '$childLastName1', '$childGender1', '$childBirthday1',
                '$childFirstName2', '$childMiddleInt2', '$childLastName2', '$childGender2', '$childBirthday2',
                '$childFirstName3', '$childMiddleInt3', '$childLastName3', '$childGender3', '$childBirthday3',
                '$childFirstName4', '$childMiddleInt4', '$childLastName4', '$childGender4', '$childBirthday4',
                '$Music', '$instrument', '$playInstrument', '$yearsOfPlaying',
                '$sundaySchoolMinistryString',
                '$adultString',
                '$miscellaneousString',
                '$churchOutreachString',
                '$maintenanceString',
                '$foodPantryString',
                '$mediaSpecialistString',
                '$kitchenString',
                '$classroomString',
                '$tutorString', 
                '$notes')";
                

//$stmt = mysqli_stmt_init($db);

$result = mysqli_query($db, $sql);         
if(! $result ) 
{             
    die('ERROR:'. mysqli_error($db));
} 
else{
    header("location:home.html");
}




echo("record saved!");
echo("Thank you!");


?>
