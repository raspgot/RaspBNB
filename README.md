# RaspBNB

BNB like app using Symfony 4.4

```
git clone https://github.com/raspgot/RaspBNB
php bin/console doctrine:database:create
php bin/console make:migration
php bin/console doctrine:migrations:migrate
php bin/console make:fixtures
php bin/console doctrine:fixtures:load
symfony check:requirements
symfony server:start
```