## Первичная установка
- Установите зависимости
    composer install

## Запуск сервера
docker run -it --rm --name resolventagroup_test -p "8080:8080" -v /private/var/www:/var/www -w /var/www php:7.2-fpm-alpine sh
php -S 0.0.0.0:8080 -t public

## Запуск тестов
composer run test

## Установка первичных данных
    // Загружаем seeds
    php artisan db:seed
    
    // Загружаем праздники из Google Calendar
    php artisan google:calendar 2018-01-01 2018-01-14
    
