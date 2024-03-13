<!DOCTYPE html>
<html>
<head>
    <title> Projeto de programação PHP </title> 
    <meta charset='utf-8'>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        * {
            font-family: monospace;
            font-weight: 600;
        }
    </style>
</head>
<body>

    <form method="get">
        <h1>Verificação se o número é positivo, negativo ou neutro.</h1>
        <label>Digite um número</label>
        <input name="number" type="number" required> 
        <button name="res">Calcular Resultado</button>
    </form>
   
    <?php
 
        if (isset($_GET['res'])) {

            $number = $_GET['number'];

            if ($number > 0) {
                echo "<br>O número é positivo.";
            } else if ( $number < 0 ){
                echo "<br>O número é negativo.";
            } else {
                echo "<br>O número é neutro.";
            };
        }
    ?>

</body>
</html>