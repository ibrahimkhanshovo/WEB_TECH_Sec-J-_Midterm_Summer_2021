<?php  
require_once 'controller/productInfo.php';

$products = fetchAllProducts();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
</head>
<body>
<H1>DISPLAY</H1>
<table>
	<thead>
		<tr>
			<th> Name </th>
			<th> Buying Price </th>
			<th> Selling Price </th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($products as $i => $Myproject): ?>
			<tr>
				<td><a href="showProduct.php?id=<?php echo $Myproject['id'] ?>"><?php echo $Myproject['name'] ?></a></td>
		        <td><?php echo $Myproject['buyingprice'] ?></td>
		        <td><?php echo $Myproject['sellingprice'] ?></td>
		        <td><a href="editProduct.php?id=<?php echo $Myproject['id'] ?>">Edit</a>&nbsp<a href="controller/deleteProduct.php?id=<?php echo $Myproject['id'] ?>">Delete</a></td>
				
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>