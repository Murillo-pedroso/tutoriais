<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>if/ else/ else if</h1>
    <p> João quer classificar as turmas de natação de sua academia </br>
    de acordo com as idades de cada aluno:</br></br>

    Até 4 anos -> Turma A</br>
    Entre 5 e 8 anos -> Turma B</br>
    Entre 9 e 13 anos -> Turma C</br>
    Entre 14 e 17 anos -> Turma D</br>
    E acima de 18 anos -> Turma E</br></br>

    <?php

        $idade = 3;

            if( $idade <= 4){

                echo"Turma A";

            }else if($idade>4 && $idade<=8){

                echo"Turma B";

            }else if($idade>8 && $idade<=13){

                echo"Turma C";

            }else if($idade>13 && $idade<=17){

                echo"Turma D";

            }else{

                echo"Turma E";
            }


    ?>

</body>
</html>