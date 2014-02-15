<?php

use DTS\eBaySDK\Trading\Types\PlaceOfferResponseType;

class PlaceOfferResponseTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PlaceOfferResponseType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\PlaceOfferResponseType', $this->obj);
    }

    public function testExtendsAbstractResponseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\AbstractResponseType', $this->obj);
    }
}
