<?php
require_once ("functionfirst.php");
require_once ("operation.php");


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Store</title>
    <link rel="stylesheet" href="fontawesome.css">
    <link rel="stylesheet" href="bootstrap.min.css">
  <style>
      .d-flex button{
          margin:5px;

      }
      .edit {
          cursor: pointer;

      }
  </style>
</head>
<body>
<main>
    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded " ><i class="fa fa-slideshare"></i> Book Store</h1>
        <div class="d-flex justify-content-center">
            <form action="" method="post" class="w-50">
                <div class="pt-2">
                    <?php  inputElement("Book ID","Book_ID","fa fa-book"); ?>
                </div>
                <div class="pt-2">
                    <?php  inputElement("Book_Name","B_name","fa fa-user"); ?>
                </div>
                <div class="row pt-2">
                    <div class="col">
                        <?php  inputElement("Book_Publisher","B_publisher","fa fa-user"); ?>
                    </div>
                    <div class="col">
                        <?php  inputElement("Book_Price","B_price","fa fa-id"); ?>
                    </div>

                </div>

                </div>
<div class="d-flex justify-content-center" >

    <?php  buttonElement("Create","Create","btn btn-primary","Create"); ?>
    <?php  buttonElement("Refresh","Refresh","btn btn-success","Refresh"); ?>
    <?php  buttonElement("Delete","Delete","btn btn-danger","Delete"); ?>
    <?php  buttonElement("Update","Update","btn btn-primary","Update"); ?>

</div>
<div class="container bg-success">
    <table class="table">
        <thead class="bg-success">
        <tr>
            <th>ID</th>
            <th>Book Name</th>
            <th>Book Publisher</th>
            <th>Book Price</th>
            <th> Edit</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Physics</td>
            <td>H.C Verma</td>
            <td>350 INR</td>
            <td><i class="fa fa-edit edit"></i> </td>



        </tr>
        </tbody>
    </table>
</div>
            </form>
        </div>
    </div>

</main>

</body>
</html>
