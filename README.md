API Demo
==============

Package Setup:
-------------------
```shell
1) git clone https://github.com/kalpeshcvi/production-api.git
2) cd production-api (Go to main directory)
3) composer install (If composer not installed on your system then https://getcomposer.org/)
4) bin/console cache:clear
5) php -S 127.0.0.1:8000 -t public (open new terminal and run this command and do not close until your testing is done)
```

Database Setup:
-------------------
Open file config/packages/doctrine.yaml (change "url" based on your setup)
```shell
1) mysql://user:password@127.0.0.1:3306/sf4_production
	=> Replace your username and password 
	=> Replace your database hostname if different.
2) bin/console doctrine:database:create
3) bin/console doctrine:schema:create
```
Web view and Document of API:
-------------------
1) http://127.0.0.1:8000/api

Testing:
-------------------
```shell
2) php bin/phpunit
```