
<?php
class ServicosController extends Controller{
  
    public function __construct() {
        parent::__construct();
    }

    
	public function index() { 
            $dados = array();
            
            $this->loadTemplate('Servicos', $dados);                     
}
}
?>