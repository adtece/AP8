<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    
    <?php
   
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $edad1 = $_POST["edad1"];
            $edad2 = $_POST["edad2"];
            
            function diferenciaEdad($dato1, $dato2)
            {
            if ($dato1 > $dato2){
                $operacion = $dato1-$dato2;
                return $operacion;
            } else{
                $operacion = $dato2-$dato1;
                return $operacion;
            }
            }

            $resultado = diferenciaEdad($edad1, $edad2);

            echo $resultado;
        }

        
    ?>
    
    <form method="POST" action="">
        <label for="edad1">EDAD 1:</label>
        <input type="number" id="edad1" name="edad1" value="">
        <label for="edad2">EDAD 2:</label>
        <input type="edad2" id="edad2" name="edad2" value="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>