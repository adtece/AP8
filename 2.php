<!DOCTYPE html>
<html>
<head>
</head>
<body>
    
    <?php
   
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $num = $_POST["num"];
            
            function diferenciaEdad($dato)
            {
                
                if ($dato == 1){
                    echo "I";
                } elseif ($dato == 2){
                    echo "II";
                }elseif ($dato == 3){
                    echo "III";
                }elseif ($dato == 4){
                    echo "IV";
                }elseif ($dato == 5){
                    echo "V";
                }elseif ($dato == 6){
                    echo "VI";
                }elseif ($dato == 7){
                    echo "VII";
                }elseif ($dato == 8){
                    echo "VIII";
                }elseif ($dato == 9){
                    echo "IX";
                }elseif ($dato == 10){
                    echo "X";
                }elseif ($dato > 10){
                    echo "Has introducido un numero que no esta entre 1 y 10";
                }

            }
            $resultado = diferenciaEdad($num);

            echo $resultado;
        }

        
    ?>
    
    <form method="POST" action="">
        <label for="num">NUMERO ENTRE 1 Y 10:</label>
        <input type="number" id="num" name="num" value="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>