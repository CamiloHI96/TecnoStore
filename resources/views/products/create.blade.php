<!DOCTYPE html>
<html>
<head>
    <title>Crear Producto</title>
</head>
<body>

<h1>Crear Producto</h1>

<form action="{{ route('products.store') }}" method="POST">

@csrf

<label>Codigo</label><br>
<input type="number" name="codigo"><br><br>

<label>Nombre</label><br>
<input type="text" name="name"><br><br>

<label>Categoria</label><br>
<input type="text" name="category"><br><br>

<label>Precio</label><br>
<input type="number" name="price"><br><br>

<label>Stock</label><br>
<input type="number" name="stock"><br><br>

<button type="submit">Guardar</button>

</form>

<br>

<a href="{{ route('products.index') }}">Volver</a>

</body>
</html>