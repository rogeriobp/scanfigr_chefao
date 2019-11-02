<?php
 
class ContatoDao 
{
    private $db;
    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function add(Contato $contato) 
    {
        $nome = $contato->getNome();
        $email = $contato->getEmail();
        $data = $contato->getData();
        $ip = $contato->getIp();
        $url = $contato->getUrl();
        

        $query = "INSERT INTO contato (nome, email, data, ip ) VALUES(?,?, ?, ?)"; 
        $stmt = mysqli_prepare($this->db->getConection(), $query);
        mysqli_stmt_bind_param($stmt,'ssss',$nome, $email, $data, $ip);
        mysqli_stmt_execute($stmt); 
        $contato->setId($stmt->insert_id);
       $result = mysqli_stmt_close($stmt);

       return $result;
    }
    
    public function consultaEmail(Contato $contato) 
    {
      $email = $contato->getEmail();

       $query = $this->db->getConection()->prepare("SELECT * FROM contato WHERE email=?");
       $query->bind_param('s', $email);
       $query->execute();

       $result = $query->get_result();

       $query->close();
       return count($result->fetch_all()); 
        
    }
    
    public function updateContato(Contato $contato) 
    {
        $email = $contato->getEmail();
        $nome = $contato->getUltimoNome();
        $data = $contato->getUltimoData();
        $ip = $contato->getUltimoIp();
        $url = $contato->getUltimoUrl();
 
       $conecta = $this->db->getConection();
        $query = $conecta->prepare("UPDATE contato 
         SET ultimo_nome=?, 
             ultimo_ip=?, 
             ultimo_url=?,
             ultimo_data=? 
             WHERE MD5(id)=?");

       $query->bind_param('sssdi',$nome, $ip, $url, $data, $email);

     $result = $query->execute(); 
       $query->close();
         return $result;
    }

}
 
?>