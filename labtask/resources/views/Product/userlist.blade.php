<!DOCTYPE html>
<html>
<head>
	<title>Product List</title>
</head>
<body>
     
    {{--<a href='/home'> Back </a> |
    <a href='/logout'> logout</a> 
    --}}
    <h3> Product List</h3>
	<table border="1">
		<tr>
            <td>Name</td>
			<td>Price</td>
			<td>Condition</td>
            <td>Category</td>
            <td>Action</td>
		</tr>
        @foreach ($userlist as $product)
            <tr>
                <td>{{$product['name']}}</td>
                <td>{{$product['price']}}</td>
                <td>{{$product['product_condition']}}</td>
                <td>{{$product['category']}}</td>
                <td>
                    <a href="/product/{{$product['name']}}/edit/"> Edit</a>
                    <a href="/product/{{$product['name']}}/delete/">Delete</a>
                


                    {{--
                        <form action="/product/{{$product['name']}}/" method="DELETE">
                        <input type="submit" value="Delete" />
                        </form>
                        <input type="hidden" name="_method" value="delete" />
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a href="/user/details/{{$user['id']}}"> Details</a> |
                    <a href="/user/edit/{{$user['id']}}"> Edit</a> |
                    <a href="/user/delete/{{$user['id']}}"> Delete</a> 
                --}}
                </td>
            </tr>
        @endforeach
 	</table>
</body>
</html>