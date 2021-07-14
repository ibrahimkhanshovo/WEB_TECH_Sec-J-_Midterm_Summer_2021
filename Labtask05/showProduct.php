<?php  
require_once 'controller/productInfo.php';

$Myproject = fetchProduct($_GET['id']);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th> Name </th>
		<th> Buying Price </th>
		<th> Selling Price </th>
	</tr>
	<tr>
		<td><a href="showProduct.php?id=<?php echo $Myproject['id'] ?>"><?php echo $Myproject['name'] ?></a></td>
		<td><?php echo $Myproject['buyingprice'] ?></td>
		<td><?php echo $Myproject['sellingprice'] ?></td>
	</tr>

</table>


</body>
</html>