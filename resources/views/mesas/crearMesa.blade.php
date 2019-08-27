<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('mesas.store') }}" method="post">
        @csrf
        <div>
            <label for="capacidadPersonas">Cantidad de personas</label>
            <input type="nummber" name="capacidadPersonas" id="capacidadPersonas">
        </div>

        <input type="submit" value="Agregar">
    </form>
</body>
</html>