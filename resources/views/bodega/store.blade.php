<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href={{ route("bodegas.index") }}>Volver</a>

    <form action={{ route("bodega.store") }} method="post">
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre">

        <label for="direccion">Direccion</label>
        <input type="text" id="direccion" name="localizacion">

        <label for="telefono">Telefono</label>
        <input type="text" id="telefono" name="telefono">

        <label for="email">Email</label>
        <input type="email" id="email" name="email">

        <h1>Dispone de restaurante</h1>
        <label for="si">Si</label>
        <input type="radio" id="si" name="dispone" value="1">
        <label for="no">No</label>
        <input type="radio" id="no" name="dispone" value="0">
        <br>
        <br>
        <input type="submit" value="Añadir">
    </form>
</body>
</html>