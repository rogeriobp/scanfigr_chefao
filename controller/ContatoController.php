<?php 
require_once ('../model/Contato.php');
require_once ('../dao/ContatoDao.php');
require_once ('../model/Database.php');

class ContatoController{
    public function inseri(){
    $contato = new Contato();
    $conexao = new Database();

    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $ip = $_POST['ip'];
    if(!empty($email) && !empty($email)){
    $contato->setNome($nome);
    $contato->setEmail($email);
    $contato->setIp($ip);
            //Pega a data atual    
         date_default_timezone_set('America/Sao_Paulo');
            $dat =  date('d/m/Y \à\s H:i:s');
          $contato->setData($dat);
        
    $contadoDao = new ContatoDao($conexao); 
        
   $result= $contadoDao->consultaEmail($contato);
        if($result == 0){
                 
         $resultado = $contadoDao->add($contato);
  
            echo json_encode($resultado);
        }else{   
            //Pega a data atual    
         date_default_timezone_set('America/Sao_Paulo');
            $dat =  date('d/m/Y \à\s H:i:s');
          $contato->setUltimoData($dat);

        $contato->setUltimoNome($nome);
        $contato->setUltimoIp($ip);
        $contato->setUltimoUrl("");

       $resultado = $contadoDao->updateContato($contato);
           echo json_encode($resultado);
        }
    }else{
     echo json_encode(true);  
    }

}    
    
}

$contrl = new ContatoController();
$contrl->inseri();


 