<?php
session_start();
$passengerFN = $_POST['passengerFN'];
$passengerSN = $_POST['passengerSN'];

$_SESSION['passengerFN'] = $passengerFN;
$_SESSION['passengerSN'] = $passengerSN;

if (isset($_POST['luggage'])) {
    $_SESSION['luggage'] = 1;
    header('Location: luggage.html');
    exit();
} 
else {
    $_SESSION['luggage'] = 0;
    header('Location: finalStep.php');
    exit();
}

?>
