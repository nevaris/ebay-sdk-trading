<?php

use DTS\eBaySDK\Trading\Types\DispatchCutoffTimePreferencesType;

class DispatchCutoffTimePreferencesTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DispatchCutoffTimePreferencesType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\DispatchCutoffTimePreferencesType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
