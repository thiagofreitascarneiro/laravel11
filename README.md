# Task Manager Project
Este projeto de criador de tarefas é uma aplicação web moderna desenvolvida utilizando um conjunto de tecnologias de ponta no desenvolvimento web e backend. O sistema permite aos usuários criar, listar, atualizar e deletar tarefas, com autenticação de usuários e gestão segura de sessões.

## Tecnologias Utilizadas
Abaixo, detalhamos as principais tecnologias e ferramentas utilizadas neste projeto:

## Docker
Utilizamos Docker para criar, gerenciar e isolar os ambientes de desenvolvimento e produção do nosso aplicativo. Isso garante que o aplicativo execute de forma consistente em diferentes ambientes, facilitando tanto o desenvolvimento quanto o deploy.

Laravel Sail: Uma interface de linha de comando leve para interação com o Docker, facilitando o gerenciamento de serviços Docker e simplificando operações comuns de desenvolvimento e testes.

## Banco de Dados MySQL
O MySQL é utilizado como sistema de banco de dados relacional. Ele armazena e gerencia os dados das tarefas dos usuários e informações de autenticação de forma eficiente e segura.

## Redis
Empregamos o Redis como um armazenador de estrutura de dados em memória, usado principalmente como cache de dados e broker de mensagens. No contexto deste projeto, o Redis é utilizado para melhorar a performance do aplicativo e gerenciar sessões de usuários de forma rápida e eficaz.

## PHP 8
A aplicação é escrita em PHP 8, que traz melhorias significativas de performance e novas funcionalidades que aumentam a qualidade do código e a velocidade de desenvolvimento.

## Laravel 11
O framework Laravel 11 é a espinha dorsal do nosso projeto. Ele fornece uma estrutura robusta para o desenvolvimento da aplicação, com uma vasta gama de funcionalidades que simplificam tarefas comuns de desenvolvimento web, como roteamento, abstração de banco de dados, autenticação, e muito mais.

### Sanctum: 
Para a autenticação dos usuários, utilizamos o Laravel Sanctum, que oferece um sistema de autenticação leve e simples para SPAs (single page applications), aplicações móveis e serviços simples de token.
Estrutura do Projeto
O projeto está estruturado de maneira a aproveitar ao máximo as capacidades do framework Laravel, com controllers bem definidos para a gestão de tarefas e a autenticação de usuários. A lógica de negócio é isolada em serviços para manter o código limpo e manutenível.

## Começando
Para iniciar o projeto, clone o repositório e siga as instruções no arquivo docker-compose.yml para configurar e executar os contêineres Docker necessários, incluindo MySQL, Redis e PHP. Use o Laravel Sail para comandos de gestão.

### Contribuições
Contribuições são bem-vindas! Para contribuir, por favor, abra um pull request com uma descrição detalhada das mudanças propostas.

Esse README fornece uma visão geral abrangente das tecnologias envolvidas no projeto, enquanto também oferece informações básicas sobre a estrutura e utilização do sistema. Isso é essencial para que novos desenvolvedores possam entender rapidamente as tecnologias e ferramentas em uso.