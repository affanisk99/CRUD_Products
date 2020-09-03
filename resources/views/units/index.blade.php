
<html>
<head>
<title>UNIT | CRUD_Products</title>
<body>
<a href="/">Go Back</a>
<h1>CRUD UNIT</h1>
<a href="/units/create">Add New</a>
<br / >
<br / >
<table border="1">
    <tr>
        <th>name</th>
        <th>description</th>
        <th>opsi</th>
    </tr>
    <tr>
    	@foreach($units ?? '' as $u)
        <td>{{ $u->name }}</td>
        <td>{{ $u->description }}</td>
        <td>
        	<a href="/units/edit/{{$u->id}}">Edit Data</a>
        	<a href="/units/destroy/{{$u->id}}">Delete Data</a>
    </tr>
    	@endforeach
    </table>
</form>
</body>
</head>
</html>