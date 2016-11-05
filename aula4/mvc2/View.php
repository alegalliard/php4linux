<?php
class View {
	private $model;
	private $controller;

	public function __construct(Model $model, Controller $controller) {
		$this->model = $model;
		$this->controller = $controller;
	}
	
	public function montarForm($id=null){
		$form = "";
		echo $id;
		if(!$id){
			$form .= '<form action="?action=cadastrar" method="POST">';
		} else {
			$form .= '<form action="?action=atualizar&id='.$id.'" method="POST">';
		}
		
		
		$form .= '
<input type="text" name="nome" placeholder="Nome">
<input type="text" name="email" placeholder="Email">
<input type="password" name="senha" placeholder="Senha">
<input type="submit" vaue="Enviar">';
		$form .= "</form>";
		
		return $form;
	}
	
	public function listarUsuarios(){
		$registros = $this->model->buscarRegistros();
		echo '<table border="1" width="80%">
				<caption>Usuarios<caption>
				<thead>
					<tr>
						<th>ID</th>
						<th>Nome</th>
						<th>Email</th>
						<th>Senha</th>
					</tr>
				</thead>
			<tbody>';
		
		foreach($registros as $index ){
			echo '<tr>
						<td>'.$index['id'].'</td>
						<td>'.$index['nome'].'</td>
						<td>'.$index['email'].'</td>
					    <td>'.$index['senha'].'</td>
				</tr>';
		}
		
		echo '</tbody></table><a href="?action=cadastrar">Novo</>';
	}
}