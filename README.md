# Products API — Back-end Laravel

API RESTful desenvolvida em Laravel para gerenciamento de produtos, com operações completas de CRUD.

---

## 🛠️ Tecnologias

- PHP 8.3+
- Laravel 13
- MySQL 8+
- Composer

---

## ✅ Pré-requisitos

Antes de começar, certifique-se de ter instalado:

- [PHP 8.3+](https://www.php.net/downloads)
- [Composer](https://getcomposer.org/download/)
- [MySQL 8+](https://dev.mysql.com/downloads/)

---

## 🚀 Como rodar o projeto

### 1. Clone o repositório

```bash
git clone https://github.com/IgorGameiro/products-api.git
cd products-api
```

### 2. Instale as dependências

```bash
composer install
```

### 3. Configure o arquivo de ambiente

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Configure o banco de dados

Edite o arquivo `.env` com as credenciais do seu MySQL:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=products_api
DB_USERNAME=root
DB_PASSWORD=sua_senha
```

Crie o banco de dados no MySQL:

```sql
CREATE DATABASE products_api;
```

### 5. Execute as migrations

```bash
php artisan migrate
```

### 6. Inicie o servidor

```bash
php artisan serve
```

A API estará disponível em: **http://localhost:8000**

---

## 📡 Endpoints da API

| Método | Endpoint | Descrição |
|--------|----------|-----------|
| `GET` | `/api/products` | Lista todos os produtos |
| `POST` | `/api/products` | Cria um novo produto |
| `GET` | `/api/products/{id}` | Busca produto por ID |
| `PUT` | `/api/products/{id}` | Atualiza um produto |
| `DELETE` | `/api/products/{id}` | Remove um produto |

---

## 📦 Estrutura do produto

```json
{
  "name": "Cimento CP5",
  "description": "Saco 50kg",
  "brand": "Votorantim",
  "price": 39.90,
  "stock": 100
}
```

| Campo | Tipo | Obrigatório | Descrição |
|-------|------|-------------|-----------|
| `name` | string | ✅ | Nome do produto |
| `description` | string | ❌ | Descrição do produto |
| `brand` | string | ✅ | Marca do produto |
| `price` | decimal | ✅ | Preço (ex: 39.90) |
| `stock` | integer | ✅ | Quantidade em estoque |

---

## 🧪 Exemplos de uso

### Listar produtos
```bash
curl http://localhost:8000/api/products
```

### Criar produto
```bash
curl -X POST http://localhost:8000/api/products \
  -H "Content-Type: application/json" \
  -d '{"name":"Cimento CP5","description":"Saco 50kg","brand":"Votorantim","price":39.90,"stock":100}'
```

### Editar produto
```bash
curl -X PUT http://localhost:8000/api/products/1 \
  -H "Content-Type: application/json" \
  -d '{"price":42.50,"stock":80}'
```

### Deletar produto
```bash
curl -X DELETE http://localhost:8000/api/products/1
```

---

## 🧬 Rodar os testes

```bash
php artisan test
```

---

## 📁 Estrutura do projeto

```
app/
├── Http/Controllers/
│   └── ProductController.php   # CRUD de produtos
├── Models/
│   └── Product.php             # Model do produto
database/
└── migrations/
    └── ..._create_products_table.php
routes/
└── api.php                     # Rotas da API
```
