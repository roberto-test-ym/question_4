# Teste para Desenvolvedor Sênior Back-end - Questão #4

[![PHP Version][ico-php-version]](https://hub.docker.com/_/php)
[![NGINX Version][ico-nginx-version]](https://hub.docker.com/_/nginx)

This is a simple example for running a docker container with PHP-FPM and NGINX.

## Get it up and running

[Install docker on your machine.][install-docker]

[Install docker-compose on your machine.][install-docker-compose]

Clone this repository.

``` bash
$ git clone https://github.com/roberto-test-ym/question_4.git
```

Switch to the cloned directory.

``` bash
$ cd question_4
```

Start the stack.

``` bash
$ docker-compose up -d 
```


Visit `localhost:8080` in your browser.

## Objetivo

``` bash
Segurança Avançada Desenvolva uma função em PHP para validar e filtrar dados
de entrada sensíveis, como senhas, utilizando as melhores práticas de segurança.
Considere aspectos como a proteção contra ataques de injeção e manipulação
maliciosa.
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-php-version]: https://img.shields.io/badge/PHP-7.4--fpm-blue?style=flat-square
[ico-nginx-version]: https://img.shields.io/badge/NGINX-1.17-green?style=flat-square
[install-docker]: https://docs.docker.com/engine/installation
[install-docker-compose]: https://docs.docker.com/compose/install
