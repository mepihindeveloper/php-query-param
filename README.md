# php-query-param

![release](https://img.shields.io/github/v/release/mepihindeveloper/php-query-param?label=version)
[![Packagist Version](https://img.shields.io/packagist/v/mepihindeveloper/php-query-param)](https://packagist.org/packages/mepihindeveloper/php-query-param)
[![PHP Version Require](http://poser.pugx.org/mepihindeveloper/php-query-param/require/php)](https://packagist.org/packages/mepihindeveloper/php-query-param)
![license](https://img.shields.io/github/license/mepihindeveloper/php-query-param)

![build](https://github.com/mepihindeveloper/php-query-param/actions/workflows/php.yml/badge.svg?branch=stable)
[![codecov](https://codecov.io/gh/mepihindeveloper/php-query-param/branch/stable/graph/badge.svg?token=36PP7VKHKG)](https://codecov.io/gh/mepihindeveloper/php-query-param)

Компонент для работы с параметрами строки запроса. Основной функционал направлен на формирование параметров посредством реализации шаблона проектирования "Строитель".

# Структура

```
src/
--- exceptions/
------ ParamDataException.php
--- interfaces/
------ ParamInterface.php
--- Param.php
--- ParamAbstract.php
--- ParamBuilder.php
```

В директории `interfaces` хранятся необходимые интерфейсы, которые необходимо имплементировать в при реализации 
собственного класса `Param`. Класс `Param` выступает в качестве объекта параметра строки запроса. 
В директории `exceptions` хранятся необходимые исключения. Исключение `ParamDataException` необходимо
для идентификации ошибки отсутствия ключа (названия) параметра поиска.

Класс `Param` реализует сам параметр. Собственные классы параметры должны наследоваться от класса `Param`.

Класс `ParamAbstract` реализует общую логику для всех параметров. В данном случае, хранит в себе необходимые свойства объектов.

Класс `ParamBuilder` реализует логику формирования объекта параметра класса `Param`.

Примерная реализация формирования параметра:

```php
<?php

declare(strict_types = 1);

use mepihindeveloper\components\query\param\Param;
use mepihindeveloper\components\query\param\ParamBuilder;

require_once __DIR__ . '/vendor/autoload.php';

$param = (new ParamBuilder(Param::class))->setName('a')->setValue('1')->build();

echo $param->getName(); // Выведет имя параметра 'a'
print_r($param->getValue()); // Выведет значение '1' параметра 'a'
```


# Доступные методы

## ParamInterface

| Метод    | Аргументы | Возвращаемые данные | Исключения | Описание                          |
|----------|-----------|---------------------|------------|-----------------------------------|
| getName  |           | string              |            | Получает название ключа параметра |
| getValue |           | mixed               |            | Получает значение параметра       |                                                                                  |                                                   | array               |                                                   | Получает всех слушателей всех событий             |

## ParamBuilder

| Метод                                          | Аргументы                                            | Возвращаемые данные                                                  | Исключения         | Описание                           |
|------------------------------------------------|------------------------------------------------------|----------------------------------------------------------------------|--------------------|------------------------------------|
| __construct(string $paramClass = Param::class) | Класс объекта Param. Реализуется через Object::class |                                                                      |                    |                                    |
| setName(string $name)                          | Название ключа                                       | ParamBuilder                                                         |                    | Устанавливает имя параметра (ключ) |
| setValue($value)                               | Значение параметра                                   | ParamBuilder                                                         |                    | Устанавливает значение параметра   |
| build                                          |                                                      | Наследника класса Param или сам класс Param, если наследник не задан | ParamDataException | Формирует объект параметра         |

# Контакты

Вы можете связаться со мной в социальной сети ВКонтакте: [ВКонтакте: Максим Епихин](https://vk.com/maksimepikhin)

Если удобно писать на почту, то можете воспользоваться этим адресом: mepihindeveloper@gmail.com

Мой канал на YouTube, который посвящен разработке веб и игровых
проектов: [YouTube: Максим Епихин](https://www.youtube.com/channel/UCKusRcoHUy6T4sei-rVzCqQ)

Поддержать меня можно переводом на Яндекс.Деньги: [Денежный перевод](https://yoomoney.ru/to/410012382226565)