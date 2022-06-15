<?php

namespace features\bootstrap;

class Plato {
  private $altura;
  private $largura;

  function __construct($tamanho){
      $tamanho = explode(" ", $tamanho);
      $this->altura = intval($tamanho[0]);
      $this->largura = intval($tamanho[1]);
  }

  public function getAltura(){
    return $this->altura;
  }
  
  public function getLargura(){
    return $this->largura;
  }
  
}

?>