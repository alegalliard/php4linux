<?php

interface FreteStrat {
	public function calcular();
}

	class FreteNormal implements FreteStrat {
		public function calcular() {
			echo "Frete Normal <hr>";
			return 20;
		}
	}
	
	class FreteExpresso implements FreteStrat {
		public function calcular() {
			echo "Frete Expresso <hr>";
			return 5;
		}
	}
	
	class FreteTurbo implements FreteStrat {
		public function calcular() {
			echo "Frete Turbo <hr>";
			return 10;
		}
	}
	
	class Pedido {
		public $freteStrat;
		public $totalPedido = 0;
		
		public function calcularTotalPedido(){
			echo "Pedido + frete: ".$this->totalPedido += $this->freteStrat . " <hr>";
		}
	}
	
	$tipoFrete = 'Normal';
	
	switch($tipoFrete){
		case 'Normal':
			$freteStrat = new FreteNormal();
			break;
		case 'Expresso':
			$freteStrat = new FreteExpresso();
			break;
		case 'Turbo':
			$freteStrat = new FreteTurbo();
			break;
		default: 
			echo 'Frete inexistente';
	}
	
	$pedido1 = new Pedido();
	$pedido1->totalPedido = 100;
	$pedido1->freteStrat = $freteStrat->calcular();
	$pedido1->calcularTotalPedido();
	
	$pedido2 = new Pedido();
	$pedido2->totalPedido = 200;
	$pedido2->freteStrat = $freteStrat->calcular();
	$pedido2->calcularTotalPedido();
	
	$pedido3 = new Pedido();
	$pedido3->totalPedido = 1500;
	$pedido3->freteStrat = $freteStrat->calcular();
	$pedido3->calcularTotalPedido();