<?php

namespace core;

/**
 * this trit to decide  how the errors Handler works 
 * to show hide errors with or without costume view
 * @author <abdallah elsabeeh>
 */
trait errorsHandler
{

    public function __construct()
    {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    }
}
