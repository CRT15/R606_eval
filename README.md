# R606_eval

## Pour exécuter le projet

```bash
composer install
docker compose up -d
```

## L'application est accessible à l'URL suivante
localhost:8080/src

## Pour exécuter les tests unitaires

```bash
docker exec php_web ./vendor/bin/phpunit tests
```

## Pour exécuter le linter PHPStan en niveau 6
```bash
vendor/bin/phpstan analyse -l 6 src tests
```