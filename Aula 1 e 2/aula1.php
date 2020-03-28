<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 1</title>
</head>
<body>
    

    <?php
        //Variáveis
        $numero1 = 10;
        $numero2 = 20;

        
        $nome = "Bruno Gomes"; //um nome
        $idade = 22; // uma idade

        $soma = $numero1 + $numero2; // Uma conta de soma!!
        $divisao = $numero2/$numero1; // Uma conta de divisão!!
        $mult = $numero2 * $numero1; //uma conta de multiplicação!!
        $sub = $numero2 - $numero1; //uma conta de subtração

            echo $soma;
            echo "</br></br>";
            
            echo $divisao;
            echo "</br></br>";
            
            echo $mult;
            echo "</br></br>";
            
            echo $sub;


            echo $nome.$idade; //concatenação de variáveis
            
            echo "</br> O ".$nome." tem ".$idade. " anos "; //concatenação de frase e variável

    ?>


  
</body>
</html>