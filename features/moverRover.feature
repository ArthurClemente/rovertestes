# language: pt
Funcionalidade: Mover o rover
    Para mover o rover
    Eu como um controlador
    Preciso conseguir mover o rover na superficie

Exemplo: Girar o rover da direcao "N" para a direcao "O"
    Dado que a "direcao" do rover é "N"
    Quando o parametro da funcao "mover" for "L"
    Entao a direcao do rover deve ser igual "O"

Exemplo: Girar o rover da direcao "O" para a direcao "L"
    Dado que a "direcao" do rover é "O"
    Quando o parametro da funcao "mover" for "R", "R"
    Entao a direcao do rover deve ser igual "L"

Exemplo: Mover o rover para a direita
    Dado que a "direcao" do rover é "R"
    E a posicao "x" é 0
    E a posicao "y" é 0
    Quando o parametro da funcao "mover" for "M"
    Entao a posicao "x" deve ser igual a 1

Exemplo: Mover o rover para a esquerda
    Dado que a "direcao" do rover é "L"
    E a posicao "x" é 0
    E a posicao "y" é 0
    Quando o parametro da funcao "mover" for "M"
    Entao a posicao "x" deve ser igual a 0
    E deve ser mostrada a mensagem "Impossível mover adiante"

Exemplo: Mover o rover para cima
    Dado que a "direcao" do rover é "N"
    E a posicao "x" é 0
    E a posicao "y" é 0
    Quando o parametro da funcao "mover" for "M"
    Entao a posicao "y" deve ser igual a 1

Exemplo: Mover o rover para cima e esquerda
    Dado que a "direcao" do rover é "N"
    E a posicao "x" é 3
    E a posicao "y" é 3
    Quando o parametro da funcao "mover" for "M", "L", "M"
    Entao a posicao "x" deve ser igual a 2
    E a posicao "y" deve ser igual a 4

Exemplo: Mover o rover além da "largura" do plato
    Dado que a "altura" do plato é 5
    E a "largura" do plato é 5
    E a posicao "x" do rover é 4
    E a posicao "y" do rover é 1
    E a direcao do rover é "L"
    Quando o parametro da funcao "mover" for "M", "M"
    Entao a posicao "x" deve ser igual a 5
    E deve ser mostrada a mensagem "Impossível mover adiante"

Exemplo: Mover o rover além da "altura" do plato
    Dado que a "altura" do plato é 2
    E a "largura" do plato é 2
    E a posicao "x" do rover é 1
    E a posicao "y" do rover é 1
    E a direcao do rover é "N"
    Quando o parametro da funcao "mover" for "M", "M"
    Entao a posicao "y" deve ser igual a 2
    E deve ser mostrada a mensagem "Impossível mover adiante"