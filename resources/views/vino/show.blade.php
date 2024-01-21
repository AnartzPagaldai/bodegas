<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href={{route("bodega.show", $idBodega)}}>Volver</a>
    <form action={{ route("vino.delete", [$vino->id, $idBodega]) }} method="post">
        @csrf
        <input type="submit" value="Borrar">
    </form>
    <form action={{ route("vino.update", [$vino->id, $idBodega]) }} method="post">
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" value={{ $vino->nombre }}>

        <label for="tipo">Tipo</label>
        <input type="text" id="tipo" name="tipo" value={{ $vino->tipo }}>

        <input type="submit">
    </form>
</body>
</html>