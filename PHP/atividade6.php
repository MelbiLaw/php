<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intervalo de Números</title>
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
        }
    </style>
</head>
<body>

<h2>Gerar Números no Intervalo</h2>

<label for="numero1">Informe o primeiro número:</label>
<input type="number" id="numero1" required>

<label for="numero2">Informe o segundo número:</label>
<input type="number" id="numero2" required>

<button onclick="gerarNumeros()">Gerar Números</button>

<div id="resultado"></div>

<script>
    function gerarNumeros() {
        // Obtém os valores dos campos de entrada
        var numero1 = parseInt(document.getElementById("numero1").value);
        var numero2 = parseInt(document.getElementById("numero2").value);

        // Valida se os valores são números inteiros
        if (!isNaN(numero1) && !isNaN(numero2)) {
            // Gera e exibe os números no intervalo
            var resultado = document.getElementById("resultado");
            resultado.innerHTML = "<strong>Números no intervalo:</strong><br>";

            for (var i = Math.min(numero1, numero2); i <= Math.max(numero1, numero2); i++) {
                resultado.innerHTML += i + "<br>";
            }
        } else {
            alert("Por favor, informe números inteiros válidos.");
        }
    }
</script>

</body>
</html>