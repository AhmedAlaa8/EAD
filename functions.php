<?php

$x = mysqli_connect("localhost", "root", "", "eda");

function insert($x)
{

  if (isset($_POST['todo'])) {

    $z = $_POST['todo'];



    $zx = "INSERT INTO todo(`todo`) VALUES ('$z') ";

    mysqli_query($x, $zx);
  }
}

function select($x)
{

  $z = "SELECT * FROM todo";

  $c = mysqli_query($x, $z);

  return  mysqli_fetch_all($c, MYSQLI_ASSOC);
}

function delete($x, $id)
{

  $z = "DELETE FROM todo WHERE id = $id";

  $c = mysqli_query($x, $z);
}

function sel($x, $id)
{


  $z = "SELECT * FROM todo WHERE id = $id";

  $c = mysqli_query($x, $z);

  return  mysqli_fetch_assoc($c);
}


function ubd($x, $todo, $id)
{

  $z = "UPDATE todo set todo='$todo' WHERE id = $id";

  $c = mysqli_query($x, $z);
}

function sell($x, $id)
{



  $z = "SELECT * FROM todo WHERE id = $id";

  $c = mysqli_query($x, $z);

  return  mysqli_fetch_assoc($c);
}
