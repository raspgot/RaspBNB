# RaspBNB

BNB like app using [Symfony 4.4.2](https://symfony.com/releases/4.4)

### Installation

```bash
git clone https://github.com/raspgot/RaspBNB
composer install
```

### Database

```bash
php bin/console doctrine:database:create
(php bin/console make:migration)
php bin/console doctrine:migrations:migrate
```
Fixtures available in AppFixtures.php with:
```bash
php bin/console doctrine:fixtures:load
```

### Symfony bin

```bash
symfony check:requirements
php bin/console cache:clear
symfony server:start
```
