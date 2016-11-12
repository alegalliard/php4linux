<?php
//nome de arquivo tem que ser igual o nome das classes
function autoload($classe) {
	$arq = $classe.'.php';
	if(file_exists($arq)){
		var_dump($arq);
		require($arq);
	} else {
		echo 'Essa classe nao existe';
		
	}
}

spl_autoload_register('autoload');