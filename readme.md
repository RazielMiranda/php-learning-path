#PHP: Orientação a objetos

Orientaçãoa objetos se trata de simular a vida real em programação, tratando literalmente como um objeto o código.

##Classes, modificadores e funções

A palavra reservada "class" no PHP cria uma classe, um objeto é uma instancia de uma classe, uma classe possui atributos e por sua vez metodos que definem o que de fato aquela classe faz e possui. Então um objeto serve para poder definir e usar os metodos que vem da classe por exemplo: Pessoa é uma classe, toda pessoa tem a propriedade nome e a função de respirar, entretanto nem toda pessoa tem o mesmo nome e nem toda pessoa respira na mesma velocidade essas "particularidades" são definidas no objeto.

	class Pessoa{
		$NomePessoa;
	}

Os objetos são instancias de uma classe para instanciar um objeto é usado a palavra "new" ou seja você basicamente esta dizendo que uma váriavel, tem todas as propriedades e todas os metodos de uma classe, sendo possível usar os metodos da classe e também definir as suas propriedades para cada novo objeto que voce cria por exemplo: Eu Raziel sou uma pessoa então eu Raziel estendo a classe pessoa, o Raziel é um objeto da classe pessoa. em termos de código é igual a:

	$raziel = new Pessoa();

Quandos se declara atributos e metodos dentro de classe é necessário declarar os modificadores de acesso que é o que controla a visibilidade das propriedades e metodos dessa classe. Para isso temos algumas palavras reservadas que definem isso são elas:

	public - com o public é possível acessar propriedades e metodos da classe dentro ou fora dela.
	private - com o private deixa tudo fechado ou seja só pode ser acessado dentro da classe.
	protected - O protected é a mesma coisa que o private, a execção e que metodos e atributos com esse modificador conseguem ser acessados de classes que herdam da classe pai. Conceito de herança.

Para acessar uma propriedade de um objeto basta usar:
	
	$raziel->NomePessoa;

(Pensando que estamos acessando com um modificador publico, e chamando a váriavel de outro arquivo)

E quando usar o modificador protected?

Pense no caso do saldo, se você tem um saldo de 2000 reais e ai voce deixa ele publico seria possivel alterar de 2000 para 0 ou seja os modificadores são importantes para esse tipo de controle.

###Conceito de metodos dentro de classes

Os metodos servem para adicionar ações dentro de uma classe eles também possuem os modificadores de acesso, para construir um metodo é a mesma sintaxe, entretando com o modificador na frente:

	public function falarOla(){
		return 'olá';
	}

Para acessar um metodo de uma classe basta usar:

	echo $raziel->falarOla();

e caso fosse com parametros seria:

	echo $raziel->falarOla('ola, tudo bem?');

O metodo construtor ele é sempre executado quando você instancia um novo objeto de uma classe, em código fica:

	public function __construct(){
		echo 'eu sou o construtor';
	}

Em uma classe não se define as váriaveis, pois, o objetivo da orientação objeto é criar coisas dinamicas, e para fazer isso se usa o metodo construtor, para isso se deve passar como parametro as propriedades que queremos setar. É importante ressaltar que quando você está trabalhando com orientação a objetos, a gente nao deixa as propriedades serem trocadas externamente, para isso se deve criar metodos que alterem essas propriedades.

E como fazer isso?

Imagine o cenario de um banco, onde estamos trabalhando com saldo, quais são as formas de alterar o saldo de uma conta? ou com deposito ou com saque, então para isso se deve criar dois metodos que manipulem essa propriedade.


##Datetime, manipulação de dados, datas e horas

A classe DateTime serve para manipular datas e formatalas dentro dos padrões necessarios caso queira visualizar as especificações basta olhar na documentação do PHP:

https://www.php.net/manual/pt_BR/class.datetime.php

Para instanciar uma novo objeto dessa classe se utiliza:

	new $data = new DateTime();

Com esse metodo ja temos acesso a data e hora em que roda o PHP.

Para formatar a data usamos o metodo format() com os devidos dados de formatação:

	echo $data->format('d-m-y');
	echo $data->format('D-M-Y');

Temos também a classe DateInterval essa classe tem metodos de intervalo de tempos, por exemplo se quisermos adicionar ou subtrair intervalos de tempo de datas basta usarmos:

	$intervalo = new DateInterval('PT5M');

Os parametros de quantidade de intervalo de tempo que queremos adcionar são passados diretamente no metodo construtor da classe, existem diversos parametros que podem ser consultados aqui:

https://www.php.net/manual/pt_BR/class.dateinterval.php

No exemplo acima estamos querendo colocar um intervalo de 5 minutos na data esse intervalo pode ser adicionado ou subtraido da data através dos metodos:

	add() e sub()

Ficando assim:


	$data = new DateTime();
	$intervalo = new DateInterval('PT5M');
	
	$data->add($intervalo);
	var_dump($data);

	$data->sub($intervalo);
	var_dump($data);

##Exceções em PHP

Quando a aplicação apresenta um comportamento inesperado nos trabalhamos com exceções, ela intemrrompe o funcionamento do código e nós podemos coletar diversos dados com as exceções e para isso usamos a classe Exception que pode ser vista aqui:

https://www.php.net/manual/pt_BR/class.exception

Para lançar uma essa usamos a sua instaciação e passamos a mensagem que desejamos em seu construtor ficando assim:

	throw new Exception("Error Processing Request");

Sempre que se usa uma exceção o código para de funcionar e lança um fatal error quando a exceção é usada sem captura (try e catch), exceções também são usadas para evitar validações com condicionais, como no exemplo abaixo:

	//A função recebe o array usuario como parametro, em seguida faz uma verificação para saber se algum dos indices desse array estão vazios, caso estejam vai lançar a exceção de campos nao preenchidos. Senão retorna verdade e continua executando o código

	function validarUsuario(array $usuario)
	{
		if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
			throw new Exception("Campos obrigatorios não foram preenchidos!");
		}
		return true;
	}

	//Aqui declaramos o array e não passamos o parametro nome, justamente para forçar o erro

	$usuario = [
	'codigo' => 1,
	'nome' => '',
	'idade' => 43,
	];

	//Chamando a função validarUsuario e passando o array usuario como parametro para a função

	validarUsuario($usuario);


###Capturando exceções com Try e Catch

Como o próprio nome já diz Try vem de tentar ou seja irá tentar executar uma coisa e se der errado o catch vai pegar o motivo que fez isso dar errado então adicionamos o seguinte bloco de código no codígo de cima, buscando melhorar a sua perfomance:

	
	//Aqui o try verifica se a função retorna "true"

	$status = false; //usada no finally

	try{
		validarUsuario($usuario);

	//Aqui o catch pega a exceção que foi lançada e a mensagem relacionada a ela com o metodo getMessage() da mesma forma que usamos o metodo getMessage() podemos usar outros metodos dessa classe que auxiliem na hora de mostrar o porque dessa exceção, entretanto mesmo lançando a exceção o codigo continua rodando, e para que nao continue rodando é importante adicionar algum metodo de parada de codigo como o die(), return false, break etc

	} catch (Exception $e) {
		echo $e->getMessage();

	//O bloco finally executa o finalmente da situação e serve para identificar o fluxo e como o mesmo está funcionando, para saber o status das exceções usamos uma variavel $status que armazena primeiramente como false, caso os erros sejam lançados, armazenamos o estado nessa variavel e através da técnica "cast" trasnformamos essa variavel em int para retornar 0 e 1 invés de false ou true, isso é muito bom para ir controlando o fluxo e verificando se esta tudo correndo bem.

	}finally{
		echo "<br><br>Status da operação = ".(int)$status;
		die();
	}








































