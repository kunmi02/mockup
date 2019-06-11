<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$link = mysqli_connect("localhost", "root", "","horoscope");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sc =  mysqli_real_escape_string($link, $_REQUEST['date']);
// Attempt insert query execution
$sql = "INSERT INTO result (birthday) VALUES ('$sc')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
$anwer="SELECT horoscope_detail from result where birthday = '$sc' ";

if(mysqli_query($link, $anwer)){
    echo $anwer;
} 
 
// Close connection
mysqli_close($link);
}
?>