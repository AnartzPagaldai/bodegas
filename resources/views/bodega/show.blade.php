<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href={{ route("vino.store", $bodega->id) }}>+ añadir vino</a>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Action</th>
        </tr>
        @foreach ($vinos as $vino)
            <tr>
                <td>{{ $vino->nombre }}</td>
                <td>{{ $vino->tipo }}</td>
                <td>
                    <form action={{ route("vino.show", [$vino->id , $bodega->id]) }}>
                        <input type="submit" value="Ver">
                    </form>

                    <form action={{ route("vino.delete", [$vino->id, $bodega->id]) }} method="post">
                        @csrf
                        <input type="submit" value="Borrar">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <a href={{ route("bodegas.index") }}>Volver</a>
    <form action={{ route("bodega.delete", $bodega->id) }} method="post"> 
        @csrf
        <input type="submit" value="Borrar" >
    </form>

    <form action={{ route("bodega.update", $bodega->id) }} method="post">
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" value={{$bodega->nombre}}>

        <label for="direccion">Direccion</label>
        <input type="text" id="direccion" name="localizacion" value={{$bodega->localizacion}}>

        <label for="telefono">Telefono</label>
        <input type="text" id="telefono" name="telefono" value={{$bodega->telefono}}>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value={{$bodega->email}}>

        <h1>Dispone de restaurante</h1>
        <label for="si">Si</label>
        <input type="radio" id="si" name="dispone" value="1" {{$bodega->dispone ? "checked" : ""}}>
        <label for="no">No</label>
        <input type="radio" id="no" name="dispone" value="0" {{$bodega->dispone ? "" : "checked"}}>
        <br>
        <br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>