<?php

namespace tests;

require_once '../../vendor/autoload.php';
use PHPUnit\Framework\TestCase;
use \engines\DrawEngine;
use models\Tree;

/**
 * Description of drawEngine
 *
 * @author <abdallah elsabeeh>
 */
class DrawEngineTest extends TestCase
{

    protected $_treeClass;
    protected $_drawClass;

    public function setUp()
    {

        parent::setUp();
        $this->_treeClass = new Tree();
        $this->_drawClass = new DrawEngine();
    }

    public function testResult()
    {

        
        $functionResult = $this->_drawClass->draw($this->_treeClass->setHight(10)->setRepetition(2));
        
        $this->assertTrue ((($functionResult== $expectedResult) ? true : false));
        
    }
}
