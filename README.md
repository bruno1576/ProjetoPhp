#Projeto php

##Projeto Fase - 2

**Ajustando as rotas

Agora que voc� j� possui um site simples e funcional com PHP, utilize os conhecimentos passados nesse cap�tulo para redirecionar todos os requests para seu index.php. Logo, quando o usu�rio acessar site.com.br/contato, dever� ser chamada a p�gina de contato.**
REGRAS:

>- Voc� dever� verificar sempre se o arquivo acessado existe
- Voc� dever� apresentar uma mensagem de erro 404 caso a url acessada seja inv�lida (n�o esque�a de enviar o STATUS CODE 404)
- Crie uma fun��o para fazer a verifica��o das rotas
- Registre cada uma das rotas em um array

## Projeto Fase - 1

**Nessa fase do projeto voc� dever� criar um pequeno site em PHP com os seguintes requisitos:**
> - Links de navega��o
    - Home
    - Empresa
    - Produtos
    - Servi�os
    - Contato
- A estiliza��o dever� ser feito utilizando o Twitter Bootstrap (se voc� n�o aprendeu utiliz�-lo ainda, ser� uma �tima oportunidade)
- A manuten��o desse pequeno site deve ser muito pr�tica, ou seja, utilizando recursos do PHP, voc� evitar� ter que ficar repetindo blocos HTML em diversos arquivos
- No rodap� do site, dever ser exibido "Todos os direitos reservados - <ANO>" - O ano precisa ser din�mico
- O usu�rio final n�o poder� mudar o comportamento da p�gina, ou seja, o sistema tem que tratar os erros no caso de um par�metro GET ter sido alterado de prop�sito
- O sistema deve ser MUITO simples, sem utiliza��o de qualquer banco de dados, etc.
- A p�gina de contato deve possuir um formul�rio de contato com os campos:
    - Nome
    - Email
    - Assunto
    - Mensagem
- Quando o formul�rio for enviado, uma mensagem deve ser exibida para o usu�rio final:
    - Dados enviados com sucesso, abaixo seguem os dados que voc� enviou
    - Exibi��o dos campos preenchidos pelos usu�rio.
