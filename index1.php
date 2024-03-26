<?php
$num = 5;
$num2 = 10;
$product_name = "Watch";
$price = 1500;
echo "Hello world!";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .cardRed{
        height:170px;
        width:170px;
        border:1px solid black;
        background-color: red;
    }
    .cardBlue{
        height:170px;
        width:170px;
        border:1px solid black;
        background-color: blue;
    }
</style>
<body>
    <div class="container">
        <div class="main">
            <img src="" alt="">
        </div>
        <h3><?php echo $product_name ?></h3>
        <h4><?php echo $price ?></h4>
    </div>

<?php
$productName = ["Watch","Mobile","headphone","laptop"];
$productPrice = [1500,5222,14100,3241];
for($i=0 ; $i < count($productName);$i++){

if($i % 2 ==0){

?>
    <div class="cardRed">
        <h1><?php echo $productName[$i] ?></h1>
        <h3><?php echo $productPrice[$i] ?></h3>
        <h1><?php echo time() ?></h1>
    </div>
    <?php
}
else{
?>
    <div class="cardBlue">
        <h1><?php echo $productName[$i] ?></h1>
        <h3><?php echo $productPrice[$i] ?></h3>
        <h1><?php echo time() ?></h1>
    </div>
<?php
}

?>
    

<?php
}
?>
</body>
</html>