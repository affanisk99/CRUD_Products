<html>
<head>
<title>Products | CRUD_Products</title>
<body>
<a href="/">Go Back</a>
<h1>CRUD Product</h1>
<a href="/products/create">Add New</a>
<br / >
<br / >
<table border="1">
    <tr>
        <th>name</th>
        <th>price</th>
        <th>unit id</th>
        <th>brand id</th>
        <th>sku</th>
        <th>description</th>
        <th>opsi</th>
    </tr>
    <tr>
        @foreach ($products as $p)
        <td>{{$p->name}}</td>
        <td>{{$p->price}}</td>
        <td>{{$p->unit_id}}</td>
        <td>{{$p->brand_id}}</td>
        <td>{{$p->sku}}</td>
        <td>{{$p->product_description}}</td>
        <td>
        	<a href="/products/edit/{{$p->id}}">Edit Data</a>
        	<a href="/products/destroy/{{$p->id}}">Delete Data</a>
    </tr>
    @endforeach
    </table>
</form>
</body>
</head>
</html>