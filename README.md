# PHP 7

#### Amazon Linux

```
# yum install php70
# yum install mod24_ssl
```

#### Ubuntu

```
$ sudo apt-get install php7.0
$ sudo a2enmod ssl
$ sudo a2ensite default-ssl
$ sudo service apache2 restart
```


# Install Twig

- requires PHP 7

```
composer require "twig/twig:^2.0"
```
