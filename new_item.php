<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$id = $name = $price = $desc = $quantity = "";
$type = "add";
if(isset($_GET['q'])){
    $id = $_GET['id'];
    $name = $_GET['name'];
    $price = $_GET['price'];
    $quantity = $_GET['q'];
    $desc = $_GET['desc'];
    $type ="edit";
}
?>
    <header class="p-3">
        <h1 class="">موجودی انبار</h1>   
    </header>
    <div class="new_item_form p-4 w3-card" style="margin-top:100px">
    <h2>Add new item</h2>
        <form action="add_item.php" method="post">
            <input type="hidden" name="type" value="<?php echo($type);?>">
            <input type="hidden" name="id" value="<?php echo($id);?>">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="<?php echo($name)?>" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" min="1" value="<?php echo($quantity)?>" name="quantity" class="form-control" id="quantity">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" min="1" name="price" value="<?php echo($price)?>" class="form-control" id="price">
            </div>
            <div class="form-group">
                <label for="desc">Description</label>
                <input type="text" name="desc" class="form-control" value="<?php echo($desc)?>" id="desc">
            </div>
            <br>
            <input type="submit" value="<?php if(isset($_GET['q'])) echo('Update'); else{ echo('A   dd');}?>" class="btn btn-primary form-control">
        </form>
    </div>
    
</body>
</html>