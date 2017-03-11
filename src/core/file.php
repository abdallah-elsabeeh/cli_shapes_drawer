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
    const LOCATION = '../src/engines/exported/';

    public static function nameValidation($name)
    {
        return (preg_match(self::REG, $name));
    }

    //TODO:
    public static function move($file, $location)
    {
        
    }

    //TODO:
    public static function remove($file, $location)
    {
        
    }

    //TODO:
    public static function rename()
    {
        
    }

    public static function isExist($file)
    {
        return file_exists(self::LOCATION . '/' . $file);
    }
}
