<!DOCTYPE html>
<html>
<head>
    <title>Verificação de Idade</title>
</head>
<body>

<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    // Verifica se a idade é maior ou menor que 18
    if ($idade >= 18) {
        $mensagem = "$nome é maior de 18 e tem $idade anos.";
    } else {
        $mensagem = "$nome não é maior de 18 e tem $idade anos.";
    }

    // Exibe a mensagem
    echo $mensagem;
} else {
    // Se o formulário não foi enviado, exibe o formulário
    ?>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="idade">Idade:</label>
        <input type="number" name="idade" required><br>

        <input type="submit" value="Verificar">
    </form>
    <?php
}
?>

</body>
</html>