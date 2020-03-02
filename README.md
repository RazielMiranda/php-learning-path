# Funções em PHP:


##Declarando funções:
function validaNome(string $nome) : bool{


	return true;
}

1. Em uma função voce pode definir o tipo do retorno colocando : tipo_retorno
2. Com a função declare('strict type = 1') voce deixa o PHP com tipagem forte

Função para validar data:

$data = "04/04/2011";
if(!preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $data)) {
echo "Data inválida.";
}


