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
    $posicao = intval($valPosicInicial[2]);

    $this->checkValidadeLocalLancamento($x, $y);
    $rover = new Rover($x, $y, $posicao, $this->plato);
    array_push($this->squad, $rover);
    $this->roverAtivo = $rover;
  }

  public function checkValidadeLocalLancamento($x, $y){
    if($x < 0 && $x > $this->plato->getLargura() &&
      $y < 0 && $y > $this->plato->getAltura())
    {
        return "Local de lancamento do rover inválido";
      }
  }
}