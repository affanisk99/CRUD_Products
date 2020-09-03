<!DOCTYPE html>
<html>
<head>
	<title>C_BRAND | CRUD_PRODUCT</title>
</head>
<body>
	<a href="/brands">Back</a><br/>
	<h1>Create Brand</h1>
	<form action="/brands/store" method="POST">
		@csrf
		Name : <br/><input type="text" name="name"><br/>
		Description :<br/><input type="text" name="description"><br/>
		<br>
		<button type="submit" value="submit">SUBMIT</button>
	</form>
</body>
</html>