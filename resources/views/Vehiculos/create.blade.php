<!DOCTYPE html>
<html>
<head>
    <title>Registrar Vehículo</title>
</head>
<body>

<h1>Registrar Vehículo</h1>

<form action="{{ route('vehiculos.store') }}" method="POST">

    @csrf

    Placa

    <input type="text" name="placa" value="{{ old('placa') }}">

    @error('placa')
        <small>{{ $message }}</small>
    @enderror

    <br><br>

    Marca

    <input type="text" name="marca" value="{{ old('marca') }}">

    @error('marca')
        <small>{{ $message }}</small>
    @enderror

    <br><br>

    Modelo

    <input type="text" name="modelo" value="{{ old('modelo') }}">

    @error('modelo')
        <small>{{ $message }}</small>
    @enderror

    <br><br>

    Año

    <input type="number" name="anio" value="{{ old('anio') }}">

    @error('anio')
        <small>{{ $message }}</small>
    @enderror

    <br><br>

    Color

    <input type="text" name="color" value="{{ old('color') }}">

    @error('color')
        <small>{{ $message }}</small>
    @enderror

    <br><br>

    <button type="submit">
        Guardar
    </button>

</form>

<br>

<a href="{{ route('vehiculos.index') }}">
Ver Vehículos
</a>

</body>
</html>