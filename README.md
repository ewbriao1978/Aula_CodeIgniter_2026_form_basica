
App/View/*
App/Controller/Home.php
App/Config/Routes.php

Model ;(

-> para melhorar a vida de vocês : aumentar nível de debug
renomear aqui "env"  para ".env"
Mudar linha onde menciona 
# CI_ENVIRONMENT = production
para 
CI_ENVIRONMENT = development


Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
