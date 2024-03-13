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
        <h1>Verificação se o código é redondo.</h1>
        <label>Digite um número</label>
        <input name="number" type="number" required> 
        <button name="res">Calcular Resultado</button>
    </form>
   
    <?php
 
        if (isset($_GET['res'])) {
            $number = $_GET['number'];
            if (substr($number, -1) == 0) {
                echo "<br>O número é redondo.";
            } else {
                echo "<br>O número não é redondo.";
            }              
        }
    ?>

</body>
</html>