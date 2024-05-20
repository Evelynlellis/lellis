<?php
//Codigos de teste, pois eu não estava em aula, acabei ficando doente e por isso não estive presente.

/*codigo errado: <?php 

$dado = "Informe o dado que desejar"; 

echo dado; 
*/
// O erro nesse código se encontra mna linha 6 "$dado" tem que estar em "echo $dado;"

//Maneira correta:
<?php 

$dado = "Informe o dado que desejar"; 

echo $dado;

?>

//Quando na estrutura condicional if, é obrigatório a utilização das chaves?  
// R- É obrigatório  a utilização das chaves quando existe mais de uma instrução a ser executada.

//Cite exemplo com e sem as chaves.

//COM A CHAVE:
<?php

$testevalor = 20;

if ($testevalor > 9) {
    echo "O valor é maior que 9.";
}

?>

//SEM CHAVE:

<?php

$teste = 20;

if ($teste> 9) 
    echo "O valor é maior que 9.";

?>

//Quais são os operadores lógicos? Cite exemplo de 2 operadores lógicos. Escreva o código desenvolvido aqui. 
 // R- Os operadores logicos são: &&,and,||,or,!,not e xor.
 //"&&"
 <?php

$valor1 = 5;
$valor2 = 10;

if ($valor1 > 5 && $valor2 < 20) {
    echo "Ambas condições são verdadeiras.";
}

?>

// ||
<?php

$valor1 = 5;
$valor2 = 10;

if ($valor1 > 15 || $valor2 < 50) {
    echo " Uma das condições é verdadeira.";
}

?>

//Quando devemos utilizar um símbolo de = (igual) e dois ==? 
// R- O símbolo de "=" é usado quando é preciso atribuir valores a uma variavel. O símbolo de "==" é usado para comparar se dois valores são iguais.
// Cite exemplo, e escreva o código desenvolvido aqui:
// "=":
<?php

$teste = 6; // Atribui o valor 5 à variável $teste

?>

//"==":

<?php

$teste1 = 7;
$teste2 = 7;

if ($teste1 == $teste2) {
    echo "Os valores são iguais."; // Comparar os valores, retornando verdadeiro
}

?>

