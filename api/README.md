
<p align="center" style="background-color: white"><a href="https://www.exata.it" target="_blank"><img src="https://www.exata.it/wp-content/uploads/2023/07/logo-exata-data-intelligence.png" width="300" alt="Exata it"></a></p>

# Avaliação Técnica - Exata it

Esse é um teste técnico para a vaga de **Desenvolvedor Laravel Jr** para a empresa **Exata it**.

## Requisitos

**Projeto**: Sistema de Gerenciamento de Tarefas

### Descrição: Criar um sistema simples de gerenciamento de tarefas com as seguintes funcionalidades:

1. Cadastro de Usuário: Permitir que novos usuários se cadastrem no sistema e façam login.
2. CRUD de Tarefas:
   - Usuários autenticados podem criar, editar, visualizar e excluir tarefas.
   - Cada tarefa deve ter um título, descrição e status (ex: "pendente", "em andamento", "concluída").
3. Filtros e Ordenação: Permitir que as tarefas sejam filtradas por status e ordenadas por data de criação ou atualização.
4. Validações: Implementar validações básicas para garantir que os campos obrigatórios sejam preenchidos e que os dados estejam no formato adequado.
5. Perfil de Usuário:
   - Adicionar uma distinção entre usuários comuns e um perfil "admin".
   - Usuários comuns devem visualizar apenas as tarefas que eles mesmos criaram.
   - O usuário com perfil "admin" deve ter acesso a todas as tarefas criadas no sistema.

### Requisitos

- [x] Cadastro de Usuário: Permitir que novos usuários se cadastrem no sistema e façam login.
- [ ] Usuários autenticados podem criar, editar, visualizar e excluir tarefas.
- [x] Cada tarefa deve ter um título, descrição e status (ex: "pendente", "em andamento", "concluída").
- [ ] Filtros e Ordenação: Permitir que as tarefas sejam filtradas por status e ordenadas por data de criação ou atualização.
- [ ] Validações: Implementar validações básicas para garantir que os campos obrigatórios sejam preenchidos e que os dados estejam no formato adequado.
- [ ] Adicionar uma distinção entre usuários comuns e um perfil "admin".
- [ ] Usuários comuns devem visualizar apenas as tarefas que eles mesmos criaram.
- [ ] O usuário com perfil "admin" deve ter acesso a todas as tarefas criadas no sistema.

### Requisitos Técnicos:

- Usar o framework [Laravel](https://laravel.com/) (preferencialmente versão 11).
- Implementar o front-end preferencialmente com o framework [Vue.js](https://vuejs.org/), integrando-o ao Laravel.
- Utilizar migrações para criação de tabelas no banco de dados.
- Utilizar Seeders para popular o banco com dados de teste.
- Organizar o código em controllers, models e views conforme a estrutura do Laravel.
- Adicionar testes unitários básicos (opcional, mas será um diferencial).

## Instalação

A partir de um ambiente de desenvolvimento composto pelo PHP na versão 8.2 ou superior e com o Composer instalado execute o comando dentro da pasta do projeto.

Este projeto utiliza o [Docker](https://www.docker.com/) e o [Docker Compose](https://docs.docker.com/compose/) para o desenvolvimento e deploy local.

```bash
  docker-compose up -d --build --no-cache
```

Após isso execute o comando abaixo para instalar as dependências do projeto:

```bash
  docker-compose exec app composer install
```

Para compilar os arquivos do Vue para o Frontend, execute o comando:

```bash
  docker-compose exec app npm run build
```

## Documentação da API - Backend

A documentação da API é gerada através do [Swagger](https://swagger.io/) pela biblioteca `darkaonline/l5-swagger`. 

É possível utilizar e testar as API's a partir do link [/api/documentation](http://localhost:8082/api/documentation).

Para **mais informações** acesse a pasta **[api](./api/README.md)** e veja a documentação.

## Stack utilizada

- **Back-end:** Laravel, PHP
- **Front-end:** Vuejs

## Autores

- [Github - @danilo-righetto](https://github.com/danilo-righetto)
- [Linkedin - @danilo-righetto](https://www.linkedin.com/in/danilo-righetto/)

## Licença

Esta aplicação é um software de código aberto licenciado pelo [MIT license](https://opensource.org/licenses/MIT).

