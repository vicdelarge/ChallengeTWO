# Challenge TWO

Run composer install to download dependencies for unit tests and PSR2 standard check.

PSR2 Standard Check
-------------------
```
./vendor/squizlabs/php_codesniffer/bin/phpcs --extensions=php src/app/ --standard=PSR2 -n
```

PHPUnit Tests
-------------

```
./vendor/bin/phpunit tests/FormatNumberTest.php
```
