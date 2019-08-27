<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <table>
            <tr>
                <th>capacidad de personas</th>
                <th>activo</th>
            </tr>
            @foreach ($lista as $i)
                <tr>
                    <form action="{{ route('mesas.edit',$i->id)}}" method="Get">
                        @csrf
                        @method('PUT')
                        
                        <td>
                            <input type="number" value="{{$i->capacidad_personas}}" id="capacidad_personas" name="capacidad_personas">
                        </td>
                        <td>
                            <input type="number" value="{{$i->activo}}">
                        </td>
                        <td>
                            <input type="submit" value="Modificar">
                        </td>
                    </form>
                    <form action="{{ route('mesas.destroy',$i->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <td>
                                <input type="submit" value="Eliminar">
                            </td>
                        </form>
                </tr>
            @endforeach
        </table>
    </body>
</html>