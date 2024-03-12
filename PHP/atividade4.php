<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números de 1 a 20</title>
</head>
<body>

<!-- Números abaixo um do outro -->
<h2>Números de 1 a 20 abaixo um do outro:</h2>
<pre>
    <?php
    // Utilizando PHP para gerar os números
    for ($i = 1; $i <= 20; $i++) {
        echo $i . "\n";
    }
    ?>
</pre>

<!-- Números ao lado um do outro -->
<h2>Números de 1 a 20 ao lado um do outro:</h2>
<?php
// Utilizando PHP para gerar os números
for ($i = 1; $i <= 20; $i++) {
    echo $i . " ";
}
?>

</body>
</html>