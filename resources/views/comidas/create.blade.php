<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Agregar Comidas</h1>
    <form method="POST" action="{{ route('comidas.store') }}">
        {{ csrf_field() }}
        <label>Nombre:</label>
        <input type="text" name="txtNombre">
        <label>Precio:</label>
        <input type="text" name="txtPrecio">
        <button type="submit">Agregar comida</button>

    </form>
</body>
</html>