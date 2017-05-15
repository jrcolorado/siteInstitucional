<?php
class ContatoController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array(
            'aviso' => ''
        );
        
        if(isset($_POST['nome']) && !empty($_POST['nome'])) {
            
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $msg = addslashes($_POST['mensagem']);
            
            $para = "joaoromario@gmail.com";
            $assunto = "Dúvida do site";
            $mensagem = "Nome: ".$nome."<br/>E-mail: ".$email."<br/>Mensagem: ".$msg;
            
            $cabecalho = 'From: joaoromario@gmail.com'. "\r\n".
                    'Reply-To: '.$email. "\r\n".
                    'X-Mailer: PHP/'.phpversion();
                        
            mail($para, $assunto, $mensagem, $cabecalho);
            
            $dados['aviso'] = "E-mail enviado com sucesso!";
        }
        
        $this->loadTemplate('Contato', $dados);
    }

}

