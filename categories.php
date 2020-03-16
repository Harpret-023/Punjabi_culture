<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include_once "headerfiles.php";
    ?>
</head>
<body>
<?php
include_once "adminheader.php"
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Categories</h1>
        </div>
    </div>
    <form action="insert_admin.php" method="post">
        <div class="form-group row">
            <label for="username" class="col-md-2">Category name</label>
            <div class="col-md-10">
                <input type="text" name="catname" class="form-control" data-rule-required="true" data-rule-email="true"
                       id="catname"
                       placeholder="category name">
            </div>
        </div>

        <div class="form-group row">
            <label for="username" class="col-md-2">Description</label>
            <div class="col-md-10">
                <textarea name="description" class="form-control" data-rule-required="true" data-rule-email="true"
                          id="description" placeholder="description"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="username" class="col-md-2"></label>
            <div class="col-md-10">
                <input type="submit" class="btn btn-primary">
            </div>
        </div>

        </div>
    </div>
</div>
</body>
</html>
