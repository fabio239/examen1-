<!DOCTYPE html>
<html>
<head>
    <title>Editar Vehículo</title>
</head>
<body>

<h1>Editar Vehículo</h1>

<form action="{{ route('vehiculos.update',$vehiculo) }}" method="POST">

@csrf
@method('PUT')

Placa

<input type="text" name="placa" value="{{ old('placa',$vehiculo->placa) }}">

@error('placa')
<small>{{ $message }}</small>
@enderror

<br><br>

Marca

<input type="text" name="marca" value="{{ old('marca',$vehiculo->marca) }}">

@error('marca')
<small>{{ $message }}</small>
@enderror

<br><br>

Modelo

<input type="text" name="modelo" value="{{ old('modelo',$vehiculo->modelo) }}">

@error('modelo')
<small>{{ $message }}</small>
@enderror

<br><br>

Año

<input type="number" name="anio" value="{{ old('anio',$vehiculo->anio) }}">

@error('anio')
<small>{{ $message }}</small>
@enderror

<br><br>

Color

<input type="text" name="color" value="{{ old('color',$vehiculo->color) }}">

@error('color')
<small>{{ $message }}</small>
@enderror

<br><br>

<button type="submit">
Actualizar
</button>

</form>

</body>
</html>