<?php

declare(strict_types = 1);

namespace mepihindeveloper\components\query\param;

/**
 * Класс ParamAbstract
 *
 * Реализует хранение переменных и общую логику для всех классов Param.
 *
 * @package mepihindeveloper\components\query\param
 */
class ParamAbstract {
    /** @var string|null Имя ключа */
    protected ?string $name = null;
    /** @var mixed|null Значение ключа  */
    protected $value;
}