<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


<p align="center">
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/240px-Laravel.svg.png" width="140" alt="Laravel Logo">
</p>

<p align="center">
  <strong>API YouTube Data – Projeto Educacional (SENAI)</strong><br>
  API RESTful desenvolvida em Laravel para consultar e exibir métricas públicas de canais do YouTube.
</p>

<p align="center">
  <a href="#"><img src="https://img.shields.io/badge/Laravel-10.x-red?style=for-the-badge&logo=laravel"></a>
  <a href="#"><img src="https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge&logo=php"></a>
  <a href="#"><img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql"></a>
  <a href="#"><img src="https://img.shields.io/badge/Postman-Tests-orange?style=for-the-badge&logo=postman"></a>
  <a href="#"><img src="https://img.shields.io/badge/Status-Concluído-brightgreen?style=for-the-badge"></a>
</p>

---

# 📡 Sobre o Projeto

Esta API foi desenvolvida como parte das atividades práticas do **Curso Técnico em Desenvolvimento de Sistemas – SENAI**.  
O objetivo é consumir dados públicos da **YouTube Data API** e disponibilizar informações estruturadas em **JSON** para uso em aplicações front-end.

O projeto foi desenvolvido em dupla, com ambos integrantes atuando em **Back-End, Front-End e Documentação**.

---

# 🎯 Funcionalidades Principais
- 🔍 Consulta de canais do YouTube  
- 📊 Retorno estruturado em JSON  
- ↕️ Filtros (inscritos, views, vídeos)  
- 🔄 Ordenação dinâmica  
- ⚙️ Endpoints RESTful  
- 🧪 Testes e documentação via Postman  
- 🧰 Estrutura organizada com Controllers, Routes e Services  

---

# 🛠 Tecnologias Utilizadas

| Camada | Tecnologias |
|-------|-------------|
| **Back-End** | Laravel, PHP 8+, Composer |
| **Banco de Dados** | MySQL (via XAMPP) |
| **Testes** | Postman |
| **API Externa** | YouTube Data API v3 |
| **Retorno** | JSON |

---

# ⚠️ Importante Sobre Ambiente e Segurança

### 🔐 Uso de `.env` e GitIgnore
Em projetos reais, arquivos como `.env` **NUNCA** devem ser enviados ao repositório por conter informações sensíveis (senhas, tokens, etc.).  

👉 **Como este é um projeto educacional, os dados são fictícios e não representam risco.**  
Mesmo assim, o ideal seria configurar corretamente o `.gitignore` em ambientes profissionais.

---

# 🗄 Configuração do Banco de Dados (XAMPP)

Este projeto utiliza:
- **XAMPP**
- **MySQL**
- **phpMyAdmin**

Crie um banco de dados antes de iniciar:

```
Nome do banco: youtube_api
```

> O usuário deve alterar o nome do banco, usuário e senha no arquivo `.env` conforme seu ambiente.

Exemplo de configuração:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=youtube_api
DB_USERNAME=root
DB_PASSWORD=
```

---

# 🚀 Como Executar o Projeto

### 1️⃣ Clonar o repositório
```bash
git clone https://github.com/seuusuario/seu-repositorio-api.git
```

### 2️⃣ Instalar dependências
```bash
composer install
```

### 3️⃣ Criar o arquivo de ambiente
```bash
cp .env.example .env
```

### 4️⃣ Inserir sua API KEY do YouTube
No arquivo `.env`:

```
YOUTUBE_API_KEY=SUA_CHAVE_AQUI
```

### 5️⃣ Gerar a chave da aplicação
```bash
php artisan key:generate
```

### 6️⃣ Iniciar o servidor
```bash
php artisan serve
```

Servidor rodando em:
```
http://localhost:8000
```

---

# 📚 Endpoints Principais

| Método | Endpoint | Descrição |
|--------|----------|-----------|
| GET | `/api/canais` | Lista todos os canais |
| GET | `/api/canal/{id}` | Retorna informações de um canal |
| GET | `/api/canais?filtro=inscritos` | Filtragem dinâmica |
| GET | `/api/canais?ordenar=desc` | Ordenação |

Documentação completa disponível via **Postman**.

---

# 🧪 Testes com Postman

- Testes de rotas  
- Validação de respostas JSON  
- Conferência de filtros e ordenações  
- Geração automática da documentação técnica  

---

# 👨‍💻 Desenvolvedores

Projeto criado em dupla:

- **Pedro Lucas Pinheiro Soares**  
- **Miguel William Abrame**

Ambos responsáveis por:
✔ Back-End  
✔ Front-End  
✔ Testes  
✔ Documentação  

---

# 📄 Licença

Este é um projeto **exclusivamente educacional**.  
Uso permitido para fins de estudo, portfólio e demonstração.

---

<p align="center">Desenvolvido com ❤️ no SENAI</p>
