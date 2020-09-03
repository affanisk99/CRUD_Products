<!DOCTYPE html>
<html>
<head>
	<title>C_UNIT | CRUD_PRODUCT</title>
</head>
<body>
	<a href="/units">Back</a><br/>
	<h1>EDIT Unit</h1>
	<form action="/units/update/{{$units->id}}" method="POST">
		@csrf
		Name : <br/><input type="text" name="name" value="{{$units->name}}"><br/>
		Description :<br/><input type="text" name="description" value="{{$units->description}}">
		<br>
		<button type="submit" value="submit">SUBMIT</button>
	</form>
</body>
</html>