<!DOCTYPE html>
<html>
<head>
	<title>EDIT user</title>
</head>
<body>
    {{--<a href='/home'> Back </a> |
    <a href='/logout'> logout</a> 
  --}}
    <h3> EDIT User</h3>

	<form method="post">
		@csrf
	<table>
		<tr>
			<td>Product Name</td>
			<td><input type="text" name="productname" value="{{$product->name}}"></td>
		</tr>
		<tr>
			<td>Price</td>
			<td><input type="text" name="price" value="{{$product->price}}"></td>
		</tr>
        <tr>
			<td>Conditon</td>
			<td><input type="text" name="condition" value="{{$product->product_condition}}"></td>
		</tr>
        <tr>
			<td>category</td>
			<td><input type="text" name="category" value="{{$product->category}}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="update" value="update"></td>
		</tr>
	</table>
	</form>
</body>
</html>