<?php 

require "Pessoa.php";
require "Programador.php";

$programador = new Programador("Raziel","PHP 7");
echo $programador->getNome();
#Herança

#Contante
echo $programador::ESPECIE;