README.md

Esocial Brasil Comercial (Backend Challenge)

Recursos utilizados

Laravel

vue

Npm

Dependências locais para executar a API

Composer

Bootstrap

MySQL


Ambiente de desenvolvimento

Para executar o ambiente de desenvolvimento clone o projeto, execute os comandos abaixo raiz do projeto:

Instale a versão do php 7.4 acima

Instale o MySQL

Instale o composer via linha de comando (terminal) do seu Ide exemplo (PhpStorm) - Composer install

Abre o projeto no seu Ide e clica em package.json -  deverá pedir para instalar o npm

Instale o npm pelo comando npm install


Testes

Para executar os testes, execute o comando abaixo na raiz do projeto:

Pegue o arquivo .env.example copie pra mesma pasta com o nome .env e faca as seguintes alterações:

DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=nome do seu banco de dados

DB_USERNAME=seu usuário. Por padrão root

DB_PASSWORD=sua senha

Rode o comando - php artisan key:generate

No projeto. env vai gerar u chave para o cmapo APP_KEY=

De o comando php artisan migrate para criar aa tabela que será usado no projeto. 

A variável do projeto. evn tem um campo chamado APP_NAME=, de o nom de Contatos. exmeplo: APP_NAME=Contatos

Rode o comando, php artisan serve para dar início a execução do projeto no navegador 

Acesse http://localhost:8000/

Uma vez acessando o localhost verá que a página inicial será uma página onde será listado os contatos. Ao clicar em nova mensagem você será levado para uma tela onde você ira informar os dados pessoais, anexar um arquivo de até 500kb, clica em adicionar. Os seus dados serão gravados no banco e o navegador voltara tela inicial com a listagem do que você acabou de adicionar.


Considerações

Como havia dito antes, desenvolvo PHP a alguns anos, porém não utilizamos o laravel e Vue. 
Venho me dedicando nos últimos meses a aprender e buscando oportunidades de pôr em prática meus conhecimentos, mas ainda tenho muitas dúvidas.
Com a ajuda de tutoriais na internet consegui aprender e concluir quase todos os requisitos do desafio e espero que esteja adequado.

Dificuldades

Por não ter domínio da ferramenta laravel e outros frameworks acabei encontrando algumas dificuldades em desenvolver o projeto. Por exemplo não conseguir desenvolver a parte que envia o e-mail dos dados cadastrados. 
Precisei seguir alguns tutoriais e tirar dúvidas com alguns colegas que já trabalham com a ferramenta. 
Por trabalhar com php puro percebi que algumas funções são bens mais simples de se resolver no Laravel porem me esbarrei na dificuldade da usabilidade da ferramenta já que a uso em momentos de estudo e não aplico no meu local de trabalho. 
Gostei muito do desafio e me empolguei fazendo, conheci alguns novos recursos que o Laravel e o vue me entrega. Fiquei realmente empolgado com a possibilidade e trabalhar no dia a dia usando a ferramenta. 
Mesmo que essa vaga não seja preenchida por mim gostaria de uma oportunidade em uma vaga menor talvez mais focado no aprendizado e claro com objetivo se tornar mais um membro da empresa focado e dedicado ao trabalho. 

Atualmente estou há quase 8 anos na mesma empresa que em empregou como estagiário. Sou esforçado e dedicado em aprender e a vestir a camisa da empresa.
Desse já agradeço a oportunidade e espero boas notícias em um futuro próximo. 

Obrigado!!!
