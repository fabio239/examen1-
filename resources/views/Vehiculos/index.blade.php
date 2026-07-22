<!DOCTYPE html>
<html>
<head>
    <title >Vehículos</title>
</head>
<body>

<h1 class="">Lista de Vehículos</h1>

<a href="{{ route('vehiculos.create') }}">
Nuevo Vehículo
</a>

<br><br>

<table border="1">

<tr>
    <th>ID</th>
    <th>Placa</th>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Año</th>
    <th>Color</th>
    <th>Acciones</th>
</tr>

@forelse($vehiculos as $vehiculo)

<tr>

<td>{{ $vehiculo->id }}</td>
<td>{{ $vehiculo->placa }}</td>
<td>{{ $vehiculo->marca }}</td>
<td>{{ $vehiculo->modelo }}</td>
<td>{{ $vehiculo->anio }}</td>
<td>{{ $vehiculo->color }}</td>

<td>

<a href="{{ route('vehiculos.edit',$vehiculo) }}">
Editar
</a>

<form action="{{ route('vehiculos.destroy',$vehiculo) }}" method="POST">

@csrf
@method('DELETE')

<button type="submit">
Eliminar
</button>

</form>

</td>

</tr>

@empty

<tr>
<td colspan="7">
No hay vehículos registrados
</td>
</tr>

@endforelse

</table>

</body>
</html>