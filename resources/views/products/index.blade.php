<!DOCTYPE html>
<html>
<head>
    <title>Lista de Productos</title>
</head>
<body>

<h1>Lista de Productos</h1>

<a href="{{ route('products.create') }}">Nuevo Producto</a>

<br><br>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>ID</th>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Precio</th>
            <th>Stock</th>
        </tr>
    </thead>

    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->codigo }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->stock }}</td>
        </tr>
        @endforeach
    </tbody>

</table>

</body>
</html>