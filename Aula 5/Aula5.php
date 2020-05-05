<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 5</title>
</head>
<body>
   
   
    <h1>Utilizando o comando switch case </h1>
    </br>
    <h2>Uma hamburgueria tem 5 lanches disponiveis e podem ser pedidos através dos números</h2>
    </br>
    <p> 
        1 - X-Burguer </br>
        2 - X-Salada   </br>
        3 - X-Bacon    </br>
        4 - X-Egg       </br>
        5 - X-Tudo      </br>
    </p>
    </br>
    <p>Sua missão é exibir o lanche escolhido a partir do número selecionado</p>

    <?php
        
        $numero=6;

        switch ($numero) {
            case 1:
                echo'Você escolheu X-Burger';
                break;
                
            case 2:
                echo'Você escolheu X-Salada';
                break;

            case 3:
                echo'Você escolheu X-Bacon';
                break;

            case 4:
                echo'Você escolheu X-Egg';
                break;

             case 5:
                echo'Você escolheu X-Tudo';
                break;
                
            
            default:
               echo"Opção inválida!Tenta novamente";
                break;
        }

    ?>

</body>
</html>