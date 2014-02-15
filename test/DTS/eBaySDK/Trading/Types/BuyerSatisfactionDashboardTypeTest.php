<?php

use DTS\eBaySDK\Trading\Types\BuyerSatisfactionDashboardType;

class BuyerSatisfactionDashboardTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BuyerSatisfactionDashboardType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\BuyerSatisfactionDashboardType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
