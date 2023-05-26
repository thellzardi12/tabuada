<!DOCTYPE html>
<html>
<head>
    <title>Gerador de Tabuada</title>
</head>
<body>
    <h1>Gerador de Tabuada</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        // Verificar se o número é válido
        if (!is_numeric($numero)) {
            echo "<p>Por favor, insira um número válido.</p>";
        } else {
            echo "<h2>Tabuada do $numero:</h2>";
            echo "<table>";
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<tr><td>$numero x $i =</td><td>$resultado</td></tr>";
            }
            echo "</table>";
        }
    }
    ?>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="numero">Digite um número:</label>
        <input type="text" id="numero" name="numero">
        <input type="submit" value="Gerar Tabuada">
    </form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1></h1>

    <?php
    // Caminho da imagem
    $caminhoImagem = 'tabuada.png';
    ?>

    <!-- Exibir a imagem -->
    <img src="<?php echo $caminhoImagem; ?>" alt="Minha Imagem">

</body>
</html>