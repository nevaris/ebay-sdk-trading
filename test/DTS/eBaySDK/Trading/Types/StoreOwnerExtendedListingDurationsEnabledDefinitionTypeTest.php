<?php

use DTS\eBaySDK\Trading\Types\StoreOwnerExtendedListingDurationsEnabledDefinitionType;

class StoreOwnerExtendedListingDurationsEnabledDefinitionTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new StoreOwnerExtendedListingDurationsEnabledDefinitionType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\StoreOwnerExtendedListingDurationsEnabledDefinitionType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
