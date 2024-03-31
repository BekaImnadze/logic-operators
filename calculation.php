<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loops</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class=container>
        <form action="" method="POST">
            <div class="inputs">
                <input class="style-input" type="number" name="number1">
                <select name="calculation">
                    <option value="Addition">+</option>
                    <option value="Subtraction">-</option>
                    <option value="Multiplication">*</option>
                    <option value="Division">/</option>
                </select>
                <input class="style-input" type="number" name="number2">
            </div>
            <div class="submit">
                <input type="submit">
                <label for="submit" id="answer"></label>
            </div>
        </form>

        <?php 
        if(isset($_POST['calculation']) && isset($_POST['number1']) && isset($_POST['number2'])){
            $num1 = $_POST['number1'];
            $num2 = $_POST['number2'];
            $operand = $_POST['calculation'];


            switch ($operand) {
                case "Addition" :
                    echo $num1 + $num2; 
                    break;
                case "Subtraction" :
                    echo $num1 - $num2;
                    break;
                case "Multiplication" :
                    echo $num1 * $num2;
                    break;
                case "Division" :
                    echo $num1 / $num2;
                    break;
            }
        }
        ?>
    </div>
</body>
</html>