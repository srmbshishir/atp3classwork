<!DOCTYPE html>
<html>
<head>
	<title>Create Product</title>
</head>
<body>
    {{--<a href='/home'> Back </a> |
    <a href='/logout'> logout</a> 
  --}}
    <h3> Create New Product</h3>

	<form method="post" enctype="multipart/form-data">
		@csrf
	<table>
		<tr>
			<td>Product name</td>
			<td><input type="text" name="productname"></td>
		</tr>
		<tr>
			<td>Price</td>
			<td><input type="text" name="price"></td>
		</tr>
        <tr>
			<td>Condition</td>
			<td><input type="text" name="condition"></td>
		</tr>
        <tr>
			<td>Category</td>
			<td><input type="text" name="category"></td>
		</tr>
		<tr>
			<td>Image</td>
			<td><input type="file" name="image"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="create" value="Create"></td>
		</tr>
	</table>
	</form>
</body>
</html>