<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include "headerfiles.php";
    ?>
</head>
<body>
<?php
include "adminheader.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">View Admin</h1>
        </div>
    </div>
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Sr.No</th>
            <th>email</th>
            <th>name</th>
            <th>Type</th>
            <th colspan="2">Controls</th>
        </tr>
        </thead>
        <?php
        $k=1;
        $s="select * from admin";
        $result=mysqli_query($conn,$s);
        while ($row=mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $k++; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['type']; ?></td>
                <td><a href="editAdmin.php?q=<?php echo $row['email'] ?>"><i class="fa fa-edit"></i> Edit</a></td>
                <td><a href="deleteAdmin.php?q=<?php echo $row['email'] ?>"><i class="fa fa-trash"></i> delete</a></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
</body>
</html>

