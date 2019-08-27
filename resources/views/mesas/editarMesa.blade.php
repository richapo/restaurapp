<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('mesas.update',$mesa->id)}}" method="post">
        @csrf
        @method('PUT')
        
        <label for="capacidad_personas">capacidad de personas</label>
        <input type="number" value="{{$mesa->capacidad_personas}}" id="capacidad_personas" name="capacidad_personas">

        <input type="submit" value="Modificar">
    </form>
</body>
</html>