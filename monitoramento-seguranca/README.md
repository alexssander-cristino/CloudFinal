# Trabalho Final - Cloud Computing

Projeto desenvolvido como trabalho final da disciplina de **Cloud Computing**, utilizando o framework **Laravel (PHP)**.

O sistema simula uma plataforma de **monitoramento de segurança**, permitindo o gerenciamento de câmeras, sensores, fabricantes e locais, aplicando conceitos de arquitetura web, APIs REST, organização em camadas e testes automatizados.

---

# Objetivo

Demonstrar a aplicação prática dos conceitos de Cloud Computing através do desenvolvimento de uma aplicação web estruturada, utilizando:

* Arquitetura MVC do Laravel
* Comunicação através de rotas HTTP e API REST
* Organização em camadas (Controller, Service e Repository)
* Persistência e manipulação de dados
* Dashboard de monitoramento
* Testes automatizados com PHPUnit

---

# Funcionalidades

## Monitoramento de Câmeras

* Listagem de câmeras cadastradas
* Consulta individual de câmeras
* Cadastro de novos dispositivos
* Atualização de informações
* Remoção de câmeras
* Controle de status:

  * Online
  * Offline
  * Manutenção

## Dashboard

O sistema possui uma interface de acompanhamento contendo:

* Quantidade de câmeras cadastradas
* Quantidade de sensores
* Fabricantes registrados
* Locais cadastrados

## API REST

Endpoints disponíveis:

```text
GET     /api/cameras
POST    /api/cameras
GET     /api/cameras/{id}
PUT     /api/cameras/{id}
DELETE  /api/cameras/{id}

GET     /api/status
```

---

# Arquitetura

O projeto utiliza a arquitetura MVC do Laravel juntamente com uma separação de responsabilidades através das camadas de serviço e repositório.

Fluxo da aplicação:

```text
Request
   |
   v
Route
   |
   v
Controller
   |
   v
Service
   |
   v
Repository
   |
   v
Dados
```

Estrutura do projeto:

```text
app/
├── Http/
│   ├── Controllers/
│   ├── Requests/
│   └── Resources/
│
├── Services/
│
├── Repositories/
│
├── Models/

routes/
├── web.php
├── api.php

resources/
├── views/

storage/
└── app/
    └── data/
        ├── cameras.json
        ├── sensores.json
        ├── fabricantes.json
        └── locais.json

tests/
├── Feature/
└── Unit/
```

---

# Tecnologias Utilizadas

* PHP 8+
* Laravel Framework
* Composer
* PHPUnit
* Artisan CLI
* JSON Storage
* Blade Templates
* HTML, CSS e JavaScript

---

# Instalação

## 1. Clonar o repositório

```bash
git clone https://github.com/alexssander-cristino/CloudFinal.git

cd monitoramento-seguranca
```

---

## 2. Instalar dependências

```bash
composer install
```

---

## 3. Configurar ambiente

Copie o arquivo de configuração:

```bash
cp .env.example .env
```

Gere a chave da aplicação:

```bash
php artisan key:generate
```

---

## 4. Executar a aplicação

Inicie o servidor Laravel:

```bash
php artisan serve
```

A aplicação estará disponível em:

```text
http://127.0.0.1:8000
```

---

# Testes Automatizados

Executar todos os testes:

```bash
php artisan test
```

Os testes validam:

* Funcionamento das rotas
* Retorno correto da API
* Estrutura dos dados
* Tratamento de registros inexistentes
* Status da aplicação

---

# Comandos Úteis

Listar rotas disponíveis:

```bash
php artisan route:list
```

Limpar cache da aplicação:

```bash
php artisan optimize:clear
```

Executar servidor local:

```bash
php artisan serve
```

---

# Conceitos de Cloud Computing Aplicados

O projeto demonstra conceitos utilizados em aplicações hospedadas em ambientes cloud:

* Estrutura organizada e escalável
* Separação de responsabilidades
* Comunicação através de APIs REST
* Arquitetura preparada para implantação em nuvem
* Testes automatizados para garantir confiabilidade
* Organização seguindo padrões utilizados no desenvolvimento profissional

---

# Autor

Alexssander Cristino
