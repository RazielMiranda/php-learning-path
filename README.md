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

Após enviar os dados, é necessário começar a se preocupar com a validação dos dados, para validadar os dados eles tem que bater com a regra de negocio e dependo dela o PHP tem diversas funções e metodos que pode auxiliar como:

empty($nome) = Verifica se uma variavél está vazia.
strlen($nome) = Conta a quantidade de caracters de uma string.