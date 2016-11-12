<?php
function loadmodules($classe) {
	
	$arq = str_replace('\\', DIRECTORY_SEPARATOR, $classe) . '.php';

	
	if(file_exists($arq)){
		require($arq);
		echo "<p>Carreguei a classe {$arq}</p>";
	} else {
		echo $arq;
		echo '<p>Essa classe nao existe</p>';
		
	}
}

spl_autoload_register('loadmodules');