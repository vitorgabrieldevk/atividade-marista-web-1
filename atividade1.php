<!DOCTYPE html>
<html>
<head>

    <title>Atividade</title>

    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

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
        <h1>Par ou impar</h1> 
        <label>Digite um número</label>
        <input name="number" type="number"> 
        <button name="res">Calcular Resultado</button>
    </form>
   
    <?php
 
        if (isset($_GET['res'])) {
            $number = $_GET['number'];
            if ($number % 2 == 0) {
                echo "<br>O número é par.";
             } else {
                echo "<br>O número é ímpar.";
            }              
        }
    ?>

</body>
</html>