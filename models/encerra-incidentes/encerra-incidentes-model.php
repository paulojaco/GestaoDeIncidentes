<?php

/**
 * Classe para encerrar incidentes
 *
 */

class EncerraIncidentesModel
{

	/**
	 * $form_data
	 *
	 * Os dados do formulário de envio.
	 *
	 * @access public
	 */	
	public $form_data;

	/**
	 * $form_msg
	 *
	 * As mensagens de feedback para o usuário.
	 *
	 * @access public
	 */	
	public $form_msg;

	/**
	 * $db
	 *
	 * O objeto da nossa conexão PDO
	 *
	 * @access public
	 */
	public $db;

	/**
	 * Construtor
	 * 
	 * Carrega  o DB.
	 *
	 * @since 0.1
	 * @access public
	 */
	public function __construct( $db = false ) {
		$this->db = $db;
	}
    
    /**
	 * Lista os incidentes cadastrados na Base de dados
	 * 
	 * Este método retorna os dados dos incidentes cadastrados na base de dados
	 *
	 */
    public function lista_incidentes_abertos() {
	
		//lista atentendes da base da dados 
		$query = $this->db->query("SELECT * from incidente where status = 'Aberto'");
		
		// Verifica se a consulta está OK
		if ( ! $query ) {
			return array();
		}
		//Retorna o resuldado
		return $query->fetchAll();
	}
    
    /**
	 * Retorna atendente
	 * 
	 * Este método retorna o nome do atendente com base no id passado por parametro
	 *
	 */
    public function retorna_atendente($id){
        //busca por atendente com base no id 
		$query = $this->db->query("SELECT nome from atendentes where id ='$id'");
		
		// Verifica se a consulta está OK
		if ( ! $query ) {
			return array();
		}
		//Retorna o resuldado
		$nome = $query->fetch();
		return $nome['nome'];;
    }
    
  /**
	 * Retorna cliente
	 * 
	 * Este método retorna o nome do cliente com base no id passado por parametro
	 *
	 */
    public function retorna_cliente($id){
        //busca por cliente com base no id 
		$query = $this->db->query("SELECT empresa from clientes where id ='$id'");
		
		// Verifica se a consulta está OK
		if ( ! $query ) {
  
			return array();
		}
        
		//Retorna o resuldado
        $nome = $query->fetch();
        
		return $nome['empresa'];
    }

}

if($_SERVER['REQUEST_METHOD'] == 'POST') { // aqui é onde vai decorrer a chamada se houver um *request* POST
    
    $_checkbox = $_POST['id_incidente'];
    $aux = 0;
    $this->form_msg = '';
    
    foreach($_checkbox as $_id){
        $query = $this->db->update('incidente', 'id', $_id, array(
				'status' => 'Encerrado',  
			));
			
			// Verifica se a consulta está OK e configura a mensagem
			if ( ! $query ) {
                $aux = 1;
				$this->form_msg .= "'$_id',";
				
			} else {
				$this->form_msg = '<p class="form_success">User successfully updated.</p>';
			}
    }
    if($aux == 0){
        echo '<div class="alert alert-success " role="alert">Incidentes encerrados com sucesso!</div>';
    } else {
        echo '<div class="alert alert-danger " role="alert">Erro ao encerrar os incidentes de id: '.$this->form_msg.'</div>';
    }
    
}



