<!DOCTYPE html>
<html>
    <head>
        <title>Votação do Jefinho</title>
</head>
    <body>
        <div>
        <form method = "POST" action="">
        <b>Qual seria seu voto?</b><br>
        <input type=radio name="op1" value="1"> Opção 1
        <input type=radio name="op2" value="2"> Opção 2
        <input type=radio name="op3" value="3"> Opção 3
        <br><br>
        <input type=submit name="Votar" value="Votar">
        <br><br>
        <?php
            $resulta1 = 0 ;
            $resultb2 = 0 ;
            $resultc3 = 0 ;

            if(isset($_POST["op1"])){
                $resulta1++;
            }
            if(isset($_POST["op2"])){
                $resultb2++;    
            }
            
            if(isset($_POST["op3"])){
                $resultc3++;
            }
            echo "<b>Resultados</b>";
            echo("<br>Opção 1:".$resulta1);
            echo("<br>Opção 2:".$resultb2);
            echo("<br>Opção 3:".$resultc3);
        ?>
        </form>
        </div>
    </body>
</html>