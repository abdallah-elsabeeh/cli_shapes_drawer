<?php

namespace models;

use core\model;
use models\Texture;

/**
 * 
 * Description of Tree :  tree is a model inherited class that create unsorted
 * tree shape 
 *
 * @property integer $hight
 * @property integer $repetition
 * @property array $shapeArray
 * 
 * @author <abdallah elsabeeh>
 */
class Tree extends Texture implements model
{

    protected $hight;
    protected $repetition;
    protected $shapeArray;

    /**
     * @inheritdoc
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * set shape layers count
     *
     * @param integer $hight
     * @return models\Tree
     */
    public function setHight($hight)
    {
        $this->numbersValidator($hight, 'hight');
        $this->hight = $hight;
        $this->shapeArray = parent::createShape($this->hight, $this->repetition);
        parent::toTree($this);
        return $this;
    }

    /**
     * set Repetition every layer in the tree
     *
     * @param integer $repetition
     * @return models\Tree
     */
    public function setRepetition($repetition)
    {
        $this->numbersValidator($repetition, 'repetition');
        $this->repetition = $repetition;
        $this->shapeArray = parent::createShape($this->hight, $this->repetition);
        parent::toTree($this);
        return $this;
    }

    /**
     * get Hight Property
     *
     * @return integer|zero
     */
    public function getHight()
    {
        return $this->hight;
    }

    /**
     * get Repetition Property
     *
     * @return integer|zero
     */
    public function getRepetition()
    {
        return $this->repetition;
    }

    /**
     * get Repetition Property
     *
     * @return integer|zero
     */
    public function getShapeArray()
    {
        return $this->shapeArray;
    }
}
