<?php

namespace features\bootstrap;
use features\bootstrap\Rover;

class RoverSquad{
  private $squad = [];
  private $plato;
  private $roverAtivo;

  function __construct(Plato $plato){
    $this->plato = $plato;
  }

  public function lancarRover($posicaoLancamento){
    $valPosicInicial = explode(" ", $posicaoLancamento);
    $x = intval($valPosicInicial[0]);
    $y = intval($valPosicInicial[1]);
    $posicao = $valPosicInicial[2];

    $this->checkValidadeLocalLancamento($x, $y);
    $rover = new Rover($x, $y, $posicao, $this->plato);
    array_push($this->squad, $rover);
    return $rover;
  }

  

  public function checkValidadeLocalLancamento($x, $y){
    $larguraMax = intval($this->plato->getLargura());
    $alturaMax = intval($this->plato->getAltura());
    
    if($x < 0 or $x > $larguraMax or
      $y < 0 or $y > $alturaMax )
      {
        return "Local de lancamento do rover inválido";
      }
  }
}