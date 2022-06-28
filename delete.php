<?php



include "functions.php";





if (isset($_GET['id'])) {

    $id = $_GET['id'];

    delete($x, $id);
}
header('location:./index.php');
