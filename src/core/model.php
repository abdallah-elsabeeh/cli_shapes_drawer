<?php

namespace core;

/**
 * models is the interface that should be implemented by any model class.
 *  
 * @author <abdallah elsabeeh>
 */
interface model
{

    public function __construct();

    public function setHight($hight);

    public function setRepetition($repetition);

    public function getHight();

    public function getShapeArray();

    public function getRepetition();

}
