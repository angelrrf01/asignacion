<?php

    if(isset($_GET['puerta'])){
        $eleccion = $_GET['puerta'];
        switch($eleccion){

            case 1: echo "¡Ganaste una cabra!";
            break;

            case 2: echo "¡Ganaste un carro del año!";
            break;

            case 3: echo "¡Ganaste una piedra!";
            break;

        }
    }

?>

<form>
    <h1>¡Bienvenido al concurso de las puertas!<h1>
    <p>Seleccione un número</p>
    <select name="puerta">
        <option value="0">Seleccione una puerta</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
    <button>¡Quiero esta!</button>
</form>