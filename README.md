# Funções em PHP:


##Declarando funções:
function validaNome(string $nome) : bool{


	return true;
}

1. Em uma função voce pode definir o tipo do retorno colocando : tipo_retorno
2. Com a função declare('strict type = 1') voce deixa o PHP com tipagem forte
3. Em PHP podemos declarar que um metodo pode receber string mas se ele precisar pode retornar null para isso basta adicionar o coringa ?string na frente do parametro de retorno.
4. A dfunção unset ela destroi uma variavél, que está setada.

Função para validar data:

$data = "04/04/2011";
if(!preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $data)) {
echo "Data inválida.";
}


