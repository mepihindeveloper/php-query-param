<?php

use Codeception\Test\Unit;
use mepihindeveloper\components\query\param\exceptions\ParamDataException;
use mepihindeveloper\components\query\param\Param;
use mepihindeveloper\components\query\param\ParamBuilder;

class ParamTest extends Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testBuilder() {
        $param = (new ParamBuilder())->setName('a')->setValue('1')->build();
        static::assertInstanceOf(Param::class, $param);
    }

    public function testBuilderException() {
        $this->expectException(ParamDataException::class);
        $param = (new ParamBuilder())->setValue('1')->build();
    }

    public function testParamAttributes() {
        $param = (new ParamBuilder())->setName('a')->setValue('1')->build();
        static::assertObjectHasAttribute('name', $param);
        static::assertObjectHasAttribute('value', $param);
        static::assertSame('a', $param->getName());
        static::assertSame('1', $param->getValue());
    }
}