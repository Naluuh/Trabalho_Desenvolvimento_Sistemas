PROJETO PRÁTICO FINAL – PHP

Tema do Sistema:
----------------
Cadastro de Contatos Pessoais

Resumo do Funcionamento:
------------------------
O sistema permite que o usuário crie uma conta, faça login e cadastre seus próprios contatos pessoais. 
Cada contato possui as seguintes informações: nome, RG, número de telefone e endereço.

Após o login, o usuário pode:
- Visualizar os contatos cadastrados;
- Cadastrar um novo contato;
- Excluir contatos que ele mesmo adicionou;
- Encerrar a sessão com segurança.

Usuário e Senha de Teste:
-------------------------
Usuário: teste
Senha: 123456

(O cadastro de novos usuários pode ser feito através do link na tela de login.)

Passos para Instalação do Banco:
--------------------------------
1. Importe o arquivo bd_contatos.sql no seu banco de dados MySQL.
2. Edite o arquivo conexao.php com os dados de acesso ao seu servidor MySQL.
3. Coloque todos os arquivos do projeto em uma pasta no seu servidor local (ex: htdocs se usar XAMPP).
4. Acesse o sistema pelo navegador:
   http://localhost/cadastro-contatos/index.php
