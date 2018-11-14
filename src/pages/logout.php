<?php
session_start();
unset($_SESSION['AUTHEN']['UID']);
unset($_SESSION['AUTHEN']['FNAME']);
unset($_SESSION['AUTHEN']['LNAME']);
unset($SESSION['AHTHEN']['EMAIL']);
unset($_SESSION['AUTHEN']['LEVEL']);
unset($_SESSION['AUTHEN']['POSITION']);
unset($_SESSION['AUTHEN']['ADDRESS']);
unset($_SESSION['AUTHEN']['TEL']);
header('location: ../../index.php');
die();
 ?>
