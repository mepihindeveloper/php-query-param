<?php

declare(strict_types = 1);

namespace mepihindeveloper\components\query\param;

use mepihindeveloper\components\query\param\interfaces\ParamInterface;

/**
 * Класс Param
 *
 * Реализует логику получения данных параметра строки запроса.
 *
 * @package mepihindeveloper\components\query\param
 */
class Param extends ParamAbstract implements ParamInterface {

    /**
     * Param constructor.
     *
     * @param ParamBuilder $paramBuilder Объект строителя параметра
     */
    public function __construct(ParamBuilder $paramBuilder) {
        $this->name = $paramBuilder->name;
        $this->value = $paramBuilder->value;
    }

    /**
     * @inheritDoc
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @inheritDoc
     */
    public function getValue() {
        return $this->value;
    }
}