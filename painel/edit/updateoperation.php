<?php
session_start();
include('../connection.php');
$connection = new createConnection();
$connection_ref = $connection->connectToDatabase();


$selected_table_name = $_SESSION["tblname"];


$wrecord = $_GET['wrecord'];
$wcolumn = $_GET['wcolumn'];
$wpm = $_GET['wvalue'];


$wrecord = mysqli_real_escape_string($connection_ref, $wrecord);
$wcolumn = mysqli_real_escape_string($connection_ref, $wcolumn);
$wpm = mysqli_real_escape_string($connection_ref, $wpm);

$allsel = "select * from " . $selected_table_name;
$res = mysqli_query($connection_ref, $allsel);


$finfo = mysqli_fetch_field_direct($res, $wcolumn);

$fld_name = $finfo->name;
$sql = "UPDATE " . $selected_table_name . " SET " . $fld_name . "='" . $wpm . "' WHERE id=" . $wrecord;


$a = mysqli_query($connection_ref, $sql);
?>