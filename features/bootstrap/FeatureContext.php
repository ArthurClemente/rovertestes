<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use features\bootstrap\Plato;
use features\bootstrap\Rover;
use features\bootstrap\RoverSquad;
use PHPUnit\Framework\Assert;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    private Plato $plato;
    private Rover $rover;

    // Testes de mover Rover
    /**
     * @Given que a direcao do plato é :direcao
     */
    public function direcaoDoPlatoE($direcao){
        $this->plato = new Plato("5 5");
        $this->rover = new Rover(1, 3, $direcao, $this->plato);
    }
    
    /**
     * @When o parametro da funcao mover for :movimento
     */
    public function parametroDaFuncaoMoverFor($movimento)
    {
        $this->rover->mover($movimento);
    }

    /**
     * @Then a direcao do rover deve ser igual :direcao
     */
    public function direcaoDoRoverDeveSerIgualA($direcao)
    {
        PHPUnit\Framework\Assert::assertSame(
            $direcao,
            $this->rover->getDirecaoRover()
        );
    }
}