
<?php


include "./functions.php";

$data=select($x);
 
// var_dump($data['id']);


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello</title>
  </head>
  <body>
   
  <div class="container">
        <form class="row" method="POST" action="insert.php">
            <div class="col-8">
            <h1>Hello </h1>
                <div class="mb-3">
                  
                    <input name="todo" type="text" class="form-control">
                </div>
            </div>
            <div class="col-4">
                <button type="submit" class="btn btn-primary" style="margin-top: 55px;">
                    Submit
                </button>
            </div>
        </form>
        <div class="row">
            <ul class="list-group">

            <?PHP foreach($data as $zz):?>

              <li class="list-group-item"><?=$zz['todo']?>
            <a href="./delete.php?id=<?=$zz['id']?>" class="btn btn-danger" style="float:right;">
          Delete
          </a>
            <a href="./Up.php?id=<?=$zz['id']?>" class="btn btn-success" style="float:right;">
          UPDATE
          </a>
            </li>

              <?php  endforeach?>
            </ul>
        </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>