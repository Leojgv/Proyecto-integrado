<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma</title>
</head>
<body>
    <h1>Resultado de la Suma</h1>
    <form method="POST" action="/suma">
        @csrf
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1" required>
        <br>
        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2" required>
        <br>
        <button type="submit">Sumar</button>
    </form>
    <br>
    Resultado: {{ $resultado }}
</body>
</html>