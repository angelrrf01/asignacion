<?php


    if(isset($_POST['nombre'])){
        echo "Nombre: ".$_POST['nombre']."<br>";
        echo "Apellido: ".$_POST['apellido']."<br>";
        echo "Ciudad: ".$_POST['ciudad']."<br>";
        echo "Edad: ".$_POST['edad']."<br>";
        echo "Telefono: ".$_POST['telefono']."<br>";
        echo "Correo: ".$_POST['correo']."<br>";
        echo "Estado civil: ".$_POST['estado_civil']."<br>";
    }
?>


<form method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre">
    <br>

    <label for="apellido">Apellido:</label>
    <input for="text" name="apellido"> 
    <br>

    <label for="ciudad">Ciudad:</label>
    <select name="ciudad">
        <option>Guaymas</option>
        <option>Hermosillo</option>
        <option>Obregon</option>
        <option>Alamos</option>
        <option>Empalme</option>
        <option>Agua Prieta</option>
        <option>Caborca</option>
        <option>San Luis Rio Colorado</option>
    </select>
    <br>

    <label for="edad">Edad:</label>
    <input type="number" name="edad">
    <br>

    <label for="telefono">Telefono:</label>
    <input type="text" name="telefono">
    <br>

    <label for="correo">Correo:</label>
    <input type="email" name="correo">
    <br>

    <label for="estado_civil">Estado Civil:</label>
    <select name="estado_civil">
        <option>Soltero</option>
        <option>Casado</option>
    </select> 
    <br>
    <button>Enviar</button>
</form>

