# 📋 Sistema de Gerenciamento de Clientes

Um sistema web completo para cadastro, listagem e exclusão de clientes, desenvolvido com PHP, MySQL e interface responsiva.

## 🎯 Sobre o Projeto

Este sistema permite o gerenciamento completo de uma base de clientes através de uma interface web intuitiva. Implementa as operações CRUD básicas (Create, Read, Delete) com validações de dados e tratamento de erros robusto.

## 🚀 Funcionalidades

### 👥 Gerenciamento de Clientes
- **Cadastro de novos clientes** com validação de dados
- **Listagem completa** de todos os clientes cadastrados
- **Exclusão segura** de registros com confirmação
- **Navegação intuitiva** entre as seções do sistema

### 📝 Campos do Cliente
- **Nome completo**
- **Email** (com validação de formato)
- **Telefone** 
- **CPF** (apenas números, 11 dígitos)
- **Data de nascimento**
- **CEP** (apenas números, 8 dígitos)

### 🛡️ Recursos de Segurança
- **Prepared Statements** para prevenir SQL Injection
- **Validação de dados** no frontend e backend
- **Tratamento de exceções** com mensagens informativas
- **Sanitização de inputs** do usuário

## 🛠️ Tecnologias Utilizadas

- **PHP 8.1+**: Lógica do servidor e manipulação de dados
- **MySQL 5.7+**: Banco de dados relacional
- **HTML5**: Estrutura das páginas
- **CSS3**: Estilização responsiva e moderna
- **JavaScript**: Alertas e interações do usuário

## 📁 Estrutura do Projeto

```
client-management-system/
├── index.html              # Página inicial com menu
├── src/
│   ├── css/
│   │   └── style.css       # Estilos da aplicação
│   ├── php/
│   │   ├── cadastro.php    # Formulário de cadastro
│   │   ├── inserir.php     # Processamento do cadastro
│   │   ├── lista.php       # Listagem de clientes
│   │   ├── excluir_cliente.php # Exclusão de registros
│   │   └── conexao.php     # Configuração do banco
│   └── sql/
│       └── clientes.sql    # Script de criação da tabela
└── README.md
```

##
