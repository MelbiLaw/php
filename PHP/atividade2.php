<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Mês</title>
</head>
<body>

<script>
    function verificarMes() {
        // Obtém o valor do campo de entrada
        var numeroMes = document.getElementById("numeroMes").value;

        // Converte o valor para um número inteiro
        numeroMes = parseInt(numeroMes);

        // Array com os nomes dos meses
        var meses = [
            "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
            "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
        ];

        // Verifica se o número do mês está dentro do intervalo
        if (numeroMes >= 1 && numeroMes <= 12) {
            // Exibe o nome do mês correspondente
            alert("O mês correspondente ao número " + numeroMes + " é " + meses[numeroMes - 1] + ".");
        } else {
            // Informa que não existe mês com este número
            alert("Não existe mês com o número " + numeroMes + ".");
        }
    }
</script>

<form>
    <label for="numeroMes">Digite o número do mês (1 a 12):</label>
    <input type="number" id="numeroMes" min="1" max="12" required>

    <button type="button" onclick="verificarMes()">Verificar Mês</button>
</form>

</body>
</html>