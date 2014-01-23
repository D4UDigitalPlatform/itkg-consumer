<?php
namespace Itkg\Soap;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2014-01-16 at 18:57:46.
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SoapException
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Client(realpath(dirname(__FILE__)).'/test.wsdl');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }
    /**
     * @covers Itkg\Soap\Client::getEnd
     */
    public function testGetEnd()
    {
        try {
            $this->assertNull($this->object->getEnd());
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }
    }
    /**
     * @covers Itkg\Soap\Client::getStart
     */
    public function testGetStart()
    {
        try {
            $this->assertNull($this->object->getStart());
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }
    }
    /**
     * @covers Itkg\Soap\Client::checkRequiredOptions
     */
    public function testCheckRequiredOptions()
    {
        try {
            $this->assertNull($this->object->checkRequiredOptions());
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }
    }    
    

}
