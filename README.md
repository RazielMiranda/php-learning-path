# Formulários PHP, Protocolos e sessões e validações:

Entender como funciona os formulários, o metodo http e seus verbos com controle de sessão e validação dos dados.

###Aula 1:

* HTTP (Hipertext transfer protocol)
* REQUEST E RESPONDE (Request é a requisação ao servidor, response é a resposta ao cliente)
* HEADERS (Aonde trafega a informação)

1. O METODO GET:
	$GET[] serve para trafegar os dados pelo header da requisição e com o GET mostramos informações.


2. O METODO POST:
	$POST[] é responsável por enviar informações para serem processadas e com o POST salvamos informações.

Como a gente utiliza os metodos? basta criar um formulário e dentro do atributo method do HTML escolher se quer POST ou GET, outra coisa e que é necessário [é mostrar a URL do lugar onde esses dados vão ser processados. Para mostrar onde é o local correto basta colocar o caminho do arquivo/URL que deseja que os dados sejam enviados dentro do atributo action do HTML. e claro ter um botão com o type de submit.

###Aula 2:

Após enviar os dados, é necessário começar a se preocupar com a validação dos dados, para validadar os dados eles tem que bater com a regra de negocio e dependo dela o PHP tem diversas funções e metodos que pode auxiliar como:

empty($nome) = Verifica se uma variavél está vazia.
strlen($nome) = Conta a quantidade de caracters de uma string.
is_numeric($idade) = Verifica se a string é númerica, existem varios tipos de is_.
!is_numeric() = Quando se tem um esclamação está negando o retorno do método.

###Aula 3:

session_start() = A sessão deve ser sempre o primeiro código a ser executado.

Um exemplo de uso de sessões são na hora de autenticar usuarios, ou seja é perfeita pra esse tipo de exemplo pois, se ele se autenticar uma vez, ele consegue ficar autenticado nas outras, outra forma de usar sessões são na hora de deixar uma mensagem continuamente. Uma sessão sempre fica aberta até o navegador fechar. Uma sessão está interligado com o HTTP. Um array número é diferente do array de sessão, a sessão é um array associativo, onde voce associa um valor a um nome.

O comando header é utilizado para montar um cabeçalho do pacote HTTP. 

O comando isset() serve para verificar se uma variável é existente ou se não possui valor igual a null.

? seria como a execução do if se retorna true e o : seria comoo else



Array([0]=>pombo [1]=>pidgeot [2]=>flamingo [3]=>garça [4]=>morcego [5]=>pato)
