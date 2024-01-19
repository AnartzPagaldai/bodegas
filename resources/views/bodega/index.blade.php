<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Localizacion</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>

        @foreach ($bodegas as $bodega)
            <tr>
                <td>{{ $bodega->nombre }}</td>
                <td>{{ $bodega->localizacion }}</td>
                <td>{{ $bodega->telefono }}</td>
                <td>{{ $bodega->email }}</td>
                <td>
                    <form action=""><input type="submit"></form>
                    <form action={{ route("bodega.delete", $bodega->id) }} method="post> 
                        @csrf
                        <input type="submit" value="borrar" >
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>