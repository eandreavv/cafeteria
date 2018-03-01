<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Comidas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
    <h1>Comidas</h1>
    <button>Agregar Comida</button>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comida as $comida)
                <tr>
                    <td>{{$comida->nombre}}</td>
                    <td>{{$comida->precio}}</td>
                
                </tr>
            @endforeach
        </tbody>

    </table>
</body>
</html>