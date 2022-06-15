<?php

namespace features\bootstrap;

$limitePlato = "5 5";
$posicaoRover = "1 2 N";
$movimentoRover = "LMLMLMLMM";

$limite = explode(" ", $limitePlato);
$posicao = explode(" ", $posicaoRover);
$movimento = str_split($movimentoRover);

class Rover {
  private $x;
  private $y;
  private $direcao;
  private $plato;

  function __construct($x, $y, $direcao, Plato $plato){
      $this->x = $x;
      $this->y = $y;
      $this->direcao = $direcao;
      $this->plato = $plato;
  }
  
  public function mover($direcao){
    switch($direcao){
      
      case "L":
        $this->virarEsquerda();
        break;
      
      case "R":
        $this->virarDireita();
        break;
      
      case "M":
        $this->moverAdiante();
        break;
      
      default:
        echo "Movimento inválido!!";
    }
  }

  public function moverAdiante(){
    switch($this->direcao){
      
      case "N":
        if($this->y + 1 <= $this->plato->getAltura()){
          $this->y++;
        }
        break;
      
      case "L":
        if($this->x + 1 <= $this->plato->getLargura()){
          $this->x++;
        }
        break;
      
      case "S";
        if($this->y - 1 >= 0){
          $this->y--;
        }
        break;
      
      case "O";
        if($this->x - 1 >= 0){
          $this->x--;
        }
        break;
      
      default:
        echo "Impossível mover adiante";
    }
  }

  public function virarEsquerda(){
    switch($this->direcao){
      
      case "N":
        $this->direcao = "O";
        break;

      case "L":
        $this->direcao = "N";
        break;

      case "S":
        $this->direcao = "L";
        break;

      case "O":
        $this->direcao = "S";
        break;
    }
  }
  
  public function virarDireita(){
    switch($this->direcao){
      
      case "N":
        $this->direcao = "L";
        break;

      case "L":
        $this->direcao = "S";
        break;

      case "S":
        $this->direcao = "O";
        break;

      case "O":
        $this->direcao = "N";
        break;
    }
  }

  public function getX(){
      return $this->x;
  }

  public function getY(){
      return $this->y;
  }

  public function getDirecao(){
      return $this->direcao;
  }

}