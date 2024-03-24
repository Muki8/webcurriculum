<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>

    <section id="resultado">
        <?php
        if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operator'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['operator'];
            
            switch ($operator) {
                case '+':
                    $resultado = $num1 + $num2;
                    break;
                case '-':
                    $resultado = $num1 - $num2;
                    break;
                case '*':
                    $resultado = $num1 * $num2;
                    break;
                case '/':
                    if ($num2 != 0) {
                        $resultado = $num1 / $num2;
                    } else {
                        echo "Error: división por cero";
                    }
                    break;
                default:
                    echo "Operador no válido";
            }
            echo "<p>El resultado es: $resultado</p>";
        }
        ?>
    </section>
</body>
</html>
