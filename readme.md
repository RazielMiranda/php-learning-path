#PHP: ORIENTAÇÃO A OBJETOS

Orientaçãoa  objetos se trata de simular a vida real em programação, tratando literalmente como um objeto o código.

1. A palavra reservada "class" no PHP cria uma classe, um objeto é uma instancia de uma classe, uma classe possui atributos e por sua vez metodos e funções que definem o que de fato aquela classe faz então um objeto serve para poder definir e usar os metodos que vem da classe por exemplo: Pessoa é uma classe, toda pessoa tem a propriedade nome e a função de respirar, entretanto nem toda pessoa tem o mesmo nome e nem toda pessoa respira na mesma velocidade essas "particularidades" são definidas no objeto.

	class Pessoa{



	}

2. Os objetos são instancias de uma classe para instanciar um objeto é usado a palavra "new" ou seja você basicamente esta dizendo que uma váriavel, tem todas as propriedades e todas as funções de uma classe, sendo possível usar as funções da classe e também definir as suas propriedades para cada novo objeto que voce cria por exemplo: Eu Raziel sou uma pessoa então eu Raziel estendo a classe pessoa, o Raziel é um objeto da classe pessoa. em termos de código é igual a:

	$raziel = new Pessoa();

3. 