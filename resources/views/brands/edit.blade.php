<!DOCTYPE html>
<html>
<head>
	<title>E_Brands | CRUD_PRODUCT</title>
</head>
<body>
	<a href="/brands">Back</a><br/>
	<h1>EDIT Brand</h1>
	<form action="/brands/update/{{$brands->id}}" method="POST">
		@csrf
		Name : <br/><input type="text" name="name" value="{{$brands->name}}"><br/>
		Description :<br/><input type="text" name="description" value="{{$brands->description}}">
		<br>
		<button type="submit" value="submit">SUBMIT</button>
	</form>
</body>
</html>