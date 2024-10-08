<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container mt-5">

        <div class="bg-primary text-white text-center p-4 rounded shadow-sm mb-5">
            <h1>php badwords</h1>
            <h3>inserisci qui il paragrafo e la parola che vuoi censurare</h3>
        </div>
        
        <form action="badwords.php" method="GET" class="p-4 border rounded bg-white shadow-sm card-custom">
            <div class="mb-3">
                <label for="section" class="form-label">Paragrafo:</label>
                <textarea name="section" id="section" rows="5" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label for="badword" class="form-label">Parola da censurare:</label>
                <input type="text" name="badword" id="badword" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>
</body>
</html>
