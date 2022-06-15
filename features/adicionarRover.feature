# language: pt
Funcionalidade: Adicionar rover
    Para utilizar o rover
    Como um controlador
    Eu preciso adicionar um novo rover na superficie

Exemplo: Adicionar rover em uma altura proibida
    Dado que a "altura" do plato é 5
    E a "largura" do plato é 3
    Quando eu adiciono um rover na posicao "y" igual a 9
    E a posicao "x" é igual a 3
    Entao eu deveria receber a mensagem "Local de lancamento do rover inválido"

Exemplo: Adicionar rover em uma area permitida
    Dado que a "altura" do plato é 7
    E a "largura" do plato é 5
    Quando eu adiciono um rover na posicao "x" igual a 1
    E a na posicao "y" igual a 3
    Entao o tamanho da lista "squad" deveria aumentar em 1
    E o "roverAtivo" deve ter a posicao "x" igual a 3
    E o "roverAtivo" deve ter a posicao "y" igual a 1
    