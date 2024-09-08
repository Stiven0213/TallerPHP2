<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversión de Moneda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>Conversión de Moneda (COP a USD)</h1>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad en COP</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-primary">Convertir</button>
        </form>
    </div>
</body>

</html>
