
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>

    <?php include_once ('./header.php');?>

</head>

<body>
<div>
 	   <h3 style="color: red; background-color: yellow;" align="center">Add Products</h3>
 </div>

 <form action="../Controller/createProduct.php" method="POST" enctype="multipart/form-data">
  <label for="Name">Name:</label><br>
  <input type="text" id="Name" name="Name"><br>
  <label for="Buy_Price">Buy Price:</label><br>
  <input type="text" id="Buy_Price" name="Buy_Price"><br>
  <label for="Sell_Price">Sell Price:</label><br>
  <input type="text" id="Sell_Price" name="Sell_Price"><br>
  <input type="file" name="image"><br><br>
  <input type="submit" name = "createProduct" value="Create">
  <input type="reset"> 
</form> 
</body>
</html>

<?php 
    include ('./footer.php');
?>