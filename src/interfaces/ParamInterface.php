<?php

declare(strict_types = 1);

namespace mepihindeveloper\components\query\param\interfaces;

/**
 * Интерфейс ParamInterface
 *
 * Набор методов для реализации получения данных параметра строки запроса
 *
 * @package mepihindeveloper\components\query\param\interfaces
 */
interface ParamInterface {

    /**
     * Получает название ключа параметра
     *
     * @return string Возвращает строку с названием ключа параметра
     */
    public function getName(): string;

    /**
     * Получает значение параметра
     *
     * @return mixed Возвращает значение параметра
     */
    public function getValue();
}