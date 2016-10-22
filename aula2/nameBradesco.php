<?php //vai dar erro se tiver um espaco ANTES da tag PHP

namespace Bradesco;
//tudo o que esta daqui pra baixo e pertence ao namespace Bradesco ate que outro seja chamado ou que "saia" do namespace
	class Conta {
		protected $banco = "Bradesco";
	
		public function getBanco(){
			return $this->banco;
		}	
}

//saindo do namespace Bradesco
namespace Itau; //agora eu estou dentro de Itau
class Conta {
	protected $banco = "Itau";
	public function getBanco(){
		return $this->banco;
	}
}


use \Bradesco\Conta as ContaBradesco; //usando apelido para usar outro namespace (instanciado a classe inteira)
$bradesco = new ContaBradesco();
echo "Banco: {$bradesco->getBanco()}<hr>";

use \Bradesco as ContaBradesco2; //usando apelido para usar outro namespace  (instanciado o escopo)
$bradesco2 = new ContaBradesco2\Conta();
echo "Banco: {$bradesco2->getBanco()}2<hr>";

$bradesco3 = new \Bradesco\Conta(); //Se eu usar new Conta() ele vai considerar o Itau. Preciso instanciar o objeto pelo namespace se quiser usar o Bradesco
echo "Banco: {$bradesco2->getBanco()}3<hr>";

$itau = new Conta();
echo "Banco: {$itau->getBanco()}<hr>";