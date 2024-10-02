<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords - Risultato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container mt-5">
        <div class="bg-primary text-white text-center p-4 rounded shadow-sm mb-5">
            <h1>php badwords</h1>
            <h3>risultato</h3>
        </div>

        <?php
        // Recupero i dati inviati tramite GET
        $section = $_GET['section'];
        $badword = $_GET['badword'];

        // Censuro la parola con tre asterischi
        $censored_word = str_ireplace($badword, '***', $section);
        ?>

        <div class="card-custom mb-4 p-4">
            <h4>Paragrafo che hai scritto:</h4>
            <p><?php echo $section; ?></p>
            <p class="fw-bold">Lunghezza: <?php echo strlen($section); ?> caratteri</p>
        </div>

        <div class="card-custom p-4">
            <h4>Paragrafo con la censura della parola scelta:</h4>
            <p><?php echo $censored_word; ?></p>
            <p class="fw-bold">Lunghezza: <?php echo strlen($censored_word); ?> caratteri</p>
        </div>

    </div>

</body>
</html>