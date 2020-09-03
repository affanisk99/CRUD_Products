
<html>
<head>
<title>Brands | CRUD_Products</title>
<body>
<a href="/">Go Back</a>
<h1>CRUD Brands</h1>
<a href="/brands/create">Add New</a>
<br / >
<br / >
<table border="1">
    <tr>
        <th>name</th>
        <th>description</th>
        <th>opsi</th>
    </tr>
    <tr>
        @foreach ($brands ?? '' as $b)
        <td>{{$b->name}}</td>
        <td>{{$b->description}}</td>
        <td>
        	<a href="/brands/edit/{{$b->id}}">Edit Data</a>
        	<a href="/brands/destroy/{{$b->id}}">Delete Data</a>
    </tr>
    @endforeach
    </table>
</form>
</body>
</head>
</html>