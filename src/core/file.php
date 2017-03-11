<?php

namespace core;

/**
 * Description of file
 *
 * @author <abdallah elsabeeh>
 */
class file
{

    //FIXME : add extensions
    const REG = '/[^A-Za-z0-9 _ .-]/';

    public static function nameValidation($name)
    {
        return (preg_match(self::REG, $name));
    }

    //TODO:
    public static function move()
    {
        
    }

    //TODO:
    public static function remove()
    {
        
    }

    //TODO:
    public static function rename()
    {
        
    }
}
