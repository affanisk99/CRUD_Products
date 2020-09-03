<!DOCTYPE html>
<html>
<head>
	<title>Products | CRUD_PRODUCT</title>
</head>
<body>
	<a href="/products">Back</a><br/>
	<h1>EDIT Product</h1>
	<form action="/products/update/{{$products->id}}" method="POST">
		@csrf
		Name : <br/><input type="text" name="name" value="{{$products->name}}"><br/>
		Price : <br/><input type="text" name="price" value="{{$products->price}}"><br/>
		Unit ID : <br/><input type="text" name="unit_id" value="{{$products->unit_id}}"><br/>
		Brand ID : <br/><input type="text" name="brand_id" value="{{$products->brand_id}}"><br/>
		SKU : <br/><input type="text" name="sku" value="{{$products->sku}}"><br/>
		Description :<br/><input type="text" name="product_description" value="{{$products->product_description}}"><br/>
		<br>
		<button type="submit" value="submit">SUBMIT</button>
	</form>
</body>
</html>