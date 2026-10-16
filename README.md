# Calculadora de Taxas DSCIP / DSCIP Fee Calculator

[![PHP Version](https://img.shields.io/badge/PHP-8.x-777BB4?logo=php&logoColor=white)](https://www.php.net/)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5.x-7952B3?logo=bootstrap&logoColor=white)](https://getbootstrap.com/)
[![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?logo=mysql&logoColor=white)](https://www.mysql.com/)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

---

## 🇺🇸 English

### Overview
The **DSCIP Fee Calculator** is a web-based system developed for the Fire Department of the State of Mato Grosso (CBMMT) under the supervision of the Directorate of Fire and Panic Safety (DSCIP). It automates and standardizes the calculation of administrative and inspection fees according to state fire safety regulations, based on built area, building occupancy/risk classification, and current UPF (Standard Fiscal Unit) values.

### Key Features
- **Dynamic Fee Calculation:** Computes rates for Technical Inspections (Vistorias), Fire and Panic Safety Plans (PSCIP Analysis), certifications, and educational accreditations.
- **Unit Reference Updates (UPF):** Administration module allowing authorized users to update the UPF fiscal reference value in real-time.
- **REST-like Endpoints:** Dedicated PHP API endpoints (`/api/calcular.php`, `/api/calcular_brigada.php`, `/api/get_upf.php`) communicating via JSON.
- **Authentication & Role-Based Access:** Session-based authentication with bcrypt password hashing (`password_hash` / `password_verify`).
- **Security-First Architecture:** Environment-driven configuration (`.env`), SQL injection protection using PDO prepared statements, and isolation of credentials.

### Tech Stack
- **Backend:** PHP 8.x with PDO MySQL.
- **Frontend:** Bootstrap 5, Modern Vanilla JavaScript (Fetch API, DOM manipulation).
- **Data Persistence:** MySQL (Database) & JSON caches for fast fiscal rate retrieval.
- **Architecture:** Separation of concerns (API Controllers, Data Access Layer, Responsive Views).

### Getting Started

#### Prerequisites
- PHP 8.0 or higher
- MySQL / MariaDB Server
- Web server (Apache, Nginx, or PHP Built-in Server)

#### Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/calculadora-dscip.git
   cd calculadora-dscip
   ```

2. Configure environment variables:
   Copy `.env.example` to `.env` and fill in your database credentials:
   ```bash
   cp .env.example .env
   ```
   Edit `.env`:
   ```env
   DB_HOST=localhost
   DB_NAME=calculadora
   DB_USER=seu_usuario
   DB_PASS=sua_senha
   ```

3. Import the database schema into MySQL:
   ```sql
   CREATE DATABASE calculadora CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
   -- Import database tables/initial data if available
   ```

4. Run locally with PHP built-in server:
   ```bash
   php -S localhost:8000
   ```
   Access in your browser: `http://localhost:8000`

---

## 🇧🇷 Português (Brasil)

### Visão Geral
A **Calculadora de Taxas DSCIP** é uma aplicação web desenvolvida para o Corpo de Bombeiros Militar do Estado de Mato Grosso (CBMMT), sob supervisão da Diretoria de Segurança Contra Incêndio e Pânico (DSCIP). O sistema padroniza e automatiza o cálculo de taxas de vistorias técnicas, análises de projetos de segurança contra incêndio e pânico (PSCIP), credenciamentos e emissão de certificados, utilizando como indexador a Unidade Padrão Fiscal (UPF/MT).

### Principais Funcionalidades
- **Cálculo Automatizado de Serviços Técnicos:** Cálculo ágil e preciso de taxas baseado em metragem quadrada (área construída), tipo de ocupação, grau de risco e regulamentações vigentes.
- **Gestão da UPF:** Painel administrativo restrito que permite atualizar o valor da Unidade Padrão Fiscal (UPF) sem necessidade de alterar o código-fonte.
- **Comunicação Assíncrona via API:** Endpoints dedicados (`/api/calcular.php`, `/api/calcular_brigada.php`, `/api/get_upf.php`) retornando dados estruturados em JSON consumidos via Fetch API.
- **Autenticação e Controle de Sessão:** Acesso administrativo seguro com senhas criptografadas via algoritmo nativo seguro (`password_hash` / `password_verify`).
- **Segurança da Informação:** Configurações externalizadas via variáveis de ambiente (`.env`), prevenção contra SQL Injection com PDO Prepared Statements e sanitização de dados.

### Tecnologias Utilizadas
- **Backend:** PHP 8.x estruturado com PDO para conexão segura ao MySQL.
- **Frontend:** Bootstrap 5, JavaScript Vanilla (Fetch API e manipulação dinâmica de DOM).
- **Armazenamento:** MySQL para usuários e sessões; arquivos JSON para cache e parametrização fiscal rápida.
- **Arquitetura:** Padrão modular dividindo controladores de API, persistência e interfaces desacopladas.

### Como Executar o Projeto

#### Pré-requisitos
- PHP 8.0 ou superior
- Servidor MySQL ou MariaDB
- Servidor Web (Apache, Nginx ou servidor embutido do PHP)

#### Instalação
1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/calculadora-dscip.git
   cd calculadora-dscip
   ```

2. Configure as variáveis de ambiente:
   Copie o arquivo `.env.example` para `.env` e configure suas credenciais locais:
   ```bash
   cp .env.example .env
   ```
   Edite o `.env`:
   ```env
   DB_HOST=localhost
   DB_NAME=calculadora
   DB_USER=root
   DB_PASS=sua_senha_aqui
   ```

3. Configure a base de dados:
   Crie o banco de dados no seu MySQL:
   ```sql
   CREATE DATABASE calculadora CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
   ```

4. Inicie o servidor embutido do PHP:
   ```bash
   php -S localhost:8000
   ```
   Acesse a aplicação no navegador em: `http://localhost:8000`

---

## 🔒 Segurança e Boas Práticas
- Nenhuma credencial de banco de dados ou chave secreta é versionada no repositório.
- O arquivo `.env` é explicitamente ignorado pelo `.gitignore`.
- Comunicação com banco restrita a PDO com prepared statements.

## 📄 Licença
Distribuído sob a licença MIT. Consulte `LICENSE` para mais informações.
