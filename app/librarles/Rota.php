<?php
class Rota{
    private $controlador = "Paginas";
    public function __construct(){
        //echo 'criando a primeira classe ';
        $this->url();
        if(file_exists('../app/Controllers/'.ucwords($url[@]).'.php')) {
        $this->controlador = ucwords($url[0]); unset($url[0]);
      } require_once '../app/Controllers/'.$this->controlador.'.php'; $this->controlador = new $this->controlador;

var_dump($this);

}
        //verificar se a url existe
    }//fim da função construtor

    private function url(){
        //echo 'carregando a url';
        //o FILTER_SANITIZE_URL remove caracteres inválidos da minha url
        $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
        //verificar se a url existe
        if(isset($url)){

            //trim - Retira espaço no ínicio e final de uma string
            //rtrim - Retira espaço em branco(ou  outros caracteres) ou no final da string
            $url = trim(rtrim($url,'/'));
            //explode - Divideuma string em strings, retorna um array
            $url = explode('/', $url);
            return $url;
        }//fim do if
    }//fim da function url

}//fim da classe Rota