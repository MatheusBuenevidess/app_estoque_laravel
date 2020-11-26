# Criação de um Crud de produtos com Laravel 5.8

O mesmo contem a adicção, exclusão, listagem, atualização e filtro de produtos. 


Para instalar basta seguir estes passos.

1. `composer install`
2. `mysql -u root -p`
3. `create database db_estoque_laravel`
4. `quit`
5. `cp .env.example .env`
6. `php artisan key:generate`
7. Configure o arquivo .env: `DB_DATABASE=db_estoque_laravel`
8. `php artisan migrate`
9. `php artisan db:seed`
10. `php artisan serve`

