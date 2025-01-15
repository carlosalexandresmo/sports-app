# 🚀 Sports App

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as **Mockito** e **bloc_test**

## 🗂️ Estrutura do Projeto

```
lib/
├── config/            # Configurações referente ao projeto
├── controller/        # Controller principal
├── dto/               # Classe para Objeto de Transporte de Dados.
├── entities/          # Entidades
├── repositories/      # Repositório
└── services/          # Serviços
```

## Tecnologias Utilizadas
- **Laravel 8**: Framework PHP para desenvolvimento da API.
- **Sanctum**: Para autenticação de tokens.
- **MySQL**: Banco de dados utilizado para armazenar os dados dos usuários e comentários.
- **PHPUnit**: Framework para testes automatizados.

## Como Rodar o Projeto


### Pré-requisitos
- PHP 8.0
- Composer
- MySQL ou outro banco de dados configurado


## Passos para Execução

1. Clone o repositório:
```sh
git clone https://github.com/iFHA/Selecao-Back-End.git
```
2. Instale as dependências do projeto:
```sh
composer install
```
3. Renomeie o arquivo .env.example para .env e configure-o com suas credenciais do banco de dados:
```dosini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=usuario
DB_PASSWORD=senha
```
4. Gere a chave do projeto
```sh
php artisan key:generate
```
5. Execute as migrações para criar as tabelas necessárias:
```sh
php artisan migrate
```
6. Também pode ser feito um seed após executar as migrations, que irá gerar um usuário admin(email "admin@gmail.com" e senha "password") e alguns comentários gerados pela biblioteca faker
```sh
php artisan db:seed
```
7. Para rodar os testes automatizados com PHPUnit:
```sh
php artisan test
```
8. Inicie o servidor de desenvolvimento:
```sh
php artisan serve
```
Agora, basta acessar alguma das rotas listadas anteriormente, através do endereço informado pela saída do comando acima, como por exemplo: verbo HTTP GET, header "Accept: application/json" e endereço: http://127.0.0.1:8000/api/comments.

Foram disponibilidados na raiz desse projeto arquivos de "collection" e "environment" do postman, contendo informações mais detalhadas sobre as rotas, e que podem ser importados no postman para mais facilidade no momento de fazer as requisições.

## Considerações Finais
Este sistema foi desenvolvido com foco em segurança e desempenho, utilizando boas práticas como a criptografia de senhas e a autenticação via token. A implementação de testes automatizados garante que as funcionalidades sejam validadas de forma contínua. A estrutura modular do código facilita a manutenção e a expansão do sistema.