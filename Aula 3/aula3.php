<!DOCTYPE html>
<html lang="en">
  
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    
    <body>

        <?php

     echo "Operadores de comparação: </br>";
       
       echo ">= -:maior ou igual </br>"; // maior ou igual
       echo "<= -:menor ou igual </br>";//menor ou igual
       echo "!= -:diferente de </br>";// diferente de
      
       echo "</br>Decremento e incremento: ";
        $i=20;
        echo"</br>Valor inicial de i:::".$i;
            $i++; //aumenta 1
            echo"</br> valor de i menos 1:::: ".$i;

            $i--; //diminui 1
            echo"</br> valor de i menos 1:::: ".$i;

         echo "</br></br>Decisão: ";
         echo"</br>Se for maior igual a 1 e menor igual a 5: >=1 && <=5";  //utilizando o operador && (e)

         echo"</br>Se for  igual a 10 e  igual a 50: =10 || =50"; //utilizando o operador || (ou)



        ?>

      
    </body>
</html>