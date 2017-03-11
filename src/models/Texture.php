<?php

namespace models;

use core\errorsHandler;
use core\validator;

/**
 * Texture is class used for shape correction to add spaces before and after stars 
 *
 * @author <abdallah elsabeeh>
 */
class Texture extends validator
{

    public $shape;

    const SYMBOL = "*";
    const FILL_SYMBOL = " ";

    /** this treat call to handle  errors by set the php.ini values 
     *  we use ( as ) to pass the new __ehConstruct instance to current class
     *  constructer 
     * ```php
     * The trait error handler Constructer defined as the  following,
     *   ini_set('display_errors', 1);
     *   ini_set('display_startup_errors', 1);
     *   error_reporting(E_ALL);
     * ```
     */
    use errorsHandler {
        errorsHandler::__construct as private __ehConstruct;
    }

    /**
     * @inheritdoc
     */
    public function __construct()
    {
        $this->__ehConstruct();
    }

    /**
     * change shape Array elements to tree
     *
     * @param models\model $shape
     */
    public static function toTree($shape)
    {
        for ($i = 0; $i != $shape->getHight(); $i++) {
            $shape->shapeArray[$i][0] = str_repeat(self::FILL_SYMBOL, ($shape->getHight() - ($i + 1)) * ( $shape->getRepetition() / 2 ))
                . $shape->shapeArray[$i][0] .
                str_repeat(self::FILL_SYMBOL, ($shape->getHight() - ($i + 1)) * ( $shape->getRepetition() / 2 ));
        }
    }

    /**
     * change shape Array elements right to left Rectangle
     *
     * @param models\model $shape
     */
    public static function toRtlRectangle($shape)
    {
        for ($i = 0; $i != $shape->getHight(); $i++) {
            $shape->shapeArray[$i][0] = $shape->shapeArray[$i][0] .
                str_repeat(self::FILL_SYMBOL, ($shape->getHight() - ($i + 1)) * ( $shape->getRepetition() / 2 ));
        }
    }

    /**
     * change shape Array elements left to right Rectangle
     *
     * @param models\model $shape
     */
    public static function toLtrRectangle($shape)
    {
        for ($i = 0; $i != $shape->getHight(); $i++) {
            $shape->shapeArray[$i][0] = str_repeat(self::SYMBOL, ($shape->getHight() - ($i + 1)) * ( $shape->getRepetition() )) . $shape->shapeArray[$i][0];
        }
    }

    /**
     * cast tree model to Square model
     *
     * @param models\tree $shape
     */
    public static function treeToSquare($tree)
    {
        for ($i = 0; $i != $shape->getHight(); $i++) {
            $shape->shapeArray[$i][0] = str_repeat(self::SYMBOL, ($shape->getHight() - ($i + 1)) * ( $shape->getRepetition() / 2 ))
                . $shape->shapeArray[$i][0] .
                str_repeat(self::SYMBOL, ($shape->getHight() - ($i + 1)) * ( $shape->getRepetition() / 2 ));
        }
    }

    /**
     * Fill the $shape array
     */
    protected function createShape($hight, $repetition)
    {
        for ($i = 0; $i != $hight; $i++) {
            $this->shape[$i][0] = str_repeat(self::SYMBOL, ($i * $repetition) + 1);
        }
        return $this->shape;
    }
}
