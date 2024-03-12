<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Adivinhação em PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }

        label {
            font-weight: bold;
        }

        input {
            margin-bottom: 10px;
            padding: 5px;
        }

        #resultado {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>Jogo de Adivinhação</h2>

<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gera um número aleatório entre 1 e 50
    $numeroSorteado = rand(1, 50);

    // Obtém a tentativa do usuário
    $tentativaUsuario = $_POST["tentativa"];

    // Verifica se a tentativa está correta
    if ($tentativaUsuario == $numeroSorteado) {
        $mensagem = "Parabéns! Você adivinhou o número $numeroSorteado.";
    } else {
        $mensagem = "Tentativa incorreta. O número sorteado era $numeroSorteado.";
    }
} else {
    $mensagem = "";  // Inicializa a mensagem se o formulário não foi enviado
}
?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="tentativa">Tente adivinhar o número (entre 1 e 50):</label>
    <input type="number" id="tentativa" name="tentativa" min="1" max="50" required>

    <input type="submit" value="Verificar">
</form>

<div id="resultado"><?php echo $mensagem; ?></div>

</body>
</html>