<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/mystyle.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header class="p-3">
        <h1 class="">موجودی انبار</h1>   
    </header>
    <?php
    ?>
    <div class="container w3-center w3-gray w3-card">
        <br>
        <a href="new_item.php" class="btn btn-secondary">New item</a>
    </div>
    <br>
    <section class="container">
    <table class="table table-striped table-hover table-bordered">
        <?php
            require('connection.php');
            $sql = $conn->query("select * from item");
            if($sql && $sql->num_rows>0){
                ?>
                
                    <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Desc</th>
                        <th>Date</th>
                        <th></th>

                    </tr>
                <?php
                while($items = $sql->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo($items['name']);?></td>
                        <td><?php echo($items['quantity']);?></td>
                        <td><?php echo($items['price']);?></td>
                        <td><?php echo($items['description']);?></td>
                        <td><?php echo($items['reg_date']);?></td>
                        <td><a href="javascript:void(0)" onClick="do_delete(<?php echo($items['id']);?>)" class="btn btn-danger">Delete </a> &nbsp;
                        <a href="new_item.php?id=<?php echo($items['id']."&name=".$items['name']."&q=".$items['quantity']."&price=".$items['price']."&desc=".$items['description']);?>" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                    <?php
                }
            }
        ?>
        <table>
    </section>
    <script type='text/javascript'>
    function do_delete(id){
        if(confirm('آیا برای حذف این جنس مطمن هستید؟')){
            location.assign('delete.php?id='+id);
        }
    }
    </script>
</body>
</html>