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
    @if($exito != null)
        @if($exito == 1)
            <p>Se ha agergado una comida</p>
        @else
            <p>No se ha podido agregar comida</p>
        @endif
    @endif
    <a href="{{route('comidas.create')}}">
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
            @foreach($comidas as $comida)
                <tr>
                    <td>{{$comida->nombre}}</td>
                    <td>{{$comida->precio}}</td>
                    <td><button>Editar</button></td>
                </tr>
            @endforeach
        </tbody>

    </table>
</body>
</html>