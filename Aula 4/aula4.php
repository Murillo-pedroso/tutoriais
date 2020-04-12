<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Tomada de decisões e comandos de condição</h1>    
   
   <p><h2>Parte 1:</h2>
   Maria foi ao mercado e sua mae pediu que ela comprasse maçã,</br> 
   mas se o numero de maçãs disponiveis for menor ou igual a 4 </br>
   ela deve comprar bananas. 
   </br></br>
   
   <h2>Parte 2:</h2> 
   Se não houver bananas comprar manga</br>
   </p>

    <?php

        $maca = 2;
        $banana = 0;
        
        if($maca > 4){
            echo"comprar maçã";

        }else{
            if($banana>0){
                echo"comprar banana";

            }else{
                
                echo"Comprar manga";
            }
           
        }
       
    ?>


</body>
</html>