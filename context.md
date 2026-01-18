# CEUU - Context

## 📋 O que é o projeto?

Clone da **Nuuvem** - plataforma e-commerce para venda de **keys/códigos de jogos digitais**.

Projeto de **estudo** para aprender Laravel fullstack com MVC seguindo as melhores práticas.

---

## 🎯 Objetivo

Criar uma loja de jogos digital funcional com:
- Catálogo de jogos
- Sistema de carrinho e checkout
- Gestão de keys/códigos
- Painel administrativo
- Sistema de pagamento

---

## 🎨 Design

- **Tema**: Dark mode com azul escuro (slate-900, slate-800, slate-950)
- **Cor principal**: Blue-400 / Blue-600 (tema "céu")
- **Referência visual**: Nuuvem
- **Estilo**: Minimalista, limpo, moderno

---

## 🛠️ Stack Tecnológica

### Backend
- **Framework**: Laravel 11
- **Arquitetura**: MVC (fullstack)
- **Database**: MySQL (usando sqlite por enquanto para testes)

### Frontend
- **Template Engine**: Blade
- **CSS**: Tailwind CSS

### Integrações (ainda nao utilizado, apenas quando chegar na parte de integracao)
- **Email**: Mailtrap (dev) / SendGrid (prod)
- **Storage**: Local / S3 (imagens)
- **Pagamento**: Stripe / Mercado Pago

---

## 📦 Funcionalidades Principais

### Cliente
- Navegação e busca de jogos
- Visualizar detalhes do jogo
- Adicionar ao carrinho
- Checkout e pagamento
- Receber key por email
- Área do cliente (meus pedidos)
- Wishlist
- Reviews

### Admin
- Cadastrar jogos
- Gerenciar keys/códigos
- Visualizar pedidos
- Controle de estoque
- Relatórios

---

## 🗂️ Estrutura Laravel
app/
├── Http/Controllers/
│ ├── Admin/ # Painel administrativo
│ ├── GameController
│ ├── CartController
│ ├── CheckoutController
│ └── OrderController
├── Models/ # Eloquent models
├── Services/ # Lógica de negócio
├── Enums/ # Status, roles, etc
├── Events/ # Eventos do sistema
├── Listeners/ # Ações após eventos
├── Jobs/ # Processamento assíncrono
└── Policies/ # Autorização

---

## 🔐 Pontos de Segurança

- Keys armazenadas **criptografadas**
- Validação de estoque antes da venda
- Webhook para confirmar pagamentos
- Sistema de reserva temporária de keys
- Autenticação com email verification

---

## 📊 Roadmap

### Fase 1 - MVP
- ✅ Landing page
- [ ] CRUD de jogos (admin)
- [ ] Catálogo público
- [ ] Carrinho
- [ ] Checkout básico
- [ ] Sistema de keys

### Fase 2
- [ ] Pagamento real
- [ ] Área do cliente
- [ ] Wishlist
- [ ] Busca avançada

### Fase 3
- [ ] Reviews
- [ ] Cupons de desconto
- [ ] Recomendações
- [ ] Dashboard admin

---

## 📝 Convenções do Projeto

- Seguir **Laravel Best Practices**
- Usar **Services** para lógica complexa
- **Enums** para status e constantes
- **Form Requests** para validação
- **Policies** para autorização
- Commits em **português**

---

**Versão**: 1.0  
**Última atualização**: Janeiro 2026