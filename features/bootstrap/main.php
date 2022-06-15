<?php

use features\bootstrap\Plato;
use features\bootstrap\RoverSquad;

$squad = new RoverSquad(new Plato("5 5"));

$squad->lancarRover("2 2 N");