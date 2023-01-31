<?php
require 'application/lib/Dev.php';
use application\core\Router;

//spl_autoload_register() - функція, яка  
spl_autoload_register(function ($class) {
    //str_replace() - функція, яка замінює рядки на інші(зворотню скисну риску на звичайний слеш)
    $path = str_replace('\\', '/', $class. '.php');
    //file_exists() - функція, яка перевіряє існування файла чи каталога
    if(file_exists($path)){
        require $path;
    }
});
//session_start() - функція, яка зберігає інформацію про користувача, яка використовуватиметься на кількох сторінках (наприклад, ім'я користувача, улюблений колір...). За зумовчуванням змінні сеанси зберігаються доти, доки користувач не закриє браузер.
session_start();
$router = new Router;
$router->run();
