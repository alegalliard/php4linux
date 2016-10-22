<?php
//namespaces
require("Bradesco.php");
require("Itau.php");

//Conta not found se for assim $bradesco = new Conta();

//instanciar atraves de um namespace


//uma forma de usar namespace
$bradesco = new Bradesco\Conta();
echo "Banco: {$bradesco->getBanco()}<hr>";


//outra forma de usar namespace (instanciar utilizando o apelido
use Itau\Conta as ContaItau;
$itau = new ContaItau();
echo "Banco: {$itau->getBanco()}<hr>";