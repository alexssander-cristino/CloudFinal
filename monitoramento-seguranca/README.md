# Trabalho Final - Cloud Computing

Projeto desenvolvido como trabalho final da disciplina de **Cloud Computing**, utilizando o framework **Laravel (PHP)**.

O sistema consiste em uma plataforma de **Monitoramento de Segurança**, permitindo o gerenciamento de câmeras, sensores, fabricantes e locais monitorados através de uma API REST e de um dashboard web.

O projeto foi desenvolvido aplicando conceitos de arquitetura MVC, organização em camadas, APIs REST, testes automatizados e integração contínua.

---

# Objetivo

Desenvolver uma aplicação web utilizando Laravel para demonstrar a aplicação prática dos conceitos estudados na disciplina de Cloud Computing.

Entre os principais conceitos aplicados estão:

- Arquitetura MVC
- Organização em camadas (Controller, Service e Repository)
- API REST
- Dashboard Web
- Persistência de dados utilizando arquivos JSON
- Testes automatizados com PHPUnit
- Integração Contínua utilizando GitHub Actions

---

# Funcionalidades

## Dashboard

O sistema possui um dashboard inicial contendo informações gerais do ambiente monitorado.

São exibidos:

- Quantidade de câmeras cadastradas
- Quantidade de sensores
- Quantidade de fabricantes
- Quantidade de locais monitorados

---

## Gerenciamento de Câmeras

A API permite:

- Listar todas as câmeras
- Consultar uma câmera específica
- Cadastrar novas câmeras
- Atualizar informações
- Remover câmeras

Cada câmera possui:

- ID
- Nome
- Local
- Status
- Situação da gravação
- Última verificação

Status disponíveis:

- Online
- Offline
- Manutenção

---

## API REST

A aplicação disponibiliza os seguintes endpoints:

| Método | Endpoint |
|---------|----------|
| GET | /api/status |
| GET | /api/cameras |
| GET | /api/cameras/{id} |
| POST | /api/cameras |
| PUT | /api/cameras/{id} |
| DELETE | /api/cameras/{id} |

Todos os dados são retornados no formato JSON.

---

# Estrutura do Projeto

```
app/
├── Http/
│   ├── Controllers/
│   ├── Requests/
│   └── Resources/
│
├── Repositories/
│
├── Services/
│
├── Models/
│
routes/
├── api.php
├── web.php
│
resources/
└── views/
│
storage/
└── app/
    └── data/
        ├── cameras.json
        ├── sensores.json
        ├── fabricantes.json
        └── locais.json
│
tests/
├── Feature/
└── Unit/
```

---

# Arquitetura

O projeto foi desenvolvido utilizando a arquitetura MVC juntamente com uma separação em camadas para facilitar manutenção e evolução.

Fluxo da aplicação:

```
Requisição HTTP
      │
      ▼
    Route
      │
      ▼
 Controller
      │
      ▼
   Service
      │
      ▼
 Repository
      │
      ▼
 Arquivos JSON
```

Cada camada possui uma responsabilidade específica:

- Routes: definição das rotas da aplicação
- Controllers: recebem as requisições HTTP
- Services: concentram as regras de negócio
- Repositories: acesso aos dados
- Resources: padronização das respostas JSON
- Requests: validação dos dados enviados pelo cliente

---

# Armazenamento dos Dados

Os dados utilizados pelo sistema são armazenados em arquivos JSON localizados em:

```
storage/app/data/
```

Arquivos utilizados:

- cameras.json
- sensores.json
- fabricantes.json
- locais.json

Esses arquivos simulam uma base de dados contendo registros utilizados pela API e pelo dashboard.

---

# Tecnologias Utilizadas

- PHP 8+
- Laravel 12
- Composer
- PHPUnit
- Blade
- JSON
- HTML
- CSS
- JavaScript
- Git
- GitHub Actions

---

# Requisitos

Para executar o projeto é necessário possuir instalado:

- PHP 8.2 ou superior
- Composer
- Git

---

# Instalação

## 1. Clonar o repositório

```bash
git clone https://github.com/alexssander-cristino/CloudFinal.git

cd monitoramento-seguranca
```

---

## 2. Instalar as dependências

```bash
composer install
```

---

## 3. Configurar o ambiente

Copiar o arquivo de configuração:

```bash
cp .env.example .env
```

Gerar a chave da aplicação:

```bash
php artisan key:generate
```

---

## 4. Executar a aplicação

```bash
php artisan serve
```

A aplicação ficará disponível em:

```
http://127.0.0.1:8000
```

Dashboard:

```
http://127.0.0.1:8000/
```

API:

```
http://127.0.0.1:8000/api/status

http://127.0.0.1:8000/api/cameras
```

---

# Exemplo de Cadastro

Cadastrar uma nova câmera:

```
POST /api/cameras
```

Exemplo de JSON:

```json
{
    "nome": "Entrada Principal",
    "local": "Portaria",
    "status": "online",
    "gravacao": true,
    "ultimaVerificacao": "2026-07-07 09:00:00"
}
```

---

# Testes Automatizados

Executar todos os testes:

```bash
php artisan test
```

Os testes verificam:

- Funcionamento das rotas
- Estrutura das respostas JSON
- Código HTTP das respostas
- Tratamento de erros
- Disponibilidade da API

---

# Integração Contínua

O projeto utiliza **GitHub Actions** para automatizar a execução dos testes.

O pipeline realiza automaticamente:

1. Checkout do código
2. Configuração do ambiente PHP
3. Instalação das dependências
4. Preparação do ambiente Laravel
5. Geração da chave da aplicação
6. Execução dos testes automatizados
7. Validação do arquivo composer.json

Essa automação permite identificar problemas rapidamente após alterações no código.

---

# Comandos Úteis

Listar todas as rotas:

```bash
php artisan route:list
```

Executar o servidor:

```bash
php artisan serve
```

Executar os testes:

```bash
php artisan test
```

Limpar cache:

```bash
php artisan optimize:clear
```

Gerar chave da aplicação:

```bash
php artisan key:generate
```

---

# Conceitos de Cloud Computing Aplicados

Durante o desenvolvimento foram utilizados conceitos relacionados à Computação em Nuvem, tais como:

- Arquitetura em camadas
- APIs REST
- Organização modular
- Integração Contínua (CI)
- Controle de versão utilizando Git
- Automação de testes
- Estrutura preparada para implantação em ambiente cloud

---

# Melhorias Futuras

Como evolução do projeto poderão ser implementadas:

- Autenticação utilizando Laravel Sanctum
- Dashboard em tempo real
- WebSockets
- Integração com câmeras IP
- Controle de usuários
- Upload de imagens
- Geração de relatórios
- Notificações em tempo real
- Documentação utilizando Swagger

---

# Autor

Alexssander Cassio Comper Cristino

Curso de Sistemas de Informação

Trabalho Final da disciplina de Cloud Computing.

---

# Licença

Projeto desenvolvido exclusivamente para fins acadêmicos.