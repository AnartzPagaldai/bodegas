<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href={{route("bodega.store")}}>+ añadir bodega</a>
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
                    <form action={{ route("bodega.show", $bodega->id)}}>
                        <input type="submit" value="Entrar">
                    </form>
                    <?php ?>
                    <form action={{ route("bodega.delete", $bodega->id) }} method="post"> 
                        @csrf
                        <input type="submit" value="Borrar" >
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>