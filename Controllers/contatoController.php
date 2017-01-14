<?php

    /*
     * Site Institucional com estrutura MVC
     */

    class ContatoController extends Controller {
        
        public function index() {
            $viewData = array(
                "aviso"=>""
            );

            if ( isset($_POST['nome']) && !empty($_POST['nome'])) {
                
                $nome = addslashes($_POST['nome']);
                $email = addslashes($_POST['email']);
                $mensagem = addslashes($_POST['texto']);
                
                // para quem vai o e-mail
                $para = "suporte@geraldovictorazzi.com.br";
                $assunto = "Dúvida na Programação";
                $totalMensagem = $nome."<br>".$email."<br>".$mensagem;
                
                //cabecalho
                $cabecalho = "From: suporte@geraldovictorazzi.com.br"."\r\n".
                        "reply-to :".$email."\r\n".
                        "X-Mailer : PHP/".phpversion();
                
                mail($para, $assunto, $totalMensagem, $cabecalho);
                $viewData['aviso']="Email enviado com Sucesso !!!!";

                
            }

            
            $this->TemplateView("contato", $viewData);
        }
        
        
        
        
    }

?>
