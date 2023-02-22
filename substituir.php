<?php

//maneiras de censurar uma string com str_replace vc escolhe oque , pelo oque trocar, onde.
//tem como trocar mais de um elemento, basta coloca-lo em formato de array.
//o substituidor tem como ser mais de um, segue o mesmo passo a passo do acima.

$string="olá testando censurar as palavras caramba e cassino";


 echo str_replace(['caramba','cassino'],'***',$string);



 //strtr ele troca caracteres unicos,porem tem como usa-lo para trocar palavras ,ele vai caractere por caracter sendo trocado pelo substituidor na ordem que ele esta 
 // letra A vira @.

  echo strtr($string,'caramba','*@#&(').PHP_EOL;
// ainda sobre strtr trocando palavras, use array para mostrar
  echo strtr($string,['caramba'=>'***','cassino'=>'$$$$']);

  //algumas situações especificas, o str_replace não se importa se já alterou ou não o elemento, o strtr sim