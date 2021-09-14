<?php
    if(isset($_GET['numero1'])){

        $num1 = $_GET['numero1'];
        $num2 = $_GET['numero2'];
        $op = $_GET['operacion']; 
        $resultado = 0;
        switch($op){
            case 0: $resultado = $num1 + $num2;
            break;
            
            case 1: $resultado = $num1 - $num2;
            break;

            case 2: $resultado = $num1 / $num2;
            break;

            case 3: $resultado = $num1 * $num2;
            break;
        }
        echo "<br>El resultado es: ".$resultado;
    }
    


?>

<form>
    <label for="numero1">Numero 1</label>
    <input type="number" name="numero1">
    <br>
    <label for="numero2">Numero 2</label>   
    <input type="number" name="numero2">
    <br>

    <select name="operacion">
        <option value="0">Sumar</option>
        <option value="1">Resta</option>
        <option value="2">Dividir</option>
        <option value="3">Multiplicar</option>
    </select>
    <button>Calcular</button>

</form>
