<?php

namespace core;

/**
 * validator is helper class to validate Arguments
 *
 * @author <abdallah elsabeeh>
 */
class validator
{

    /**
     * numbersValidator to use with model child class function Arguments 
     * 
     * @property any $number
     * @property any $parameterName
     * 
     */
    public function numbersValidator($number, $parameterName)
    {
        if (!is_numeric($number) || $number < 1) {
            throw new \InvalidArgumentException("use only number for $parameterName");
        }
    }
}
