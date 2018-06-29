<?php

/**
 * Classe para home e para abrir incidentes
 *
 */

class HomeModel
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
	 * Lista os atendentes cadastrados na Base de dados
	 * 
	 * Este método retorna os id e nomes dos atendentes cadastrados na base de dados
	 *
	 */
    public function lista_atendentes() {
	
		//lista atentendes da base da dados 
		$query = $this->db->query('SELECT * from atendentes');
		
		// Verifica se a consulta está OK
		if ( ! $query ) {
			return array();
		}
		//Retorna o resuldado
		return $query->fetchAll();
	}
    
    /**
	 * Lista os clientes cadastrados na Base de dados
	 * 
	 * Este método retorna os dados de clientes cadastrados na base de dados
	 *
	 */
    
     public function lista_clientes() {
	
		//lista clientes da base da dados 
		$query = $this->db->query('SELECT * from clientes');
		
		// Verifica se a consulta está OK
		if ( ! $query ) {
			return array();
		}
		//Retorna o resuldado
		return $query->fetchAll();
	}
}


if($_SERVER['REQUEST_METHOD'] == 'POST') { // aqui é onde vai decorrer a chamada se houver um *request* POST
        $atendente = isset($_POST['id_atendente']) ? $_POST['id_atendente'] : '';
        $cliente = isset($_POST['id_cliente']) ? $_POST['id_cliente'] : '';
        $descricao = isset($_POST['descricao']) ? $_POST['descricao'] : '';
        $status = "Aberto";
    
			// Executa a consulta 
			$query = $this->db->insert('incidente', array(
				'atendente' => $atendente, 
				'cliente' => $cliente, 
				'descricao' => $descricao, 
				'status' => $status,
            ));
			
			// Verifica se a consulta está OK e configura a mensagem
			if ( ! $query ) {
				$this->form_msg = '<div class="alert alert-danger " role="alert">Erro ao abrir incidente. Tente Novamente!</div>';
				echo $this->form_msg;
				// Termina
				return;
			} else {
				$this->form_msg = '<div class="alert alert-success " role="alert">Abertura de incidente realizada com sucesso!</div>';
                echo $this->form_msg;
				// Termina
				return;
			}
}
