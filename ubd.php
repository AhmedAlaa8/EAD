<?php

include "./functions.php";

if (isset($_GET['id'])) {

    $id= $_GET['id'];
    
    $todo= $_POST['todo'];
    
    ubd($x,$todo,$id);
}


header('location:./index.php');

?>