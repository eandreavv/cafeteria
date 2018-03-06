<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Editar Comida</h1>
    <form method="POST" action="{{ route('comidas.update',array('comidas'=>$comida->id)) }}">
        {{ csrf_field() }}
        <label>Nombre:</label>
        <input type="text" name="txtNombre" value"{{comida->nombre}}">
        <label>Precio:</label>
        <input type="text" name="txtPrecio" value"{{comida->precio}}">
        <button type="submit">Actualizar comida</button>

    </form>
</body>
</html>