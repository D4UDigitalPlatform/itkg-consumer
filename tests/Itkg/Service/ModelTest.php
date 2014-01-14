<?php
namespace Itkg\Service;

use Itkg\Mock\Service\Model;
/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2012-11-05 at 15:08:49.
 */
class ModelTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Model
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Model;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Itkg\Service\Model::getValidator
     * @todo   Implement testGetValidator().
     */
    public function testGetValidator()
    {
        
    }

    /**
     * @covers Itkg\Service\Model::setValidator
     * @todo   Implement testSetValidator().
     */
    public function testSetValidator()
    {
    }

    /**
     * @covers Itkg\Service\Model::validate
     * @todo   Implement testValidate().
     */
    public function testValidate()
    {
    }

    /**
     * @covers Itkg\Service\Model::init
     * @todo   Implement testInit().
     */
    public function testInit(){
    }

    /**
     * @covers Itkg\Service\Model::getClassMap
     */
    public function testGetClassMap()
    {
        $this->assertEquals(
          get_class($this->object),
          $this->object->getClassMap()      
        );
    }

    /**
     * @covers Itkg\Service\Model::getErrors
     */
    public function testGetErrors()
    {
        $this->assertEquals(0, sizeof($this->object->errors));
    }

    /**
     * @covers Itkg\Service\Model::injectDatas
     * @todo   Implement testInjectDatas().
     */
    public function testInjectDatas()
    {
        // Remove the following lines when you implement this test.
        /*
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
         */
    }

    /**
     * @covers Itkg\Service\Model::__toXML
     * @todo   Implement test__toXML().
     */
    public function test__toXML()
    {
        // Remove the following lines when you implement this test.
        /*
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
         */
    }

    /**
     * @covers Itkg\Service\Model::__toLog
     * @todo   Implement test__toLog().
     */
    public function test__toLog()
    {
        // Remove the following lines when you implement this test.
        /*
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
         */
    }

    /**
     * @covers Itkg\Service\Model::__toRequest
     * @todo   Implement test__toRequest().
     */
    public function test__toRequest()
    {
        // Remove the following lines when you implement this test.
        /*
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
         */
    }

    /**
     * @covers Itkg\Service\Model::__toArray
     * @todo   Implement test__toArray().
     */
    public function test__toArray()
    {
        // Remove the following lines when you implement this test.
        /*
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
         */
    }

    /**
     * @covers Itkg\Service\Model::__toDatas
     * @todo   Implement test__toDatas().
     */
    public function test__toDatas()
    {
        // Remove the following lines when you implement this test.
        /*
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
         */
    }

    /**
     * @covers Itkg\Service\Model::__set
     * @todo   Implement test__set().
     */
    public function test__set()
    {
        // Remove the following lines when you implement this test.
        /*
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
         */
    }

    /**
     * @covers Itkg\Service\Model::__get
     * @todo   Implement test__get().
     */
    public function test__get()
    {
        // Remove the following lines when you implement this test.
        /*
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
         */
    }
}