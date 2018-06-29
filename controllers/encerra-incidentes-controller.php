<?php
/**
 * home - Controller de exemplo
 *
 */
class EncerraIncidentesController extends MainController
{

	/**
	 * Carrega a página "/views/lista-incidentes-view/index.php"
	 */
    public function index() {
		// Título da página
		$this->title = 'Encerra Incidentes';
		
		// Parametros da função
		$parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();
	
		// Carrega o modelo para este view
        $modelo = $this->load_model('encerra-incidentes/encerra-incidentes-model');
		
		/** Carrega os arquivos do view **/
		
		// /views/_includes/header.php
        require ABSPATH . '/views/_includes/header.php';
		
		// /views/_includes/menu.php
        require ABSPATH . '/views/_includes/menu.php';
		
		// /views/home/home-view.php
        require ABSPATH . '/views/encerra-incidentes/encerra-incidentes-view.php';
		
		// /views/_includes/footer.php
        require ABSPATH . '/views/_includes/footer.php';
		
    } // index
	
} // class HomeController