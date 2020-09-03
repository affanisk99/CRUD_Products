<!DOCTYPE html>
<html>
<head>
	<title>C_UNIT | CRUD_PRODUCT</title>
</head>
<body>
	<a href="/units">Back</a><br/>
	<h1>Create Unit</h1>
	<form action="/units/store" method="POST">
		@csrf
		Name : <br/><input type="text" name="name"><br/>
		Description :<br/><input type="text" name="description"><br/>
		<br>
		<button type="submit" value="submit">SUBMIT</button>
	</form>
</body>
</html>