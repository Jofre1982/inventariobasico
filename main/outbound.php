<?php
session_start();
require_once "../Database/Database.php";
if ($_SESSION['username'] == null) {
    echo "<script>alert('Please login.')</script>";
    header("Refresh:0 , url = ../index.html");
    exit();
}
if ($_POST['id'] != null && $_POST['value'] != null) {

    $result = trim($_POST['value']);
    $id = trim($_POST['id']);

    $sql = "UPDATE product SET amount = (amount - " . $result . ") WHERE id = '" . $id . "'";

    if ($conn->query($sql)) {
        echo "<script>alert('Proceso completado exitósamente')</script>";
        header("Refresh:0 , url =../list.php");
        exit();
    } else {
        echo "<script>alert('Inconvenientes para realizar el proceso')</script>";
        header("Refresh:0 , url =../list.php");
        exit();
    }
} else {
    echo "<script>alert('Por favor diligencia todos los campos')</script>";
    header("Refresh:0 , url = ../list.php");
    exit();
}
mysqli_close($conn);
