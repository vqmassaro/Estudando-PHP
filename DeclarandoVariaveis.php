<?php
    /* O PHP é uma linguagem fracamente tipada, ou seja, não precisa  declarar explicitamente o tipo, ele é determinado
     * automaticamente pelo valor que é atribuído à variável, isso é conhecido como:
     *                  *Tipagem Dinâmica ou
     *                  *Inferência de Tipo
     */
    echo "Para declarar uma variável você deve usar o caracter $ seguido do nome da variável.\n";
    
    $nome = "Valmir";
    $idade = 36;
    $altura = 1.70;
    $gostaDeLer = true;
    

    echo "Olá meu nome é $nome, tenho $idade anos e minha altura é $altura.\n\n";

    /* Note que no valor da altura o zero foi ignorada podemos formatar o número de casas decimais utilizando a função 
     * number_format >> 
     *              number_format(numero, casas_decimais, separador_decimal, separador_milhar);
     */

     $alturaFormatada = number_format($altura,2,'.',',');

     echo "### Valor da altura formatado - definido 2 casas decimais ###\n";
     echo "Olá meu nome é $nome, tenho $idade anos e minha altura é $alturaFormatada.\n\n";

     echo "\nCONCATENANDO STRINGS - para concatenar em php usa-se o '.' \n";
     $sobrenome = "Massaro";

     echo "\n" . $nome . " " . $sobrenome . ".\n\n";