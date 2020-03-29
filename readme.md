# PHP: Orientação a objetos

Orientação objetos trata de simular a vida real em programação, tratando literalmente como um objeto o código.

## Classes, modificadores e funções

A palavra reservada "class" no PHP cria uma classe, um objeto é uma instancia de uma classe, uma classe possui atributos e por sua vez métodos que definem o que de fato aquela classe faz e possui. Então um objeto serve para poder definir e usar os métodos que vem da classe por exemplo: Pessoa é uma classe, toda pessoa tem a propriedade nome e a função de respirar, entretanto nem toda pessoa tem o mesmo nome e nem toda pessoa respira na mesma velocidade essas "particularidades" são definidas no objeto.

	class Pessoa {
		$NomePessoa;
	}

Os objetos são instâncias de uma classe, para instanciar um objeto é usado a palavra "new" ou seja você basicamente está dizendo que uma variável, tem todas as propriedades e todos os métodos de uma classe, sendo possível usar os métodos da classe e também definir as suas propriedades para cada novo objeto que você cria por exemplo: Eu Raziel sou uma pessoa então eu Raziel estendo a classe pessoa, o Raziel é um objeto da classe pessoa. em termos de código é igual a:

	$raziel = new Pessoa();

Quando se declara atributos e métodos dentro de classe é necessário declarar os modificadores de acesso que é o que controla a visibilidade das propriedades e métodos dessa classe. Para isso temos algumas palavras reservadas que definem isso são elas:

	public - com o public é possível acessar propriedades e métodos da classe dentro ou fora dela.
	private - com o private deixa tudo fechado, ou seja, só pode ser acessado dentro da própria classe.
	protected - O protected é a mesma coisa que o private, a exceção e que métodos e atributos com esse modificador conseguem ser acessados de classes que herdam da classe pai. Conceito de herança.

Para acessar uma propriedade de um objeto basta usar:
	
	$raziel->NomePessoa;

(Pensando que estamos acessando com um modificador público, e chamando a variável de outro arquivo)

E quando usar o modificador protected?

Pense no caso do saldo, se você tem um saldo de 2000 reais e aí você o deixa público seria possível alterar de 2000 para 0 ou seja os modificadores são importantes para esse tipo de controle.

###Conceito de métodos dentro de classes

Os métodos servem para adicionar ações dentro de uma classe, eles também possuem os modificadores de acesso, para construir um método é a mesma sintaxe, entretanto com o modificador na frente:

	public function falarOla () {
		return 'olá';
	}

Para acessar um método de uma classe basta usar:

	echo $raziel->falarOla();

e caso fosse com parâmetros seria:

	echo $raziel->falarOla('ola, tudo bem?');

O método construtor é sempre executado quando você instancia um novo objeto de uma classe, em código fica:

	public function __construct(){
		echo 'eu sou o construtor';
	}

Em uma classe não se define as variáveis, pois, o objetivo da orientação objeto é criar coisas dinâmicas, e para fazer isso se usa o método construtor, para isso se deve passar como parâmetro as propriedades que queremos setar. É importante ressaltar que quando você está trabalhando com orientação a objetos, não deve deixa as propriedades serem trocadas externamente, para isso se deve criar métodos que alterem essas propriedades.

E como fazer isso?

Imagine o cenário de um banco, onde estamos trabalhando com saldo, quais são as formas de alterar o saldo de uma conta? ou com deposito ou com saque, então para isso se deve criar dois métodos que manipulem essa propriedade.


## Datetime, manipulação de dados, datas e horas

A classe DateTime serve para manipular datas e formata-las dentro dos padrões necessários caso queira visualizar as especificações basta olhar na documentação do PHP:

https://www.php.net/manual/pt_BR/class.datetime.php

Para instanciar um novo objeto dessa classe se utiliza:

	new $data = new DateTime();

Com esse método já temos acesso a data e hora em que roda o PHP.

Para formatar a data usamos o método format() com os devidos dados de formatação:

	echo $data->format('d-m-y');
	echo $data->format('D-M-Y');

Temos também a classe DateInterval essa classe tem métodos de intervalo de tempos, por exemplo se quisermos adicionar ou subtrair intervalos de tempo de datas basta usarmos:

	$intervalo = new DateInterval('PT5M');

Os parâmetros de quantidade de intervalo de tempo que queremos adicionar são passados diretamente no método construtor da classe, existem diversos parâmetros que podem ser consultados aqui:

https://www.php.net/manual/pt_BR/class.dateinterval.php

No exemplo acima estamos querendo colocar um intervalo de 5 minutos na data esse intervalo pode ser adicionado ou subtraído da data através dos métodos:

	add() e sub()

Ficando assim:


	$data = new DateTime();
	$intervalo = new DateInterval('PT5M');
	
	$data->add($intervalo);
	var_dump($data);

	$data->sub($intervalo);
	var_dump($data);

## Exceções em PHP

Quando a aplicação apresenta um comportamento inesperado nós trabalhamos com exceções, ela interrompe o funcionamento do código e nós podemos coletar diversos dados com as exceções e para isso usamos a classe Exception que pode ser vista aqui:

https://www.php.net/manual/pt_BR/class.exception

Para lançar uma essa usamos a sua instanciação e passamos a mensagem que desejamos em seu construtor ficando assim:

	throw new Exception("Error Processing Request");

Sempre que se usa uma exceção o código para de funcionar e lança um fatal error quando a exceção é usada sem captura (try e catch), exceções também são usadas para evitar validações com condicionais, como no exemplo abaixo:

	//A função recebe o array usuário como parâmetro, em seguida faz uma verificação para saber se algum dos índices desse array estão vazios, caso estejam vai lançar a exceção de campos não preenchidos. Senão retorna verdade e continua executando o código

	function validarUsuario(array $usuario)
	{
		if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
			throw new Exception("Campos obrigatórios não foram preenchidos!");
		}
		return true;
	}

	//Aqui declaramos o array e não passamos o parâmetro nome, justamente para forçar o erro

	$usuario = [
	'codigo' => 1,
	'nome' => '',
	'idade' => 43,
	];

	//Chamando a função validarUsuario e passando o array usuario como parâmetro para a função

	validarUsuario($usuario);


### Capturando exceções com Try e Catch

Como o próprio nome já diz Try vem de tentar, ou seja, irá tentar executar uma coisa e se der errado o catch vai pegar o motivo que fez isso dar errado então adicionamos o seguinte bloco de código no código de cima, buscando melhorar a sua performance:

	
	//Aqui o try verifica se a função retorna "true"

	$status = false; //usada no finally

	try{
		validarUsuario($usuario);

	//Aqui o catch pega a exceção que foi lançada e a mensagem relacionada a ela com o método getMessage() da mesma forma que usamos o método getMessage() podemos usar outros métodos dessa classe que auxiliem na hora de mostrar o porquê dessa exceção, entretanto mesmo lançando a exceção o codigo continua rodando, e para que não continue rodando é importante adicionar algum método de parada de codigo como o die(), return false, break etc.

	} catch (Exception $e) {
		echo $e->getMessage();

	//O bloco finally executa o finalmente da situação e serve para identificar o fluxo e como o mesmo está funcionando, para saber o status das exceções usamos uma variável $status que armazena primeiramente como false, caso os erros sejam lançados, armazenamos o estado nessa variável e através da técnica "cast" transformamos essa variável em int para retornar 0 e 1 invés de false ou true, isso é muito bom para ir controlando o fluxo e verificando se está tudo correndo bem.

	}finally{
		echo "<br><br>Status da operação = ".(int)$status;
		die();
	}








































