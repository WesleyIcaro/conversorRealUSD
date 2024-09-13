<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>

        <?php 
        
        $dinheiro = $_GET['dinheiro'] ?? 0;

        $convertido = $dinheiro / 5.54;  
        
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        // Forma não profissional
        // echo "<p>Seus R$" . number_format($dinheiro, 2 ,',', '.') . " equivalem a US$ <strong>" . number_format($convertido, 2, ',', '.') . "*</strong></p>";


        // Forma profissional utilizando a internacionalização
        echo "<p>Seus " . numfmt_format_currency($padrao,$dinheiro, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao,$convertido, "USD") . "*</strong></p>";

        ?>

        <p><strong>*Cotação fixa de R$ 5,54</strong> informada diretamente no código</p>

        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>

    </main>
</body>
</html>