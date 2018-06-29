<?php

/**
 * Classe para home e para abrir incidentes
 *
 */

class ListaIncidentesModel
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
    
    public $teste;

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
    public function lista_incidentes() {
	
		//lista atentendes da base da dados 
		$query = $this->db->query('SELECT * from incidente');
		
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


