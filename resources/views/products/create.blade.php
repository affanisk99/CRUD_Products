<!DOCTYPE html>
<html>
<head>
	<title>C_PRODUCTS | CRUD_PRODUCT</title>
</head>
<body>
	<a href="/products">Back</a><br/>
	<h1>Create Product</h1>
	<form action="/products/store" method="POST">
		@csrf
		Name : <br/><input type="text" name="name"><br/>
		Price : <br/><input type="text" name="price"><br/>
		Unit ID : <br/><input type="text" name="unit_id"><br/>
		Brand ID : <br/><input type="text" name="brand_id"><br/>
		SKU	: <br/><input type="text" name="sku"><br/>
		Product Description :<br/><input type="text" name="product_description"><br/>
		<br>
		<button type="submit" value="submit">SUBMIT</button>
	</form>
</body>
</html>