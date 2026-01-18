# 🎮 Ceuu - Plataforma de Venda de Jogos Digitais

![Laravel](https://img.shields.io/badge/Laravel-11-red?style=for-the-badge&logo=laravel)
![Tailwind CSS](https://img.shields.io/badge/Tailwind-CSS-38B2AC?style=for-the-badge&logo=tailwind-css)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php)
![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)

> Clone da **Nuuvem** - Sua loja de jogos digitais com os melhores preços

**Ceuu** é uma plataforma e-commerce para venda de keys/códigos de jogos digitais, desenvolvida com Laravel 11 seguindo as melhores práticas de desenvolvimento fullstack MVC.

---

## ✨ Sobre o Projeto

Este projeto é um **estudo de caso** que visa replicar as funcionalidades principais de uma loja de jogos digital moderna, oferecendo:

- 🎯 **Catálogo completo** de jogos com filtros e busca
- 🛒 **Carrinho de compras** intuitivo
- 💳 **Sistema de pagamento** seguro
- 🔑 **Entrega instantânea** de keys por email
- 👤 **Área do cliente** para gerenciar pedidos
- ⚙️ **Painel administrativo** completo
- 🌙 **Design moderno** em dark mode com tema azul

---

## 🚀 Tecnologias

### Backend
- **Laravel 12**
- **MySQL**

### Frontend
- **Blade** - Template engine do Laravel
- **Tailwind CSS** - Framework CSS utility-first

### Integrações (WIP)
- **Picpay / Mercado Pago** - Gateway de pagamento
- **Mailtrap / SendGrid** - Serviço de email
- **AWS S3** - Armazenamento de imagens

---

## 📦 Funcionalidades (WIP)

### Para Clientes
- ✅ Navegação por catálogo de jogos
- ✅ Sistema de busca e filtros avançados
- ✅ Visualização detalhada de jogos
- ✅ Carrinho de compras
- ✅ Checkout seguro
- ✅ Recebimento de keys por email
- ✅ Histórico de pedidos
- ✅ Lista de desejos (Wishlist)
- ✅ Sistema de avaliações

### Para Administradores
- ✅ Dashboard com métricas
- ✅ Gestão de jogos (CRUD)
- ✅ Gerenciamento de keys/códigos
- ✅ Controle de pedidos
- ✅ Gerenciamento de usuários
- ✅ Relatórios de vendas

---

## 🎨 Design System

O projeto utiliza uma paleta de cores inspirada no tema "céu":

- **Backgrounds**: `slate-900`, `slate-800`, `slate-950`
- **Cor primária**: `blue-400`, `blue-600`
- **Acentos**: `green-400` (descontos), `blue-400` (links)
- **Estilo**: Minimalista, limpo, dark mode

---

## 🔐 Segurança (WIP)

- 🔒 Keys armazenadas **criptografadas** no banco de dados
- ✅ Validação de estoque em tempo real
- 🔄 Sistema de transações para evitar vendas duplicadas
- 🛡️ Autenticação com verificação de email
- 💳 Integração segura com gateways de pagamento
- 📧 Webhooks para confirmação assíncrona de pagamentos

---

## 📋 Pré-requisitos

Antes de começar, certifique-se de ter instalado:

- **PHP** >= 8.2
- **Composer** >= 2.0
- **Node.js** >= 18.x
- **MySQL** >= 8.0

---

## 🚀 Como Executar o Projeto

### 1. Clone o repositório

```bash
git clone https://github.com/seu-usuario/ceuu.git
cd ceuu
composer install
npm install
cp .env.example .env
```

### 4. Configure o arquivo de ambiente

Edite o arquivo `.env` e configure:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ceuu
DB_USERNAME=root
DB_PASSWORD=sua_senha

MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=seu_username
MAIL_PASSWORD=sua_senha

# Adicione suas chaves de pagamento
STRIPE_KEY=sua_stripe_key
STRIPE_SECRET=seu_stripe_secret
```

### 5. Gere a chave da aplicação

```bash
php artisan key:generate
```

### 6. Execute as migrations

```bash
php artisan migrate
```

### 7. (Opcional) Popule o banco com dados de teste

```bash
php artisan db:seed
```

### 8. Compile os assets

```bash
npm run dev
```

### 9. Inicie o servidor

```bash
php artisan serve
```
ou
```bash
composer run dev
```

Acesse: **http://localhost:8000**

---

## 🧪 Testes

Execute os testes com:

```bash
php artisan test
```

Ou com coverage:

```bash
php artisan test --coverage
```

---

## 📚 Documentação Adicional

- [Laravel Documentation](https://laravel.com/docs/11.x)
- [Tailwind CSS Documentation](https://tailwindcss.com/docs)

---

## 🤝 Contribuindo

Contribuições são bem-vindas! Sinta-se à vontade para:

1. Fazer um fork do projeto
2. Criar uma branch para sua feature (`git checkout -b feature/MinhaFeature`)
3. Commit suas mudanças (`git commit -m 'Adiciona MinhaFeature'`)
4. Push para a branch (`git push origin feature/MinhaFeature`)
5. Abrir um Pull Request

---

## 📝 Licença

Este projeto está sob a licença MIT. Veja o arquivo LICENSE para mais detalhes.

---

## 👤 Autor

**JulioDesar**

- GitHub: [@JulioDesar](https://github.com/JulioDesar)
- LinkedIn: [Julio Cesar](https://www.linkedin.com/in/juliodesar/)

---

## 🎯 Roadmap

- [x] Landing page com design dark mode
- [x] Estrutura base do projeto
- [ ] Sistema de autenticação completo
- [ ] CRUD de jogos (admin)
- [ ] Catálogo público com filtros
- [ ] Sistema de carrinho
- [ ] Integração com gateway de pagamento
- [ ] Sistema de entrega de keys
- [ ] Área do cliente
- [ ] Wishlist
- [ ] Sistema de reviews
- [ ] Dashboard administrativo
- [ ] Cupons de desconto
- [ ] Sistema de recomendações

---

## 💡 Inspiração

Este projeto foi inspirado na [Nuuvem](https://www.nuuvem.com), uma das maiores plataformas de venda de jogos digitais do Brasil.

---

## ⭐ Mostre seu apoio

Se este projeto foi útil para você, considere dar uma ⭐️!

---

<p align="center">
  Feito com ❤️ e ☕ usando Laravel
</p>