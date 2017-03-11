<?php

namespace engines;

use core\file;
use core\errorsHandler;

/**
 * Description of FilesEngine
 *
 * @author <abdallah elsabeeh>
 */
class FilesEngine extends file
{

    use errorsHandler {
        errorsHandler::__construct as private __ehConstruct;
    }

    public function __construct()
    {
        $this->__ehConstruct();
    }

    public static function json($data, string $filename)
    {
        if (parent::nameValidation($filename)) {
            throw new \Exception("File name is not vaild");
        }
        $json_data = json_encode($data);
        file_put_contents(parent::LOCATION . $filename . '.json', $json_data);
        if (parent::isExist($filename . '.json')) {
            echo 'File updated';
        } else {
          echo 'File created';  
        }
    }

    public static function xml($data, string $filename, string $location = null)
    {
        //TODO:
    }

    public static function html($data, string $filename, string $location = null)
    {
        //TODO: please export to html or draw with html tags   
    }
}
