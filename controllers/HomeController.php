
<?php
class HomeController extends Controller{
  
    public function __construct() {
        parent::__construct();
    }

    
	public function index() { 
            $dados = array();
            $portfolio = new Portfolio();
            $dados['portfolio'] = $portfolio->getTrabalhos(6);
            $this->loadTemplate('Home', $dados);                     
}
}
?>