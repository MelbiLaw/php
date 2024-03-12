<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de Nota</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 100px;
        }

        #notaInput {
            padding: 5px;
        }

        #mensagem {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<script>
    function validarNota() {
        // Obtém o valor do campo de entrada
        var nota = document.getElementById("notaInput").value;

        // Converte o valor para um número
        nota = parseFloat(nota);

        // Verifica se a nota está dentro do intervalo desejado
        if (nota >= 0 && nota <= 10) {
            // Exibe a mensagem de sucesso
            document.getElementById("mensagem").innerText = "Nota válida: " + nota;
        } else {
            // Exibe a mensagem de erro
            document.getElementById("mensagem").innerText = "Nota inválida. Informe um valor entre 0 e 10.";
        }
    }
</script>

<h1>Validação de Nota</h1>

<label for="notaInput">Digite uma nota entre 0 e 10:</label>
<input type="number" id="notaInput" min="0" max="10" step="0.1">
<button onclick="validarNota()">Validar Nota</button>

<p id="mensagem"></p>

</body>
</html>