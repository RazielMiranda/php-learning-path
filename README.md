# CURSO DA TIM TEC DE DESENVOLVIMENTO WEB COM PHP

https://cursos.timtec.com.br/course/desenvolvimento-web-php/lesson/aula-2-tarefas-simples



Funções de inclusão:

Muito bem! É importante saber quando usar cada uma dessas funções. As diferenças são as seguintes:

Include: Emite aviso (warning) quando não encontram o arquivo, mas permite a continuidade da execução.
Require: Emite erro (error) quando não encontra o arquivo, impedindo a execução.

Em ambos os casos o sufixo _____once, como em require_once() e include_once(), serve para indicar que múltiplas chamadas, em especial as realizadas em arquivos referenciados, serão desconsideradas. Esta funcionalidade é usada, em geral, para evitar importações circulares. Importação circular: A importa B que importa C que importa A.


require_once()
Função utilizada para incluir uma única vez um trecho de código necessário ao site, evitando dependências circulares. Lança um erro de execução e impede a renderização caso seja impossível encontrar o arquivo a ser inserido.