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
  private $direcaoRover;
  private $plato;

  function __construct($x, $y, $direcaoRover, Plato $plato){
      $this->x = $x;
      $this->y = $y;
      $this->direcaoRover = $direcaoRover;
      $this->plato = $plato;
  }
  
  public function mover($direcaoMovimento){
    $movimento = str_split($direcaoMovimento);
    foreach($movimento as $move){
      switch($move){
        
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
  }

  public function moverAdiante(){
    $x = $this->x;
    $y = $this->y;
    switch($this->direcaoRover){
      
      case "N":
        if($y + 1 <= $this->plato->getAltura()){
          $this->y++;
        }else{
          echo "impossível mover adiante ";
          die();
        }
        break;
      
      case "L":
        if($x + 1 <= $this->plato->getLargura()){
          $this->x++;
        }else{
          echo "impossível mover adiante ";
          die();
        }
        break;
      
      case "S":
        if($y - 1 >= 0){
          $this->y-- ;
        }else{
          echo "impossível mover adiante ";
          die();
        }
        break;
      
      case "O":
        if($x - 1 >= 0){
          $this->x--;
        }else{
          echo "impossível mover adiante ";
          die();
        }
        break;
      
      default:
        echo "Impossível mover adiante";
        die();
    }
  }

  public function virarEsquerda(){
    switch($this->direcaoRover){
      
      case "N":
        $this->direcaoRover = "O";
        break;

      case "L":
        $this->direcaoRover = "N";
        break;

      case "S":
        $this->direcaoRover = "L";
        break;

      case "O":
        $this->direcaoRover = "S";
        break;
    }
  }
  
  public function virarDireita(){
    switch($this->direcaoRover){
      
      case "N":
        $this->direcaoRover = "L";
        break;

      case "L":
        $this->direcaoRover = "S";
        break;

      case "S":
        $this->direcaoRover = "O";
        break;

      case "O":
        $this->direcaoRover = "N";
        break;
    }
  }

  public function getX(){
      return $this->x;
  }

  public function getY(){
      return $this->y;
  }

  public function getDirecaoRover(){
      return $this->direcaoRover;
  }

}