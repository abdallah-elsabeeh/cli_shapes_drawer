<?php

namespace engines;

use engines\FilesEngine;
use core\errorsHandler;

/**
 * 
 * Description of DrawEngine :  this class to print the final shape after Texturing
 * @author <abdallah elsabeeh>
 */
class DrawEngine
{

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

    public function __construct()
    {
        $this->__ehConstruct();
    }

    /**
     * Draw the final model shape to the cli it can also export to files 
     * 
     * @param models\Tree $shape
     * @param string target can be on of the following [cli,json,xml,html]
     * @return bool whether there is any handler attached to the event.
     */
    public function draw($shape, $target = 'cli', $file_name = null)
    {
        if ($target != 'cli' && $file_name == null) {
            throw new \Exception("no file sellected match");
        } elseif ($target === 'cli') {
            foreach ($shape->getShapeArray() as $line) {
                echo $line[0] . "\n";
            }
        } elseif ($target === 'json') {
            FilesEngine::json($shape->getShapeArray(), $file_name);
        } elseif ($target === 'xml') {
            
        } elseif ($target === 'html') {
            
        } else {
            throw new \Exception("no target match");
        }
    }
}
