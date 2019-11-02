<?php
 
class Contato {
 
    private $id;
    private $ip;
    private $nome;
    private $email;
    private $data;
    private $ultimoIp;
    private $ultimoNome;
    private $ultimoEmail;
    private $ultimoData;
    private $url;
    private $ultimo_url;
  
 
    public function getId() {
        return $this->id;
    }
 
    public function setId($id) {
        $this->id = $id;
    }
    public function getNome() {
        return $this->nome;
    }
 
    public function setNome($nome) {
        $this->nome = $nome;
    }
 
    public function getEmail() {
        return $this->email;
    }
 
    public function setEmail($email) {
        $this->email = strtolower($email);
    }
        
    public function getIp() {
        return $this->ip;
    }
    
    public function setIp($ip) {
        $this->ip = $ip;
    }
         
    public function getData() {
        return $this->data;
    }
    
    public function setData($data) {
        $this->data = $data;
    }

    public function getUltimoNome() {
        return $this->ultimoNome;
    }
 
    public function setUltimoNome($ultimoNome) {
        $this->ultimoNome = $ultimoNome;
    }
 
    public function getUltimoEmail() {
        return $this->email;
    }
 
    public function setUltimoEmail($ultimoEmail) {
        $this->ultimoEmail = strtolower($ultimoEmail);
    }
        
    public function getUltimoIp() {
        return $this->ultimoIp;
    }
    
    public function setUltimoIp($ultimoIp) {
        $this->ultimoIp = $ultimoIp;
    }
         
    public function getUltimoData() {
        return $this->ultimoData;
    }
    
    public function setUltimoData($ultimoData) {
        $this->ultimoData = $ultimoData;
    }
        public function getUrl() {
        return $this->url;
    }
    
    public function setUrl($url) {
        $this->url = $url;
    }

        public function getUltimoUrl() {
        return $this->ultimoUrl;
    }
    
    public function setUltimoUrl($ultimoUrl) {
        $this->ultimoUrl = $ultimoUrl;
    }

}
 
?>