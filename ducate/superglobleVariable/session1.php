<?php
session_start();
$_SESSION['name']="ducat";
$_SESSION['contact']=989564878;
$_SESSION['city']="Ghaziabad";
$_SESSION['subject']="php";


echo $_SESSION['name'];

?>