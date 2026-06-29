# ☁️ Trabalho Final - Cloud Computing

Projeto desenvolvido como trabalho final da disciplina de **Cloud Computing**, utilizando o framework **Laravel (PHP)**.  
O sistema simula um ambiente de monitoramento e gerenciamento de dados em nuvem, com foco em arquitetura MVC, persistência de dados e testes automatizados.

---

## 🎯 Objetivo

Demonstrar a aplicação prática de conceitos de Cloud Computing em uma aplicação web, incluindo:

- Arquitetura MVC (Model-View-Controller)
- Persistência de dados em banco relacional
- Comunicação via rotas HTTP (web e API)
- Execução local simulando ambiente cloud
- Testes automatizados para validação do sistema

---

## 🧠 Funcionalidades

- Cadastro e gerenciamento de dados
- Monitoramento de entidades do sistema (ex: dispositivos/sensores)
- Consulta e listagem de informações do banco
- Estrutura preparada para API REST
- Execução de comandos via Artisan
- Testes automatizados com PHPUnit

---

## 🏗️ Arquitetura

O projeto segue o padrão MVC do Laravel:

- **Models** → regras de negócio e banco de dados  
- **Controllers** → lógica da aplicação  
- **Views** → interface do usuário  
- **Routes** → definição de endpoints  

Estrutura básica:

app/
├── Http/
│ ├── Controllers/
│ └── Middleware/
├── Models/
├── Tests/
database/
├── migrations/
├── seeders/
routes/
├── web.php
├── api.php
resources/
├── views/
public/


---

## 🛠️ Tecnologias Utilizadas

- PHP 8+
- Laravel Framework
- Composer
- PostgreSQL / MySQL
- PHPUnit
- Artisan CLI

---

## ⚙️ Instalação

### 1. Clonar o repositório
```bash
git clone https://github.com/alexssander-cristino/CloudFinal.git
cd monitoramento-seguranca