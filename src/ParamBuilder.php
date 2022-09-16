<?php

declare(strict_types = 1);

namespace mepihindeveloper\components\query\param;

use mepihindeveloper\components\query\param\exceptions\ParamDataException;

/**
 * Класс ParamBuilder
 *
 * Реализует логику построения Param.
 *
 * @package mepihindeveloper\components\query\param
 */
class ParamBuilder extends ParamAbstract {

    /** @var string Класс объекта Param. Реализуется через Object::class */
    protected string $param;

    /**
     * ParamBuilder constructor.
     *
     * @param string $paramClass Класс объекта Param. Реализуется через Object::class
     */
    public function __construct(string $paramClass = Param::class) {
        $this->param = $paramClass;
    }

    /**
     * Устанавливает имя параметра (ключ)
     *
     * @param string $name Название ключа
     *
     * @return $this Возвращает самого себя с определенными свойствами
     */
    public function setName(string $name): self {
        $this->name = $name;

        return $this;
    }

    /**
     * Устанавливает значение параметра
     *
     * @param mixed $value Значение параметра
     *
     * @return $this Возвращает самого себя с определенными свойствами
     */
    public function setValue($value): self {
        $this->value = $value;

        return $this;
    }

    /**
     * Формирует объект параметра
     *
     * @return Param Возвращает сформированный объект параметра
     * @throws ParamDataException
     */
    public function build(): Param {
        if ($this->name === null) {
            throw new ParamDataException('Ошибка формирование параметра: не указан ключ (название)');
        }

        return new $this->param($this);
    }
}