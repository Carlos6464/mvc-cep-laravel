# 📌 Gerenciador de CEPs com Laravel e MySQL  

Este projeto foi desenvolvido utilizando o **Laravel** como framework backend e **MySQL** como banco de dados. O sistema permite a busca de **CEPs** por meio da **API ViaCEP**, salvando os resultados no banco de dados para futuras consultas. Além disso, o projeto inclui funcionalidades para listar todos os CEPs cadastrados e excluí-los conforme necessário.  

---

## 🚀 Principais Funcionalidades  

- ✅ **Busca de CEPs na API ViaCEP** – O usuário pode inserir um CEP, e o sistema consulta automaticamente os detalhes como rua, bairro, cidade e estado.  
- ✅ **Cadastro no Banco de Dados** – Após a consulta, o CEP é salvo no banco MySQL para futuras referências.  
- ✅ **Listagem de CEPs cadastrados** – O sistema exibe todos os CEPs já armazenados, permitindo ao usuário visualizar rapidamente os dados registrados.  
- ✅ **Exclusão de CEPs** – O usuário pode remover CEPs cadastrados no banco de dados, garantindo que apenas informações relevantes sejam mantidas.  

---

## 🔧 Tecnologias Utilizadas  

- **Laravel** – Framework PHP para o desenvolvimento backend.  
- **MySQL** – Banco de dados para armazenar os CEPs.  
- **API ViaCEP** – Serviço utilizado para buscar os dados do endereço a partir do CEP.  
- **Blade (Laravel Views)** – Engine de templates para exibição dos dados.  
- **Bootstrap & SweetAlert2** *(opcional)* – Para melhorar a interface e a experiência do usuário.  

---

## 🏗 Possíveis Melhorias Futuras  

- 📌 Implementação de autenticação para gerenciar usuários e seus CEPs.  
- 📌 Edição dos CEPs já cadastrados.  
- 📌 Integração com APIs de mapas para exibir a localização do CEP.  

---

## 📜 Licença  

Este projeto é de código aberto e pode ser modificado conforme necessário.  

🚀 **Desenvolvido com Laravel e paixão por código!** 🔥  




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
